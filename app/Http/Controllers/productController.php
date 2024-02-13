<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\ProductMultiImg;
use App\Models\description;

use Illuminate\Support\Facades\Redirect;

class productController extends Controller
{

    function addProduct()
    {
        $allCategory = category::get();
        return view('admin.Product.addProduct', compact('allCategory'));
    }
    function allProduct()
    {
        return view('admin.Product.allProduct');
    }

    function adminIndex()
    {
        return view('admin.dashboard');
    }

    function productStore(Request $request)
    {
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
                'product_id' => $request->ProductId,
                'ProductUrl' => strtolower(str_replace(' ', '-', $request->productName)),
                'ProductImages' => $saveImg,
                'ProductShortDescription' => $request->ShortDescription,
                'SeoTitle' => $request->seoTitle,
                'SeoImages' => $saveSeoImg,
                'SeoDescription' => $request->seoDescription,
                'Category_id' => $request->category,
                'PlacementInShop' => $request->position,
                'ProductStatus' => $request->status,
                'ProductSchedule' => $request->schedule,

            ]);
        }
        if ($request->file('fileMulti')) {
            $itemId = $request->input('ProductId');
            foreach ((array)$request->fileDescription as $image) {

                $image = $request->file('fileMulti');
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
        }
        if ($request->description) {
            $DescriptionId = $request->input('ProductId');
            $Descriptions = (array)$request->input('description');
            $count = count($Descriptions);

            for ($i = 0; $i < $count; $i++) {
                $description = $Descriptions[$i];
                description::create([
                    'product_id' => $DescriptionId,
                    'descriptions' => $description,

                ]);
            }
        } else {
            'error';
        }


        return redirect()->route('allProduct');
    }
}
