<?php

use App\Test;
use App\Container;
use App\TestFacade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::get('/',function(){
      //dd(TestFacade::execute());
      //dd(app('test')->execute());
      //dd(resolve('test')->execute());
      return view('welcome');
});

Route::resource('post', HomeController::class)->middleware('auth');

Route::get('logout',[AuthController::class,'logout']);




