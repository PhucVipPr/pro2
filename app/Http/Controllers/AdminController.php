<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('is_admin');
    }
    //
    function viewHome(){
        return view('admin/home');
    }

    function viewProduct(){
        $product = Product::all();
        dd($product);
        return view('admin/product/index',['product'=>$product]);
    }

    function show($id){
        $product = Product::findById($id);
        return view('admin/product/index',['product'=>$product]);
    }
}
