<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {

        $user = Auth::user();
        // $orders = $user->orders;
        $orders = DB::table('orders')
    ->join('products', 'orders.product_id', '=', 'products.id')
    ->select('orders.*', 'products.product_name','products.product_availability','products.product_price')
    ->where('orders.user_id', Auth::id())
    ->get();





        return view('profile', compact('user', 'orders'));
    }

}
