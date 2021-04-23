<?php


namespace App\Repositories\Product;
use App\Models\VariableProduct;

class VariableProductRepository
{
     public static function getVariations($id)
     {
         return VariableProduct::find($id)->variations;;
     }
}
