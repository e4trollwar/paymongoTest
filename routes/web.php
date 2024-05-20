<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::webhooks('webhook-url-1', 'application-one','get');
Route::webhooks('webhook-url-2', 'application-two','get');