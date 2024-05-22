<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhooksController;
use Svix\Webhook;
use Svix\Exception\WebhookVerificationException;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::webhooks('webhook-receiving-url');
Route::stripeWebhooks('stripe-webhook');