<?php


namespace App\Repositories\Product;
use App\Models\Product;

class ProductRepository
{
     public static function getAllProduct()
     {
         return Product::get();
     }
     public static function getProductById($id)
     {
         return Product::find($id);
     }   
}