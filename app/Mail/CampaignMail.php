<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampaignMail extends Mailable
{
    use Queueable, SerializesModels;


    public $body;
    public $subscriber;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body, $subscriber)
    {
        $this->body = $body;
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('MyCookingLife bildiriş poçtu')->markdown('emails.campaign-mail');
    }
}
