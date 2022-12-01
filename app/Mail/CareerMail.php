<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $career_row;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($career_row)
    {
        $this->career_row = $career_row;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Join Our Team")->view('email.career')->attach('web/resume/' .$this->career_row['resume_file']->getClientOriginalName());
    }
}
