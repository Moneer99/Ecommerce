<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product()
    {
        //condition user can not go to page Admin
        $usertype = Auth::user()->usertype;
        if ($usertype == 1) {
            return view('admin.product');
        } else {
            return redirect()->back();
        }

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

    //show All product in Admin Page
    public function showproduct()
    {
        $data = Product::paginate(4);

        return view('admin.showProduct', compact('data'));
    }

    //Delete product
    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted');

    }

    public function updateview($id)
    {
        $data = Product::find($id);
        return view('admin.updateproduct', compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data = Product::find($id);
        // get choose file img
        $image = $request->file;

        if ($image) {
            // get Extension of file and add to name
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            // create folder and store the file
            $request->file->move('productImage', $imgName);

            $data->image = $imgName;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        // store in DB
        $data->save();

        // redirect back
        return redirect()->back()->with('message', 'Update Product Added Successfully');
    }

    //show All orders
    public function showorder()
    {
        $order = Order::paginate(5);
        if(!$order){
            // return view('admin.showorder')->with('order','NO order to Now !');
            return view('admin.showorder', compact('order'));
        }
        return view('admin.showorder', compact('order'));
    }

    //status orders
    public function status($id)
    {
        $order = Order::find($id);
        $order->status = 'Delivered';
        $order->save();
        return redirect()->back();
    }

}