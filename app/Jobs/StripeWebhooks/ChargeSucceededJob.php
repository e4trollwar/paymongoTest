<?php
 
namespace App\Jobs\StripeWebhooks;
use App\Models\Payments;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\Models\WebhookCall;

class ChargeSucceededJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $webhookCall;

    /**
     * Create a new job instance.

     */
   public function __construct(WebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
       
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $charge = $this->webhookCall->payload['data']['object'];
        logger($charge);
        Payments::create([
            // 'user_id'=> '1',
            // 'user_id'=> '13123',
            // 'subtotal'=> '13123',
            // 'tax'=> '13123',
            // 'total'=> '13123',



            'user_id'=> $charge['id'],
            'subtotal'=> $charge['amount'],
            'tax'=> $charge['amount'],
            'total'=> $charge['amount'],
            
        ]);
        //
    }
}
