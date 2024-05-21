<?php
namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob;


class process_webhook_job extends ProcessWebhookJob
{
    public function handle()
    {
        //I have access to $this->webhookCall provided in ProcessWebhookJob class
        logger($this->webhookCall);
        
        logger("I am done");
    }
}