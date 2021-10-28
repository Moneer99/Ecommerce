<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
}