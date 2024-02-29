<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductItem;
use App\Models\ProductMultiImg;
use App\Models\description;
use App\Models\variation;
use App\Models\attribute;
use App\Models\attributeValue;


class shopController extends Controller
{
    function productShow()
    {
        $product = Product::orderBy('id', 'desc')->get();
        return view('frontend.shop', compact('product'));
    }

    function singleProduct($Product_id)
    {
        $product = product::where('Product_id', $Product_id)->first();
        $images = ProductMultiImg::where('Product_id', $Product_id)->get();
        $ProductItem = ProductItem::where('Product_id', $Product_id)->get();
        $description = description::where('Product_id', $Product_id)->get();
        $variation = variation::where('product_code', $Product_id)->get();
        return view('frontend.single', compact('product', 'images', 'ProductItem', 'description', 'variation'));
    }
}
