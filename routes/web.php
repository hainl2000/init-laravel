<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/test-api', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Log::info('header: ', $request->header());
    \Illuminate\Support\Facades\Log::info('ips: ', $request->ips());
    return true;
});
