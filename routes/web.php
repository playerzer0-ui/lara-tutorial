<?php

use App\Http\Controllers\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
})->name("welcome");

Route::get('/hello', function (Request $request) {

    // $validated = $request->validate([
    //     'name' => 'string',
    //     'age' => 'integer'
    // ]);

    $name = $request->input("name");
    $age = $request->input("age");
    return view('hello', ['name' => $name, 'age' => $age]);
})->name("hello");

Route::view("/noaccess", "noaccess");

Route::group(["middleware" => ["groupPage"]], function(){
    Route::get('/users', [Users::class, "index"])->name("users");
    Route::post('/login', [Users::class, "loginData"])->name("logData");
});