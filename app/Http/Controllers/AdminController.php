<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }
}