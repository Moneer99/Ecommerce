<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }
    public function uploadProduct(Request $request)
    {
        $data = new product;
        // get choose file img
        $image = $request->file;
        // get Extension of file and add to name
        $imgName = time() . '.' . $image->getClientOriginalExtension();
        // create folder and store the file
        $request->file->move('productImage', $imgName);

        $data->image = $imgName;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        // store in DB
        $data->save();

        // redirect back
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

}