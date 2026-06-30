<?php

//////////////////////////////////////////////////////////////////////////////////////
//Contents
//////////////////////////////////////////////////////////////////////////////////////
/*

0. Initialise

1. Security
 1a. If link is invalid, push to 404 page

2. Logic

//Contains fuck knows what at this point
 



//////////////////////////////////////////////////////////////////////////////////////
//Initialise
//////////////////////////////////////////////////////////////////////////////////////

session_start();
define('unlock_includes', TRUE);
include 'functions.php';

//////////////////////////////////////////////////////////////////////////////////////
//Spinner Animation
//////////////////////////////////////////////////////////////////////////////////////

$_SESSION['show_loading'] = 1;
include 'loading.php';
unset($_SESSION['show_loading']);

//////////////////////////////////////////////////////////////////////////////////////
//1. Security // ! OFF
//////////////////////////////////////////////////////////////////////////////////////

//If link is invalid, push to 404 page

$page_link = pdo_return("SELECT `id` FROM `listed_jobs` WHERE `page_link` = '".$_GET['a']."'")[0];

if ($page_link == '') {
 $_SESSION['pushx2'] = 1;
 http_response_code(404);
 push_back_instant('/404.php'); // provide your own HTML for the error page
 die();
}

//////////////////////////////////////////////////////////////////////////////////////
//2. Logic
//////////////////////////////////////////////////////////////////////////////////////

/*

 //21a.
 
 //Checks if the user's ip has reported the listing before. If it has not, update the unique ip reports number in the table. This is an output to be plugged in to a cron job later.

 //Record the User's IP Address
 $user_ip = get_real_ip_return();
 //echo $user_ip;
 //Check if this IP has seen the page before
 $ip_array = pdo_return("SELECT `ips_reported` FROM `listed_jobs` WHERE `page_link` = '".$_GET['a']."'")[0];
 $ip_array = json_decode($ip_array, true);
 //pre( $ip_array );

 //Find out if it has seen this ip before
 
 for($i=0; $i<count($ip_array); $i++) {
    if ($ip_array[$i] == $user_ip) {
       $ignore_ip = 1;
    }
 }
 if (!isset($ignore_ip)) {
  $ignore_ip = 0;
 }

 //Only push the ip to the array and update the counter if it's not been counted already
  //If it has, do not update the counter
 if ($ignore_ip == 0) {
  //If it has not, update the counter, push the IP to an array
    
    function update_array() {
       
      //Redeclare user IP
      $user_ip = get_real_ip_return();
       
      $column = 'ips_reported';
      $table = 'listed_jobs';
      $unique_column = 'page_link';
    
      //Download Column
      $data = pdo_return("SELECT `".$column."` FROM `".$table."` WHERE `".$unique_column."` = '".$_GET['a']."' ")[0];

      //Process Column
      $data = json_decode($data, true);
      array_push($data,$user_ip);
      $data = json_encode($data);
      //Upload Column
      pdo_delete_or_update_v1("UPDATE `".$table."` SET `".$column."`='".$data."' WHERE `".$unique_column."` = '".$_GET['a']."' ");
    }
    update_array();
    sql_update_by_1('unique_ip_reports','listed_jobs','page_link');
 }

$_SESSION['ip_report_made'] = 1;
push_back_instant('/popup_page.php');

   */
?>


<!-- //New Reporting System -->

<?php 
session_start();
define('unlock_includes', TRUE);
include 'functions.php';
include 'ip_security_lockout.php';
if (isset($_SESSION['logged_in'])) {
    push_back_instant('/index.php');
}
?>

<!doctype html>
<html>
    <head>
        <?php require 'head_tag.php';?>   
    </head>
    <body>
        
        <?php include 'header.php';?>
        
        <div class="content" id="create_account">
            
            <?php include_error_reporting(); ?>
            
            <div class="form_container">
                <form id="create_account_form" action="submit/report_listing_submit.php" method="post">
                    <h1>Report Listing</h1>
                    <div class="report_warning_text">
                     If you feel the listing you have just seen should not be allowed
                     on this site, it can be removed from through the use of this form. 
                     This means the company or person who listed it will need to
                     change what they have written if they want to put it back. The person
                     who wrote it may also decide
                     they should not have made a listing at all and remove it instead.
                     <br><br>
                     Sometimes, people decide to report listings that they do not like, even when there is
                     nothing wrong with them. Please think carefully before reporting any listings on this site,
                     as by reporting this listing it will be taken off of the site while the issue is looked in to.
                     This will happen as quickly as possible.
                     <br><br>
                     Falsely reporting listings is unkind and makes everybody's lives harder. If you do this in real
                     life, people will start to ignore you when you try to warn them about things, whether they
                     are bad or not.
                     <br><br>
                     Your report is anonymous unless you choose to give your personal information in the box below. 
                     You are being trusted to be honest when you report a listing. Please note that our customers are
                     never charged any more money if their listing is reported and are fully refunded as quickly as possible
                     if they choose if they not to put the listing back online.
                     <br><br>
                     If you are still sure you would like to remove the listing from the site, please continue below.
                     If you have changed your mind, simply return to where you were on the site using the cancel button.
                     <br><br>
                     You can give your reasons for reporting the listing if you like. If you prefer not to say, please
                     leave the box blank. You won't be able to put more than about 500 words.

                    </div>
                    <div id="reason_for_reporting_label">Reasons for Reporting: (Optional)</div>
                    <textarea name="report_reason" maxlength="2500" class="report_text_input"></textarea>
                    <br>
                    <br><br>
                    <input class="button" type="submit" value="Report">
                </form>
            </div>
        </div>
        <?php include 'footer.php'?>
        <?php include 'functions_js.php'?>

        <?php
         //Get the a string, which is the unique id for the listing.
         // Initialize URL to the variable
         $url = get_full_url();

         echo $url;
            
         // Use parse_url() function to parse the URL
         // and return an associative array which
         // contains its various components
         $url_components = parse_url($url);

         pre($url_components);
         
         // Use parse_str() function to parse the
         // string passed via URL
         parse_str($url_components['query'], $params);
            
         // Display result
         echo ' Hi '.$params['a'];

        ?>
        
    </body>
</html>
