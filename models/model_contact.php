<?php
class Model_Contact extends Model
{
    function send_email()
    {
        
    	if(isset($_POST['submit'])){

			    $to 	  = "dospinoiu.larisa95@gmail.com"; // this is your Email address
			    $from 	  = $_POST['email']; // this is the sender's Email address
			    $name	  = $_POST['name'];
			    $subject  = "Form submission";
			    $message  = "You receive a message from ".$name . " who wrote the following:" . "\n\n" . $_POST['message'];
			    $headers  = "From:" . $from;
			}
		else echo "Your message was not send";

    }

}
?>