<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QueryMail extends Mailable
{
    use Queueable, SerializesModels;
    public $cargo;
    public $tel;
    public $mail;
    public $from;
    public $to;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cargo, $tel, $mail, $from, $to)
    {
        $this->cargo = $cargo;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.query')->subject("Nová žiadosť o nacenenie (daltrans.sk)");
    }
}
