<?php

require "../vendor/autoload.php";
require '../src/Hello.php';

$sentence = new App\Hello();

echo $sentence->talk();