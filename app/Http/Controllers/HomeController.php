<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        //condition to secure page Admin From user
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            return view('admin.home');

        } else {

            //got all data from Database
            $data = Product::paginate(3);

            return view('user.home', compact('data'));

        }
    }

    public function index()
    {
        if (Auth::id()) {

            return redirect('/redirect');

        } else {
            //got all data from Database
            $data = Product::paginate(3);

            return view('user.home', compact('data'));

            //or can use below
            // return view('user.home', ['stored' => $stored]);
        }

    }

    // search for product
    public function search(Request $request)
    {
        // dd(Product::where('title', $request->search)->get());
        $search = $request->search;

        if ($search == '') {
            $data = Product::paginate(3);

            return view('user.home', compact('data'));
        }
        $data = Product::where('title', 'Like', '%' . $search . '%')->get();

        return view('user.home', compact('data'));
    }

    // Add Cart to Product
    public function addcart(Request $request, $id)
    {
        // 1- check if the user login / register
        if (Auth::id()) {
            //get user data from
            $user = auth()->user();
            // $user = Auth::user();

            $cart = new Cart;

            $cart->name = $user->name;

            return redirect()->back();
        } else {

            return redirect('login');
        }

    }

}