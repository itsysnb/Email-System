<?php

require_once "../vendor/autoload.php";

$email = new \App\EmailClient(new \App\Email('ysnbgn@yahoo.com'));
echo $email->connect();
// echo $email->get();

