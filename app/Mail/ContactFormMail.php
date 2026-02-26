<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    // Receive the form data
    public function __construct($data)
    {
        $this->data = $data;
    }

    // public function build()
    // {
    //     return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
    //         ->subject('New Contact Inquiry: ' . $this->data['subject'])
    //         ->view('emails.contact'); // We will create this view next
    // }

    public function build()
    {
        return $this->subject('New Contact Inquiry: ' . $this->data['subject'])
                    ->view('emails.contact');
    }
}
