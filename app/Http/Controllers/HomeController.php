<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $products=Product::take(9)->get();
        return view('home',['products'=>$products]);
    }
     function show($id){
        $product=Product::find($id);
        return view('show',['product'=>$product]);
    }
    function search(request $request){
        //$search=$request->search;
        $products=Product::where('product_name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$products]);
    }

}
