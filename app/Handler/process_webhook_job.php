<?php
namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class WebhookJobHandlerForAppTwo extends ProcessWebhookJob
{
    public function handle()
    {
        //I have access to $this->webhookCall provided in ProcessWebhookJob class
        logger($this->webhookCall);
        sleep(50);
        logger("I am done");
    }
}