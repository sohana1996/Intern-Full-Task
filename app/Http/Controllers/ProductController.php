<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $categories = Category::all();
        // $data = Product::with('category')->get();
        $sql = Product::with('category');
        if($request->search) {
            $sql->where('name', 'LIKE', '%'.$request->search.'%');
         }
         if($request->status){
            $sql->where('status', '=', $request->status);
        }
         if($request->category_id){
            $sql->where('category_id', '=', $request->category_id);
        }
       
        $data = $sql->paginate(2);
        return  view('product.index', compact('data','category', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return  view('product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $productData = Product::create($data);
        if ($productData->id){
            // ########### After Product Insert ##############
           
                if (!empty($data['product_color'])) {
                    //array filter for zero empty value check
                    $productColors = $data['product_color'];
                    $productColors = !empty($productColors) ? array_values(array_filter($productColors)) : array();
                    $colorData = [];
                    foreach ($productColors as $k => $color) {
                        $colorData[] = [
                            'product_id'   => $productData->id,
                            'color_name' => $color,
                        ];
                    }
                    if (!empty($colorData)) {
                        ProductColor::insert($colorData);
                    }else{
                        return redirect()->back()->with('error', 'Product color insert failed!');
                    }
                }
            
                if ($request->hasFile('product_image')) {
                    $images = [];
                    foreach($request->file('product_image') as $key => $image)
                    {
                        $filename = time().'.'.$image->getClientOriginalExtension();
                        $image->move(public_path('media/product'), $filename);
                        $images[] = [
                            'product_id' => $productData->id,
                            'image' => $filename,
                        ];
                    }
                    if (!empty($images)) {
                        ProductImage::insert($images);
                    }
                }
           
            return redirect()->back()->with('success', 'Product save successfully!');
        }else{
            return redirect()->back()->with('error', 'Product insert failed!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product=Product::find($id)->with('category')->with('images')->with('colors')->where('id', $id)->get(); 
        // return $product;
        // return view('product.show', compact('product','category','images', 'colors'));

        $product=Product::find($id); 
        $productImgs = ProductImage::where('product_id', $id)->get();
        $productcolors = ProductColor::where('product_id', $id)->get();
        // return $productcolors;
        return view('product.show', compact('product','category','productImgs', 'productcolors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::all();
        $data = Product::find($id);
        return  view('product.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        Product::find($id)->update($data);
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();
    }
}
