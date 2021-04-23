<?php
namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Test\TestRequest;
use App\Models\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{
    public function index()
    {
        return ProductRepository::getAllProduct();
    }

    public function product(TestRequest $request)
    {
        return ProductRepository::getProductById($request->id);
    }  

}

