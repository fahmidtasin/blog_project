<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){

        return view('admin.product.add-product');

    }

    public function newProduct(Request $request){

        Product::createProduct($request);

        return redirect()->back()->with('message', 'Product created successfully!');

    }

    public function deleteProduct($id){

        Product::deleteProduct($id);

        return redirect()->back()->with('message', 'A product successfully deleted!');

    }

    public function manageProduct(){

        $this->products = Product::orderBy('id', 'DESC')->get();

        return view('admin.product.manage-product', ['products' => $this->products]);

    }

    public function editProduct($id){

        $this->product = Product::find($id);

        return view('admin.product.edit-product', ['product' => $this->product]);

    }

    public function updateProduct(Request $request,$id){

        Product::updateProduct($request,$id);

        return redirect()->back()->with('message', 'Product update successful!');

    }

}
