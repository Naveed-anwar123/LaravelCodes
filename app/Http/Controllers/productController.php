<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class productController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex(){
    	$products = Product::all();
    	return view('partial.index',compact('products'));
    }
}
