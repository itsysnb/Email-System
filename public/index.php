<?php

require_once "../vendor/autoload.php";

// yahoo service

// $email = new \App\EmailClient(new \App\Email('ysnbgn@yahoo.com'));
// echo $email->connect();
// echo $email->get();
// $email->send(new \App\YahooService());

// gmail service
$email = new \App\EmailClient(new \App\Email('ysnbgn.bgn@gmail.com'));
$email->send(new \App\GmailAdapter());
