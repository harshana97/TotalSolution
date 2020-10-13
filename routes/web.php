<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;



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

// Route::get('/pdf', 'App\Http\Controllers\testController@get');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inquList', function () {
    $data=App\Models\Inquiry::all();
    return view('inquiryView')->with('inqu',$data);
});

Route::get('/viewCus','App\Http\Controllers\InquiryController@getCustomerForInquiry');

Route::post('/saveInq','App\Http\Controllers\InquiryController@addInquiry');
Route::post('/updateInq','App\Http\Controllers\InquiryController@getUpdateInquiry');

Route::get('/addInqu', function () {

    $data=App\Models\Customer::all();
    return view('addInquiry')->with('custo',$data);
});

Route::get('/activeMarkActive/{inquiryid}','App\Http\Controllers\InquiryController@getactiveActive');
Route::get('/activeMarkExpired/{inquiryid}','App\Http\Controllers\InquiryController@getactiveExpired');

Route::get('/newMarkNew/{inquiryid}','App\Http\Controllers\InquiryController@getnewNew');
Route::get('/newMarkActive/{inquiryid}','App\Http\Controllers\InquiryController@getnewActive');

Route::get('/exprieMarkExpired/{inquiryid}','App\Http\Controllers\InquiryController@getexprieExpired');
Route::get('/expireMarkActive/{inquiryid}','App\Http\Controllers\InquiryController@getexpireActive');

Route::get('/deleteInquiry/{inquiryid}','App\Http\Controllers\InquiryController@setDeleteInquiry');
Route::get('/viewInquiry/{inquiryid}','App\Http\Controllers\InquiryController@setViewInquiryPdf');
Route::get('/updateInquiry/{inquiryid}','App\Http\Controllers\InquiryController@setUpdateInquiry');

Route::get('preview', 'App\Http\Controllers\inquiryChartController@preview');
Route::get('download', 'App\Http\Controllers\inquiryChartController@download')->name('download');


Route::get('/reports', function () {


    return view('reports');
});


Route::get('/emails', function () {

    Mail::to('email@email.com')->send(new WelcomeMail());

    return new WelcomeMail();
});