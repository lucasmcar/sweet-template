<?php

require('vendor/autoload.php');

use Lib\MailTo;

$mail = new MailTo(array('address' => 'endereco', 'acc' => 'conta'));


print_r($mail->setupMailAdress());