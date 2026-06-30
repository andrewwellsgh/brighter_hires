<?php
if(!defined('unlock_includes')) {
 http_response_code(404);
 include('404.php'); // provide your own HTML for the error page
 die();
}
?>

<head>
    
    <title>Brighter Hires.com</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/tablet.css">
    <link rel="stylesheet" type="text/css" href="/css/mobile.css">
    
    <link rel="stylesheet" type="text/css" href="/css/mobile_lock.css">
 
    <link rel="stylesheet" href="croppie/croppie.css" />
     
        <meta name="description" content="Brighter Hires - Need a job? Ask the whale!" />
        <meta name="keywords" content="Jobs Site UK, Jobs, jobssite, jobs, employment, employer, employee"/>
        <meta name="author" content="AWK Web Design"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="We offer a professional and friendly job search service to employees and employers. With a safe and secure database of jobs to search through, and a simple user interface, you are sure to find the connection you are looking for, whether you are looking to employ others or find employment yourself." />
        
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="AWK Web Design">
   
        <meta charset="utf-8">

      	<!-- ****** faviconit.com favicons ****** -->
       <link rel="shortcut icon" href="/favicon.ico">
       <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
       <link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
       <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
       <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
       <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
       <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
       <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
       <link rel="apple-touch-icon" href="/favicon-57.png">
       <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
       <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
       <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
       <link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
       <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
       <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
       <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
       <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
       <meta name="msapplication-TileColor" content="#FFFFFF">
       <meta name="msapplication-TileImage" content="/favicon-144.png">
       <meta name="msapplication-config" content="/browserconfig.xml">
       <!-- ****** faviconit.com favicons ****** -->
 
     <?php
 
   //Add custom javascript libraries based on page url
    
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
 
    if (preg_match('/\bimage_processing.php\b/', $url) !== 0) {
     
     echo '<script src="/croppie/jquery3-3-1.js"></script>';
     
     echo '<script src="/croppie/croppie.min.js"></script>'; //the custom header additions
    }
    
 
 

 
    ?>
   
   <script src="locate.js"></script>
   
</head>