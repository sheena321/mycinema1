<?php

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
});
Route::view('homepage','homepage');
Route::view('logadmin','logadmin');
Route::view('logtheateradmin','logtheateradmin');
Route::view('loguser','loguser');
Route::view('master','master');
Route::view('admindash','admindash');
Route::view('theaterdetails','theaterdetails');
Route::view('moviedetails','moviedetails');
Route::view('bookingdetails','bookingdetails');
Route::view('theateradminlist','theateradminlist');
Route::view('adminchgpsw','adminchgpsw');
Route::view('ad_moviediscription','ad_moviediscription');
Route::view('theaterdash','theaterdash');
