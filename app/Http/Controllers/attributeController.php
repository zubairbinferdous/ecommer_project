<?php

namespace App\Http\Controllers;

use App\Models\attribute;
use App\Models\attributeValue;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class attributeController extends Controller
{
    function addAttribute()
    {
        return view('admin.attribute.addAttribute');
    }
    function storeAttribute(Request $request)
    {

        $value = Str::upper($request->attribute_name);

        $attribute = attribute::create([
            'attribute_name' => $value
        ]);
        $attribute->save();
        return redirect()->route('allAttribute');
    }

    function allAttribute()
    {
        $data = attribute::get();
        return view('admin.attribute.allAttribute', compact('data'));
    }


    // attribute value 

    function addAttributeValue()
    {
        $data = attribute::get();
        return view('admin.attribute.addAttributeValue', compact('data'));
    }


    function  storeAttributeValue(Request $request)
    {

        $value = Str::upper($request->attribute_value);

        $attribute = attributeValue::create([
            'attribute_id' => $request->attribute,
            'attribute_values_name' => $value
        ]);
        $attribute->save();
        return redirect()->route('allAttributeValue');
    }

    function allAttributeValue()
    {
        $data = attributeValue::get();
        return view('admin.attribute.allAttributeValue', compact('data'));
    }
}
