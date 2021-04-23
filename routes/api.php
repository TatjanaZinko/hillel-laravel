<?php


use App\Http\Resources\Client;
use App\Models\Client as ClientModel;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('test')->group( function () {
   // Route::get('/test', 'Test\TestController@index');
    Route::get('/test', function () {
        return ClientModel::first();
    });

    Route::get('/product', 'Test\TestController@product');
    Route::get('/client', 'Test\TestController@client');
    Route::get('/order', 'Test\TestController@order');
    Route::get('/payment', 'Test\TestController@payment');
    Route::get('/submit', 'Test\TestController@addOrder');
});
