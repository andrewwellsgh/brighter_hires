<?php

//Original from submit/create_account_submit.php
print_r($_POST);

//Can prove the string counter is accurate by feeding it 
//a random string on the input page

//echo gettype($_POST['report_reason']);

//This page needs to know:

//The report_reason string is secure to store in sql

//That the string is secure to be stored in the database and won't crash it 

//Check the string is not too long (less than 500 words)


echo $length;
$length = strlen($_POST['report_reason']);
$limit = 2500; //500 Words = 2500 Letters
if ($length <= $limit) {
   echo 'limit check pass';
} else {
    echo 'limit check fail';
    $error = 1;
    $_SESSION['error_type'] = 'length_check';
}


//Which listing has been reported



//The time the listing was frozen (to write to the database later)

//The listing customer's email address


//If there's been an error, make the loop to the popup page then back to where the user was

?>