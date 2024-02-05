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
        return view('admin.Category.allCategory');
    }
    // store category 
    function storeCategory(Request $request)
    {

        $img = $request->file('fileInput');
        $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        $save_url = 'upload/category/' . $name_gen;

        category::insert([
            'category_title' => $request->cat_title,
            'category_url' => strtolower(str_replace(' ', '_', $request->cat_title)),
            'category_image' => $save_url,
            'category_description' => $request->description,
            'position' => $request->position,
        ]);
    }
}
