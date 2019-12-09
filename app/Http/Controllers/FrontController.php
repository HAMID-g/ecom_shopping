<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $shirts=Product::all();
        return view('frontend.home', compact('shirts'));
    }
    public function shirts()
    {
        $shirts=Product::all();
        return view('frontend.shirts',compact('shirts'));
    }
    public function shirt()
    {
        return view('frontend.shirt');
    }
}
