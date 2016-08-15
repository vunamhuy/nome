<?php 
namespace App\Repositories\Mailers;

class UserMailer extends Mailer {

    public function passwordReset($email, $data)
    {

        $view       = 'emails.password-reset';
        $subject    = $data['subject'];
        $fromEmail  = env('MAIL_USERNAME');

        $this->sendTo($email, $subject, $fromEmail, $view, $data);

    }

}