<?php

if (!defined('unlock_includes')) {
 include('404.php');
}

include 'ip_security_lockout.php';

foreach (get_included_files() as $item ) {        
    $string = 'functions.php';
    if (strpos($item, $string) == false) {
     include_once 'functions.php';
    }
    unset($string);
}

require_once('vendor/autoload.php');

//Reinsert keys, removed for security purposes

$stripe = [
  "secret_key"      => "",
  "publishable_key" => "",
];

/*
$stripe = [
  "secret_key"      => "",
  "publishable_key" => "",
];
*/
    

\Stripe\Stripe::setApiKey($stripe['secret_key']);


?>