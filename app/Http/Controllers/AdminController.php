<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construc(){
        $this->middleware('is_admin');
    }
    //
    function viewHome(){
        return view('admin/home');
    }

    function viewProduct(){
        return view('admin/product/index');
    }
}
