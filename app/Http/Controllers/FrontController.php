<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){

        $this->products = Product::all();

        return view('front.home.home', ['products' => $this->products]);

    }

    public function productDetails($id){

        $this->product = Product::find($id);

        $this->products = Product::where('status', 1)->get();

        return view('front.product.details', ['product' => $this->product, 'products' => $this->products]);

    }
}
