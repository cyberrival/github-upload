<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $sender;
    public $message;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $sender, $message, $name)
    {
        $this->subject = $subject;
        $this->sender = $sender;
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->subject($this->subject)->replyTo($this->sender);
    }
}
