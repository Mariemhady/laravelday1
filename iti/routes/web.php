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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/iti', function () {
    return view('iti');
});

Route::get('/name', function () {
    $name = "ahmed";
    return $name;
});

Route::get('/year', function () {
    $years = [2014, 2018, 2017];
    return $years;
});

Route::get('/info/{key}/{test}', function ($key, $test) {
    $info = ["name"=>"ali", "age"=>12];
    if(array_key_exists($key, $info)){
        return $info[$key].$test;
    }else{
        return "not found";
    }
});


Route::get('/req', function () {
    $req = request();
    return $req;
});

Route::get('/req1', function () {
    $req = request("name");
    if($req){
         return $req;
    }else{
        return "name not found";
    }
});


Route::get('/student', function(){
    return view('test.student');
});

Route::get('/home', function(){
    return view('iti.home');
});
Route::get('/contact', function(){
    return view('iti.contactus');
});
Route::get('/about', function(){
    return view('iti.aboutus');
});

