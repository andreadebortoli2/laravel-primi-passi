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
    $message = 'dynamic message from route';
    return view('home', compact('message'));
})->name('home');

Route::get('/bonus-page{id}', function ($id) {
    $data = [
        'title' => 'bonus page ' . $id,
        'homeUrl' => route('home'),
        'id' => $id,
    ];
    return view('bonus-page-' . $id, $data);
})->name('bonus-page');
