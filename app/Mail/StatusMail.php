<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public function build()
    {
        return $this->view('emails.status')
                    ->with([
                        'status' => $this->status,
                    ])
                    ->onQueue('emails');
    }
}

