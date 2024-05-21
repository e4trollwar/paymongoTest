<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhooksController;



Route::get('/', function () {
    return view('welcome');
});


Route::webhooks('webhook-url-1', 'application-one','get');
Route::webhooks('webhook-url-2', 'application-two','get');
Route::get('webhook/endpoint', [WebhooksController::class, 'handle']);