<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product, $image;
    public static $uploadedImage, $imageName, $imageDirectory, $imageUrl;

    public static function uploadImage($request){

        self::$uploadedImage = $request->file('image');
        self::$imageName = time().self::$uploadedImage->getClientOriginalName();
        self::$imageDirectory = 'admin/assets/image/uploaded-files/';
        self::$uploadedImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        return self::$imageUrl;
    }

    public static function createProduct($request){

        self::$product              = new Product();
        self::$product->category_name = $request->category_name;
        self::$product->brand_name    = $request->brand_name;
        self::$product->name        = $request->name;
        self::$product->price       = $request->price;
        self::$product->image       = self::uploadImage($request);
        self::$product->description = $request->description;
        self::$product->status      = $request->status;
        self::$product->save();

    }

    public static function deleteProduct($id){

        self::$product = Product::find($id);

        if (file_exists(self::$product->image)){
            unlink(self::$product->image);
        }

        self::$product->delete();
    }


    public static function updateProduct($request,$id){


        self::$product = Product::find($id);

        self::$image = $request->image;

        if (self::$image) {

            if (file_exists(self::$product->image)) {
                unlink(self::$product->image);
            }
            self::$image = self::uploadImage($request);

        }
        else
        {
            self::$image = self::$product->image;
        }

        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->image = self::$image;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->save();


    }

}
