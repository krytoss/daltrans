<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $tel;
    public $mail;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $mail, $msg)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')->from($this->mail, $this->name)->replyTo($this->mail, $this->name)->subject("Nová správa od " . $this->name . " (daltrans.sk)");
    }
}
