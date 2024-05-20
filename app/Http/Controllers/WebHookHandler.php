<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WebHookController extends Controller
{
    /**
    * @param Request $request
    * @return json
    */
   public function webhookHandler(Request $request){
    // We have access to the request body here
    // So, you can perform any logic with the data
    // In my own case, I will add the delay function 
    sleep(50); //this will delay the script for 50 seconds
    return response()->json('ok'); 
   }
}