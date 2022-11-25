<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetInTouch extends Mailable
{
    use Queueable, SerializesModels;

    var $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form_data)
    {
        $this->data = $form_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.getintouch');
    }
}
