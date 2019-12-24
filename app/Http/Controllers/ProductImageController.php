<?php

namespace App\Http\Controllers;
use App\ProductImage;
use App\Product;
use App\ProductColor;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductImage::with('productImg')->paginate(5);
        

        return  view('product-image.index', compact('data','productImg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=Product::all();
        return  view('product-image.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ProductImage;
        $product=Product::all();
        $data->product_id = $product->id;
        $filename = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('media/product'), $filename);
        $data->image=$filename;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=ProductImage::find($id)->with('productImg')->first(); 
        return view('product-image.show', compact('product','productImg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::all();
        $data = ProductImage::find($id);
        return  view('product-image.edit', compact('data', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = new ProductImage;
        $data->product_id = $product_id;
        $filename = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('media/product'), $filename);
        $data->image=$filename;
        $data->save();
        ProductImage::find($id)->update($data);
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProductImage::find($id);
        $data->delete();
        return redirect()->back();
    }
}
