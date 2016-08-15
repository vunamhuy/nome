<?php 
namespace App\Repositories\Mailers;

abstract class Mailer {

    public function sendTo($email, $subject, $fromEmail, $view, $data = [])
    {
        // \Mail::queue($view, $data, function($message) use($email, $subject, $fromEmail)
        // {

        //     $message->from($fromEmail, 'tuts@codingo.me');

        //     $message->to($email)
        //         ->subject($subject);
        // });
        \Mail::send($view, $data, function ($message) use($email, $subject, $fromEmail) {

	        $message->from($fromEmail, 'Learning Laravel');

	        $message->to($email)->subject($subject);

	    });

	    return "Your email has been sent successfully";
    }
}
