<?php

if(isset($_POST["send"])){


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$eadrs = $_POST["eaddress"];
$sub = $_POST["subj"];
$msg = $_POST["message"];

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', $eadrs);

$header = $eadrs." \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";


if(!empty($fname && $lname && $eadrs && $sub && $msg )){
		$to = "jameschristo962@gmail.com.com";
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$sub,$msg,$header);
         
         if( $retval == true ) {
            echo "<div class='alert alert-success'>Message sent successfully...</div>";
         }else {
            echo "<div class='alert alert-danger'>Message coould not be sent...</div>";
         }
}else{
	echo "<div class='alert alert-danger'>A required field is empty</div>";
}
}



/*

	 <?PHP
    $sender = 'sender123@gmail.com';
    $recipient = 'resever123@gmail.com';

    $subject = "php mail test";
    $message = "php test message";
    $headers = 'From:' . $sender;

    if (mail($recipient, $subject, $message, $headers))
    {
        echo "Message accepted";
    }
    else
    {
        echo "Error: Message not accepted";
    }
    ?>
*/

/*
         $to = "jameschristo962@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
		 */
      ?>