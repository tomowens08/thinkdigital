<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['msg'];
    
$sendern = $_POST["sender"];
$sendere = $_POST["senderEmail"];
$message = $_POST["message"];

$to = "admin@cambriachabers.com";
$subject = "Website Mail Form";

$msg = wordwrap($message&$sendern&&$sendere,70);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@cambriachambers.com>' . "\r\n";

if (($sendere==""))
        {
		echo "Field is required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message from Website Contact Form";
		mail($to,$subject,$msg,$headers);
		echo "Email sent!";
                echo "<p style='color#000;background-color:yellow;'>
	Thank you! Your message has been sent.</p>
	<a href='index.html'>CLICK HERE TO RETRUN</a>
	<p style='color#000;background-color:yellow;'>
	Thank you. Your message has been sent.</p>";
	    }


?>
