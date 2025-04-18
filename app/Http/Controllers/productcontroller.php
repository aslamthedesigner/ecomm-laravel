<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    function index()
    {
        $data = product::all();
        return view('product', ['products' => $data]);
        // return $data;
    }
    function details($id){
         $data = product::find($id);

        return view('details', ['product'=> $data]);
        // return $data;
    }
}
