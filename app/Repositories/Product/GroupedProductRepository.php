<?php


namespace App\Repositories\Product;
use App\Models\SimpleProduct;

class GroupedProductRepository
{
     public static function getGroup($id)
     {
         return SimpleProduct::find($id)->groups;;
     }

}
