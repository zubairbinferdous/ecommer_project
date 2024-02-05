<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{

    function addProduct()
    {
        return view('admin.Product.addProduct');
    }
    function allProduct()
    {
        return view('admin.Product.allProduct');
    }

    function adminIndex()
    {
        return view('admin.dashboard');
    }
}
