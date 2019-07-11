<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $login_email;
    public $login_password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($login_email,$login_password)
    {
        $this->login_email = $login_email;
        $this->login_password = $login_password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('account@khojbiz.com')->view('admin.welcome_mail');
    }
}
