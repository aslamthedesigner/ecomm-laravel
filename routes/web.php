<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\usercontroller;
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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

 Route::view('/login', 'login');
 Route::post('/login',[usercontroller::class,'login']);
 Route::get('/',[productcontroller::class,'index']);
 Route::get('/details/{id}',[productcontroller::class,'details'])->name('view.details');
 Route::get('/search',[productcontroller::class,'search']);
 Route::post('/add_to_cart',[productcontroller::class,'addtocart']);
 Route::get('/cartlist',[productcontroller::class,'cartlist']);
 Route::get('/removeitem/{id}',[productcontroller::class,'removecartitem']);
 Route::get('/ordernow',[productcontroller::class,'ordernow']);
 Route::post('/orderplace',[productcontroller::class,'orderplace']);
