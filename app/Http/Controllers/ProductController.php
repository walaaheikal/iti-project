<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
     $products=Product::get();

      return view('admin.index',['products'=>$products]);
    }
    function show($id)
    {
        $product=Product::find($id);

        return view('admin.show',compact('product'));
    }
    function destroy($id)
    {

        Product::where('id',$id)->delete();
          return redirect()->route('product.index');
    }
    function update($id)
    {
       $product=Product::find($id);
       return view('admin.update',
       compact('product'));
    }
    function edit($id,Request $request)
    {

    //   dd($id,$request->all());
    $product=product::find($id);
    // $validated=$request->validate([
    //     'product_name'=>'required',
    //     'product_price'=>'required',
    //     'product_availability'=>'required',
    //     'categry_id'=>'required',

    // ])

    $input = $request->all();

    if ($image = $request->file('product_image')) {
        $destinationPath = 'imgs/';
        $profileImage = date('www') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['product_image'] = "$profileImage";
    }else{
        unset($input['product_image']);
    }

    $product->update($input);


    // $product->update($request->all());
    return redirect()->route('product.index');
    }
    function create()
    {
        return view('admin.create');
    }

    function store(Request $request)
    {
        // $request->validate([
        // 'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // 'product_name'=>'required',
        // 'product_price'=>'required',
        // 'product_availability'=>'required',
        // 'categry_id'=>'required',
        // ]);
        // dd($request->all());

        // if($request->hasfile('product_image')){
        // $image=$request->file('product_image');
        // $image=$image->getClientOriginalExtension();
        // $image_name=time(). '.' . $image;
        // $request->product_image->move('public/imgs/' . $image_name);}

    // if ($image = $request->file('product_image')) {
    //     $destinationPath = 'imgs/';
    //     $profileImage = date('www') . "." . $image->getClientOriginalExtension();
    //     $image->move($destinationPath, $profileImage);
    //     $input['product_image'] = "$profileImage";
    // }
    $input=$request->all();
        Product::create($input);
        return redirect()->route('product.index');

    }
}


