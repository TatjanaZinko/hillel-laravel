<?php


namespace App\Repositories\Test;
use App\Models\Client;
use App\Models\Myorder;
use App\Models\Payment;
use App\Models\Product;

class TestRepo
{
     public static function getAllProduct()
     {
         return Product::get();
     }
     public static function getProductById($id)
     {
         return Product::find($id);
     }

    public static function getAllClient()
    {
        return Client::get();
    }

    public static function getAllOrder()
    {
        return Myorder::get();
    }

    public static function getAllPayment()
    {
        return Payment::get();
    }
}
