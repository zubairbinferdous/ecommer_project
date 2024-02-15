<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductItem;
use App\Models\ProductMultiImg;
use App\Models\description;

class shopController extends Controller
{
    function productShow()
    {
        $product = Product::orderBy('id', 'desc')->get();
        return view('frontend.shop', compact('product'));
    }

    function singleProduct()
    {
        return view('frontend.single');
    }
}
