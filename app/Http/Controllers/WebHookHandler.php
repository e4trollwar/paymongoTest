<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Test;
class WebHookController extends Controller
{
    /**
    * @param Request $request
    * @return json
    */

    public function __construct(){
      
        $this->test = new Test();
       
    }
   public function webhookHandler(Request $request){
    // We have access to the request body here
    // So, you can perform any logic with the data
    // In my own case, I will add the delay function 
    sleep(50); //this will delay the script for 50 seconds


    $this->test::insert([
            'test' => 'I am done',
            

        ]);
    return response()->json('ok'); 

   }
}