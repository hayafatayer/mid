<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Html\HtmlServiceProvider;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('products', function () {
    $task = DB::table('products')->get();
    return view('products', compact('products'));
});
Route::get('products/show/{id}', function ($id) {
    $task = DB::table('products')->find($id);
    return view('show', compact('task'));
});


Route::get('app', function () {
    return view('layouts.app');
});

Route::get('products/show/{id}', function ($id) {
    $task = DB::table('products')->find($id);
    return view('show', compact('task'));
});
Route::get('app', function () {
    $tasks = DB::table('products')->get();
    return view('todo', compact('task'));
});
Route::post('store', function (Request $Request) {
    DB::table('products')->insert([
        'title' => $Request->title->title
    ]);

});
Route::get('get', function () {
    DB::table('products')->delete();
    DB::table('products')->where('votes', '>', 100)->delete();
});

Route::get('get', function () {
    DB::table('products')->create();
return view('products.create');
});
Route::post('store', function (Request $Request)
{
    //

});
Route::get('get', function () {
    DB::table('products')->edit();
return view('products.edit');
});
