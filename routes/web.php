<?php

// ملف routes/web.php

use Illuminate\Support\Facades\Route;

// رابط بسيط
Route::get('/', function () {
    return view('form');
});


// رابط مع دالة في Controller
Route::get('/hello/{name}', function ($name) {
    return view('hello', ['name' => $name]);
});


Route::post('/submit', 'App\Http\Controllers\FormController@submit');


// رابط مع اسم
Route::get('/greet', 'App\Http\Controllers\GreetingController@greet')->name('greet');
