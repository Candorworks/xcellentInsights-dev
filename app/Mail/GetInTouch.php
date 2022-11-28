<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetInTouch extends Mailable
{
    use Queueable, SerializesModels;

    public $form_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form_data)
    {
        $this->form_data = $form_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.getintouch')
            ->with([
                'Subject' => $this->form_data['Subject'],
                'Name' => $this->form_data['Name'],
                'Email' => $this->form_data['Email'],
                'Number' => $this->form_data['Number'],
                'Job_Title' => $this->form_data['Job_Title'],
                'Company' => $this->form_data['Company'],
                'Description' => $this->form_data['Description'],
            ]);
    }
}
