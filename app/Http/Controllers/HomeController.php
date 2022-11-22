<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect()
    {
        //condition to secure page Admin From user
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            $data = Product::paginate(4);

            return view('admin.showProduct', compact('data'));

        } else {

            //got all data from Database
            $data = Product::paginate(3);

            //==== for Cart conut products  =====

            //1- Get Data user
            $user = auth()->user();

            //2-Count Products in Cart for that user
            $count = Cart::where('phone', $user->phone)->count();

            //3- return view with all data for show it
            return view('user.home', compact('data', 'count'));

        }
    }

    public function index()
    {
        if (Auth::id()) {

            return redirect('/redirect');

        } else {
            //got all data from Database
            $data = Product::paginate(3);

            return view('home', compact('data'));

            //or can use below
            // return view('user.home', ['stored' => $stored]);
        }

    }

    // search for product
    public function search(Request $request)
    {
        // dd(Product::where('title', $request->search)->get());
        $search = $request->search;
        dump($search);

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
        // dd(new Cart);

        // 1- check if the user login / register
        if (Auth::id()) {

            //1.1 -Get All user data from Database
            $user = auth()->user();
            $product = Product::find($id);
            //1.2-Create Model Cart to Push value to Table Database Cart
            $cart = new Cart;

            //1.3-Push Data to Cart Table
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->quantity = $request->quantity;
            $cart->price = $product->price;

            $cart->save();

            return redirect()->back()->with('message', 'Added Product To Cart Successfully');
        } else {

            return redirect('login');
        }

    }

    //show Number of products in Cart
    public function showcart()
    {
        //1- Get Data user
        $user = auth()->user();

        //2-Get Data Cart for that user
        $cart = Cart::where('phone', $user->phone)->get();

        //3-Count products in Cart for that user
        $count = Cart::where('phone', $user->phone)->count();

        // 4- redirect view to show result page
        return view('user.showcart', compact('cart', 'count'));
    }

    // delete the choosen cart in home page
    public function deletecart($id)
    {
        // dd(Cart::find($id));
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Deleted Product From Cart Successfully');
    }

    public function order(Request $request)
    {
        // dd((Cart::where('phone', auth()->user()->phone)->get()));
        //         ->where('phone', Auth::user()->phone)
        //         ->get());
        //Get Customer data name phone ...etc
        $user = auth()->user();

        foreach ($request->productname as $key => $productname) {
            //Get order Model
            $order = new Order;

            // Copy user data to Order table

            $order->product_title = $request->productname[$key];
            $order->quantity = $request->quantity[$key];
            $order->price = $request->price[$key];

            $order->name = $user->name;
            $order->phone = $user->phone;
            $order->address = $user->address;

            $order->status = 'Not delivered';
            $order->save();
        }
        //Delete Cart data
        DB::table('carts')->where('phone', $user->phone)->delete();

        // redirect
        return redirect()->back();
    }

    public function allproducts()
    {
                    //got all data from Database
                    $data = Product::all();

                    //==== for Cart conut products  =====

                    //1- Get Data user
                    $user = auth()->user();

                    if($user){

                    //2-Count Products in Cart for that user
                    $count = Cart::where('phone', $user->phone)->count();

                    //3- return view with all data for show it
                    return view('user.allproducts', compact('data', 'count'));

                    }else{

                        return view('products', compact('data'));
                    }



    }

}