<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $e_sub="Verify your email address";
    public $e_body="Please click on the link below to verify your email address.";
    public $e_otp="1234";
    public function __construct($e_sub, $e_body)
    {
        $this->e_sub = $e_sub;
        $this->e_body = $e_body;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('students.otp.verify')
                            ->with('body', $this->e_body)
                            ->subject( $this->e_sub);
                            
    }
}
