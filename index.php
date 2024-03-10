<?php
require 'vendor/autoload.php'; //run autoload

Flight::route('/', function(){  //define route function to handle request
    echo 'Hello world!';
});

Flight::start(); //start FlightPHP

?>