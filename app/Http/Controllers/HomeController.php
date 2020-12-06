<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //
        return view('product');
    }

    public function indexorder()
    {
        //
        return view('order');
    }
    public function indexhistory()
    {
        //
        return view('history');
    }
}
