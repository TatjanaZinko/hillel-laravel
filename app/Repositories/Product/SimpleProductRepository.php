<?php


namespace App\Repositories\Product;
use App\Models\SimpleProduct;

class SimpleProductRepository
{
     public static function getAttributes($id)
     {
         return SimpleProduct::find($id)->attributes;;
     }

}
