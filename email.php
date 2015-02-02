<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lunch By George</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "//cdn.foundation5.zurb.com/foundation.css" rel="stylesheet">
    <link href = "css/index.css" rel="stylesheet">
    <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  </head>
  <body>
    <?php
      include "navbar.html"
    ?>
    <div class = "row">

<?php
if(isset($_POST['email'])) {
    $email_to = "EMAIL HERE";
    $email_subject = "A Question for You!";
 
    function died($error) {
       echo "We are very sorry, but there were error(s) found with the form you submitted. ";
       echo "These errors appear below.<br /><br />";
       echo $error."<br /><br />";
       echo "Please go back and fix these errors.<br /><br />";
       die();
    }

    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['number']) ||
        !isset($_POST['inquiry']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $name = $_POST['name']; // required 
    $email_from = $_POST['email']; // required
    $number = $_POST['number']; // not required
    $comments = $_POST['comments']; // required
    $inquiry = $_POST['inquiry'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First or Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message = "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($number)."\n";
    $email_message .= "Inquiry: ".clean_string($inquiry)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

 
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
Thank you for contacting us. We will be in touch with you very soon.

<?php
header('Refresh: 5;url=./contactus.php'); 
}
?>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation.topbar.js"></script>
    <script>$(document).foundation();</script>
  </body>
</html>
