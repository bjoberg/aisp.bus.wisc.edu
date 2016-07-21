<?php

// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
  // empty($_POST['email']) 		||
   empty($_POST['message'])	//||
   //!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)
   )
   {
	echo "No arguments Provided!";
    print_r($_POST);
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['fromEmail'];
$message = $_POST['message'];
//Works! :D
$to = $_POST['to'];
//=========

//$to = 'pboyer2@mailinator.com';

    $email_subject = "AISP Contact Form"; // EDIT THE EMAIL SUBJECT LINE HERE
    $email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
    $headers = "From: noreply@aisp.bus.wisc.edu\r\n";
    $headers .= "Reply-To: $email_address";	
    
    if( mail($to,$email_subject,$email_body,$headers) ){
        echo "Mail sent :D";
    } else {
        echo "You dun goofd";
    }


return true;			
?>