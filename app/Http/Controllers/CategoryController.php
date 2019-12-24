<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sql = Category::with('product');
        // $sql = Product::with('category');
        if ($request->search) {
            $sql->where('name', 'LIKE', '%' . $request->search . '%');
        }
        if ($request->status) {
            $sql->where('status', '=', $request->status);
        }
        $data = $sql->paginate(2);
        // ->paginate(2)
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = null;
        return view('category.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('media/category'), $filename);
            $data['image'] = $filename;
        }
        Category::create($data);
        // $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::find($id);
        return view('category.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
        return view('category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('media/category'), $filename);
            $data['image'] = $filename;
        }
        Category::find($id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'CAtegory deleted');
    }
}
