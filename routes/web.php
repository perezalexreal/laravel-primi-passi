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
    $titles =[
        'title' => 'Hello World', 
        'paragraph' => 'First Laravel Project'
    ];
    $links =[
        'Home'=>'/',
        'Chi siamo'=>'/chi-siamo',
        'Store'=>'/store'
    ];
    return view('home',$titles,['links'=>$links]);
});
