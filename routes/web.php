<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    try {
        DB::connection()->getPDO();
        dump('Database is connected. Database Name is : ' . DB::connection()->getDatabaseName());
     } catch (Exception $e) {
        dump('Database connection failed');
     }
});
