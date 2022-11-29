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
    public $lead_name;
    public $report_title;
    public $report_slug;
    public $report_unique_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form_data , $lead_name ,$report_title , $report_slug , $report_unique_id)
    {
        $this->form_data = $form_data;
        $this->lead_name = $lead_name;
        $this->report_title = $report_title;
        $this->report_slug = $report_slug;
        $this->report_unique_id = $report_unique_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->lead_name)->view('email.getintouch');
    }
}
