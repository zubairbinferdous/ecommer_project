<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\ProductMultiImg;
use App\Models\description;
use App\Models\attribute;
use App\Models\attributeValue;
use App\Models\variation;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Redirect;

class productController extends Controller
{

    //add product
    function addProduct()
    {
        $allCategory = category::get();
        return view('admin.Product.addProduct', compact('allCategory'));
    }

    // all product
    function allProduct()
    {
        $product = Product::orderBy('id', 'desc')->get();
        return view('admin.Product.allProduct', compact('product'));
    }

    function adminIndex()
    {
        return view('admin.dashboard');
    }

    // product store 
    function productStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ShortDescription' => 'required|string|',
            'description' => 'required|string|',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->file('fileImg')) {

            $img = $request->file('fileImg');
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

            $saveImg = 'upload/product/' . $name_gen;
            $img->move(public_path('upload/product/'), $name_gen);

            $simg = $request->file('fileSeo');
            $sEOname_gen = hexdec(uniqid()) . '.' . $simg->getClientOriginalExtension();

            $saveSeoImg = 'upload/seo/' . $sEOname_gen;
            $simg->move(public_path('upload/seo/'), $sEOname_gen);

            Product::insert([
                'ProductName' => $request->productName,
                'Regular_price' => $request->RegularPrice,
                'product_id' => $request->ProductId,
                'ProductUrl' => strtolower(str_replace(' ', '-', $request->productName)),
                'ProductImages' => $saveImg,
                'ProductShortDescription' => $request->ShortDescription,
                'SeoTitle' => $request->seoTitle,
                'SeoImages' => $saveSeoImg,
                'SeoDescription' => $request->seoDescription,
                'description' => $request->description,
                'Category_id' => $request->category,
                'PlacementInShop' => $request->position,
                'ProductStatus' => $request->status,
                'ProductSchedule' => $request->schedule,

            ]);
        }

        $extraFileDescriptions = $request->file('ExtraFileDescription');
        $extraDescriptions = $request->input('ExtraDescription');
        $productId = $request->input('ProductId');
        foreach ($extraFileDescriptions as $key => $extraFileDescription) {

            $name_gen = hexdec(uniqid()) . '.' . $extraFileDescription->getClientOriginalExtension();
            $saveImg = 'upload/product/' . $name_gen;
            $extraFileDescription->move(public_path('upload/product/'), $name_gen);
            description::create([
                'product_id' => $productId,
                'product_images' => $saveImg,
                'descriptions' => $extraDescriptions[$key],
            ]);
        }

        if ($request->hasFile('fileMulti')) {
            $itemId = $request->input('ProductId');
            foreach ($request->file('fileMulti') as $image) {
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $saveImg = 'upload/product/' . $name_gen;
                $image->move(public_path('upload/product/'), $name_gen);

                ProductMultiImg::create([
                    'product_id' => $itemId,
                    'product_multi_img' => $saveImg,
                ]);
            }
        }

        if ($request->input('itemTitle')) {
            // user item  added 
            $itemId = $request->input('ProductId');
            $titles = (array)$request->input('itemTitle');
            $prices = (array)$request->input('itemPrice');

            $count = count($titles);

            for ($i = 0; $i < $count; $i++) {
                $title = $titles[$i];
                $price = $prices[$i];

                ProductItem::create([
                    'product_id' => $itemId,
                    'Product_title' => $title,
                    'price' => $price,
                ]);
            }
        } else {
            'error';
        }




        return redirect()->route('allProduct');
    }

    // variation product 

    function ProductVariation($product_id)
    {

        $product = product::where('Product_id', $product_id)->first();
        $attribute = attribute::get();
        $attributeValue = attributeValue::get();
        return view('admin.attribute.variation', compact('product', 'attribute', 'attributeValue'));
    }


    //add variation

    function storeVariation(Request $request)
    {

        $data = variation::create([
            'product_id' => $request->product_id,
            'product_code' => $request->product_code,
            'attribute_id' => $request->attribute,
            'attribute_values_id' => $request->attribute_value,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        $data->save();
    }
}
