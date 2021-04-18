<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriberData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscriberData)
    {
        $this->subscriberData =  $subscriberData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('MyCookingLife bildiriş siyahısı abunəliyi')->markdown('emails.subscribe-notification');
    }
}
