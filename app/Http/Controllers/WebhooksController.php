<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class WebhooksController extends Controller
{
    //
    public function handle(Request $request)
    {
        // Process webhook payload
        // Perform actions based on the webhook data

         return $request;
        Test::insert([
            'test' => 'I am done',
        ]);
        return response()->json(['success' => true]);
       
       
    }
}
