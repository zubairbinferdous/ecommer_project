<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $attribute = attribute::orderBy('id', 'ASC')->get();
        return view('frontend.single', compact('product', 'images', 'ProductItem', 'description', 'variation', 'attribute'));
    }


    function getPriceWithAjax(Request $request)
    {

        $prices = '';
        $product_code_get_by_ajax = $request->input('product_id');
        $attribute_value_get_by_ajax = $request->input('attribute_value');
        $variations = Variation::where('product_code', $product_code_get_by_ajax)->get();

        foreach ($variations as $variation) {
            $attribute_values = json_decode($variation->attribute_values_id);
            if (is_array($attribute_values) && in_array($attribute_value_get_by_ajax, $attribute_values)) {
                $prices = $variation->price;
            }
        }

        if (empty($prices)) {
            return response()->json(['message' => 'No matching variations found']);
        }

        // Return the array of prices as JSON response
        return response()->json(['prices' => $prices,]);
    }
}
