<?php

require_once "vendor/autoload.php";

$email = new \App\EmailClient(new \App\Email('ysnbgn@yahoo.com'));
$email->connect();