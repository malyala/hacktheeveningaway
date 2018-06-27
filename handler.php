<?php
<<<<<<< HEAD
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
=======
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
>>>>>>> 708168349e3999527f88214e9af6d0116db35629
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
<<<<<<< HEAD


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
=======
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['Name','Email'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('Message')->maxLength(6000);




$pp->sendEmailTo('hacktheevening@gmail.com'); // ← Your email here

echo $pp->process($_POST);
>>>>>>> 708168349e3999527f88214e9af6d0116db35629
