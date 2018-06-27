<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */


$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Email: $email \n Comfortability: $dropdown \n Message: $message";
$recipient = "hacktheevening@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if($_POST['submit']){
	if(mail($recipient, $subject, $formcontent, $mailheader)){
		 echo '<p>Your message has been sent!</p>';
		}else{
			 echo '<p>Something went wrong, go back and try again!</p>';
		}
}
#mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
#echo "Thank You!";


//$pp->sendEmailTo('hacktheevening@gmail.com'); // ← Your email here

//echo $pp->process($_POST);
?>