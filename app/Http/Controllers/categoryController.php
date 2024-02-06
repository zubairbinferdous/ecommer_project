<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;


class categoryController extends Controller
{
    // add category 
    function addCategory()
    {
        return view('admin.Category.addCategory');
    }
    // all category 
    function allCategory()
    {
        $categoryData = category::get();
        return view('admin.Category.allCategory', compact('categoryData'));
    }
    // store category 
    function storeCategory(Request $request)
    {

        if ($request->file('cate_img')) {

            $img = $request->file('cate_img');
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

            $save_url = 'upload/category/' . $name_gen;
            $img->move(public_path('upload/category/'), $name_gen);

            category::insert([
                'category_title' => $request->cat_title,
                'category_url' => strtolower(str_replace(' ', '-', $request->cat_title)),
                'category_image' => $save_url,
                'category_description' => $request->description,
                'position' => $request->position,
            ]);

            return redirect()->route('allCategory');
        } else {
            return  'error';
        }
    }
}
