<?php

namespace App\Http\Controllers;

use App\Http\Middleware\userauth;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use  Session;
use Symfony\Component\Console\Input\Input;

class productcontroller extends Controller
{
    function index()
    {
        $data = product::all();
        return view('product', ['products' => $data]);
        // return $data;
    }
    function details($id)
    {
        $data = product::find($id);

        return view('details', ['product' => $data]);
        // return $data;
    }
    function search(Request $req)
    {
        $data = product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addtocart(Request $req)
    {

        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];

            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartitem()
    {
        $user_id = session()->get('user')->id;
        return cart::where('user_id', $user_id)->count();
    }
    function cartlist()
    {
        $user_id = session()->get('user')->id;
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $user_id)
            ->get();
        return view('/cartlist', ['products' => $data]);
    }
    function removecartitem($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }
    function ordernow()
    {
        $user_id = session()->get('user')->id;
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $user_id)
            ->sum('products.price');

        return view('/ordernow', ['products_total' => $total]);
    }
    function orderplace(Request $req){
        $user_id = session()->get('user')->id;
       $allcart = cart::where('user_id',$user_id)->get();
        foreach($allcart as $cart){
            $order = new order;
            $order->product_id= $cart->product_id;
            $order->user_id= $cart->user_id;
            $order->address= $req->address;
            $order->status= "pending";
            $order->payment_method= $req->payment;
            $order->payment_status= "pending";
            $order->save();
        }
        $allcart = cart::where('user_id',$user_id)->delete(); //order done remove list in cart.
        return redirect('/');
        // return $req-Input();
    }
}
