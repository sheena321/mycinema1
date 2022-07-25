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
// Route::post('logadmin', function () {
//     return view('logadmin');
// });

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
Route::view('th_addmovie','th_addmovie');
Route::view('admnprofile','admnprofile');
Route::view('thad_profile','thad_profile');
Route::view('th_updatemovie','th_updatemovie');
Route::view('thad_theaterdetails','thad_theaterdetails');
Route::view('editshow','editshow');
Route::view('th_addshow','th_addshow');
Route::view('th_updatescreen','th_updatescreen');
Route::view('th_booking','th_booking');
Route::view('th_chgpsw','th_chgpsw');
Route::view('userdash','userdash');
Route::view('comingsoon','comingsoon');
Route::view('mybooking','mybooking');
Route::view('usermovie','usermovie');
Route::view('ratemovie','ratemovie');
Route::view('ratemovie1','ratemovie1');
Route::view('ratetheater','ratetheater');
Route::view('userchgpsw','userchgpsw');
Route::view('useradvts','useradvts');
Route::view('contactus','contactus');

Route::view('userbooking','userbooking');
Route::view('selectseat','selectseat');
Route::view('userprofile','userprofile');
Route::view('s1','s1');












