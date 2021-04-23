<?php


namespace App\Repositories\Product;
use App\Models\VirtualProduct;

class VirtualProductRepository
{
     public static function getDownloads($id)
     {
         return VirtualProduct::find($id)->downloads;;
     }

}
