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




Route::get('/admin',[adminController::class,'index']);
Route::get('/addrcbook',[adminController::class,'addrcbook']);
Route::post('/addrcbookaction',[adminController::class,'addrcbookaction']);
Route::get('/viewrcbook',[adminController::class,'viewrcbook']);
Route::get('/addlisence',[adminController::class,'addlisence']);
Route::post('/addlisenceaction',[adminController::class,'addlisenceaction']);
Route::get('/viewlisence',[adminController::class,'viewlisence']);
Route::get('/viewpublics',[adminController::class,'viewpublics']);
Route::get('/viewinssurance',[adminController::class,'viewinsurrance']);
Route::get('/viewprofile',[adminController::class,'viewprofile']);
Route::get('/logout',[adminController::class,'logout']);
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


Route::get('/police',[policeController::class,'index']);
Route::get('/addpunishment',[policeController::class,'addpunishment']);
Route::get('/ppunishment',[policeController::class,'ppunishment']);
Route::post('/punishmentaction/{id}',[policeController::class,'punishmentaction']);
Route::get('/viewpunishment',[policeController::class,'viewpunishment']);
Route::get('/viewrdetails',[policeController::class,'viewrdetails']);
Route::get('/viewldetails',[policeController::class,'viewldetails']);
Route::get('/ppunishment/{id}',[policeController::class,'ppunishment']);
Route::get('/logout',[policeController::class,'logout']);
Route::get('/searchRC',[policeController::class,'searchRc']);
Route::get('/searchlicence',[policeController::class,'searchlicence']);
Route::get('/login',[policeController::class,'login']);
Route::post('/ploginaction',[policeController::class,'ploginaction']);
Route::get('/policeprofile',[policeController::class,'policeprofile']);


Route::get('/public',[publicController::class,'user']);
Route::get('/rcbook',[publicController::class,'rcbook']);
Route::get('/lisence',[publicController::class,'lisence']);
Route::get('/usersearchlicence',[publicController::class,'usersearchlicence']);
Route::get('/punishment',[publicController::class,'punishment']);
Route::get('/myprofile',[publicController::class,'myprofile']);






















