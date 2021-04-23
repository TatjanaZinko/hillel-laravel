<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use App\Http\Requests\Test\TestRequest;
use App\Models\Myorder;
use App\Models\Product;
use App\Repositories\Test\TestRepo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TestController extends Controller
{
    public function index()
    {
        return TestRepo::getAllProduct();
    }

    public function product(TestRequest $request)
    {
        return TestRepo::getProductById($request->id);
    }

    public function client()
    {
        return TestRepo::getAllClient();
    }

    public function order()
    {
        return TestRepo::getAllOrder();
    }

    public function payment()
    {
        return TestRepo::getAllPayment();
    }

    public function updateOrderDetails()
    {
        Schema::table('order_details', function($table)
        {
            $table->string('order_number');
            $table->integer('product_id');
            $table->integer('product_price');
        });
    }

    public function createOrder()
    {
        //Schema::drop('orders');
        Schema::create('myorders', function($table)
        {
            $table->increments('id');
            $table->string('order_number');
            $table->integer('client_id');
            $table->integer('order_sum');
            $table->timestamps();
        });
    }

    public function addOrder()
    {
       $cart_data = array(2, 4);
       $order_number = 'AA55555';
//       foreach ($cart_data as $id) {
//           $product =  Product::find($id);
//           $price = $product -> product_price;
//           DB::table('order_details')->insert(array(
//               array('order_number' => $order_number, 'product_id' => $id, 'product_price' => $price)
//           ));
//       }

        $order_sum = DB::table('order_details')->where('order_number', '==',  $order_number)->sum('product_price');
        var_export($order_sum);

        $order = new Myorder;
        $order->order_number = $order_number;
        $order->client_id = 3;
        $order->order_sum = $order_sum;
        $order->save();
    }

}

