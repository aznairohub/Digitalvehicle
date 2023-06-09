<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\policeController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\insuranceController;


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



Route::get('/',[indexcontroller::class,'index']);
Route::get('/contact',[indexController::class,'contact']);
Route::post('/contactaction',[indexController::class,'contactaction']);
Route::get('/complaint',[indexController::class,'complaint']);
Route::get('/registration',[indexController::class,'registration']);
Route::post('/registrationaction',[indexController::class,'registrationaction']);
Route::get('/about',[indexController::class,'about']);
Route::get('/userlogin',[indexcontroller::class,'userlogin']);
Route::post('/userloginaction',[indexcontroller::class,'userloginaction']);
Route::get('/logout',[indexController::class,'logout']);



Route::get('/admin',[adminController::class,'login']);
Route::get('/adminindex',[adminController::class,'index']);
Route::get('/addrcbook',[adminController::class,'addrcbook']);
Route::post('/addrcbookaction',[adminController::class,'addrcbookaction']);
Route::get('/viewrcbook',[adminController::class,'viewrcbook']);
Route::get('/addlisence',[adminController::class,'addlisence']);
Route::post('/addlisenceaction',[adminController::class,'addlisenceaction']);
Route::get('/viewlisence',[adminController::class,'viewlisence']);
Route::get('/viewpublics',[adminController::class,'viewpublics']);
Route::get('/viewinssurance',[adminController::class,'viewinsurrance']);
Route::get('/viewprofile',[adminController::class,'viewprofile']);

Route::get('/edit/{id}',[adminController::class,'edit']);
Route::post('/editaction/{id}',[adminController::class,'editaction']);
Route::get('/editlisence/{id}',[adminController::class,'editlisence']);
Route::post('/editliaction/{id}',[adminController::class,'editliaction']);
Route::get('/delete1/{id}',[adminController::class,'delete1']);   
Route::get('/viewreg',[adminController::class,'viewreg']);
Route::get('/viewcontact',[adminController::class,'viewcontact']);
Route::get('/punishmentview',[adminController::class,'punishmentview']);
Route::get('/addpolice',[adminController::class,'addpolice']);
Route::post('/addpoliceaction',[adminController::class,'addpoliceaction']);
Route::get('/viewpolice',[adminController::class,'viewpolice']);
Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/adminloginaction',[adminController::class,'adminloginaction']);
Route::get('/verifylicenece',[adminController::class,'verifylicenece']);
Route::get('/verifyrcbook',[adminController::class,'verifyrcbook']);
Route::get('/verifiedrcbook/{id}',[adminController::class,'verifiedrcbook']);
Route::get('/verifiedlicenece/{id}',[adminController::class,'verifiedlicenece']);
Route::get('/view/{id}',[adminController::class,'view']);
Route::post('/adminloginaction',[adminController::class,'adminloginaction']);


Route::get('/policeindex',[policeController::class,'index']);
Route::get('/addpunishment',[policeController::class,'addpunishment']);
Route::get('/ppunishment',[policeController::class,'ppunishment']);
Route::post('/punishmentaction/{id}',[policeController::class,'punishmentaction']);
Route::get('/viewpunishment',[policeController::class,'viewpunishment']);
Route::get('/viewrdetails',[policeController::class,'viewrdetails']);
Route::get('/viewldetails',[policeController::class,'viewldetails']);
Route::get('/ppunishment/{id}',[policeController::class,'ppunishment']);
Route::get('/searchRC',[policeController::class,'searchRc']);
Route::get('/searchlicence',[policeController::class,'searchlicence']);
Route::get('/police',[policeController::class,'login']);
Route::post('/policeloginaction',[policeController::class,'policeloginaction']);
Route::get('/policeprofile',[policeController::class,'policeprofile']);
Route::post('/policeprofileaction/{id}',[policeController::class,'policeprofileaction']);
Route::get('/changestatus/{id}',[policeController::class,'changestatus']);
Route::post('/changestatusaction/{id}',[policeController::class,'changestatusaction']);

Route::get('/public',[publicController::class,'user']);

Route::get('/userrcbook',[publicController::class,'rcbook']);
Route::get('/lisence',[publicController::class,'lisence']);
Route::get('/usersearchlicence',[publicController::class,'usersearchlicence']);
Route::get('/usersearchrcbook',[publicController::class,'usersearchrcbook']);
Route::get('/myprofile',[publicController::class,'myprofile']);
Route::get('/savelicenece/{id}',[publicController::class,'savelicenece']);
Route::get('/viewdetails',[publicController::class,'viewdetails']);
Route::post('/saveliceneceaction/{id}',[publicController::class,'saveliceneceaction']);
Route::get('/savercbook/{id}',[publicController::class,'savercbook']);
Route::post('/savercbookaction/{id}',[publicController::class,'savercbookaction']);
Route::post('/updateprofileaction/{id}',[publicController::class,'updateprofileaction']);





















