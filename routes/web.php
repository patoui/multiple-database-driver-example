<?php

use App\User;
use Illuminate\Support\Facades\DB;

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

Route::get('/sqlite', function () {
    // uncomment to see database driver and config values
    // dd($name = DB::connection()->getName(), config("database.connections.$name"));
    return User::first();
});

Route::get('/mysql', function () {
    // uncomment to see database driver and config values
    // dd($name = DB::connection()->getName(), config("database.connections.$name"));
    return User::first([DB::raw("(SELECT CONVERT_TZ(created_at,'UTC','America/Toronto')) as created_at_local")]);
});
