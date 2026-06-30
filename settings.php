<?php

if(!defined('unlock_includes')) {
 http_response_code(404);
 include('404.php'); // provide your own HTML for the error page
 die();
}

//Settings [session vars]

//PDO Login Settings

//If it's offline, do this


//! Needs to be copied manually for CRON Jobs {
////////////////////////////////////////
// MAMP Config only

if ($_SERVER['HTTP_HOST'] == 'localhost:8888') {
 $_SESSION['pdo_servername'] = 'localhost';
 $_SESSION['pdo_username'] = 'root';
 $_SESSION['pdo_password'] = 'root';
 $_SESSION['pdo_database'] = 'brighter_hires';
} else {
 //If it's online, connect to online database
 $_SESSION['pdo_servername'] = '';
 $_SESSION['pdo_username'] = '';
 $_SESSION['pdo_password'] = '';
 $_SESSION['pdo_database'] = '';
}
////////////////////////////////////////
//}

//Stripe Keys
// ! Refactor this so it is secure!

$_SESSION['stripe_public_key'] = '';
$_SESSION['stripe_private_key'] = '';

?>