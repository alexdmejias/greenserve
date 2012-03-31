<?php
$mine = 'admin@greenserve.org';

$MESSAGE_BODY = "email: ".$_POST["submit_email"]. "\r\n"; 
$MESSAGE_BODY = "tip: ".$_POST['submit_tip'];
$date = date("Y/m/d");

$header_recepient = "From:". $_POST['submit_email']." <" . $_POST['submit_email'] . ">";
$header_sender = "From:". $mine." <" . $mine . ">";

//define where the user goes afterwards
$sucess = "../success.php";
$fail= "../fail.php";


//send the tip to me
$send = mail($mine, "Someone submitted a tip", $MESSAGE_BODY ." \n on " . $date  .' from this email:'.$_POST['submit_email'],$header_recepient);

//check if one of the fields is empty
if ( empty($_POST['submit_email'])|| empty($_POST['submit_tip'])){
	header( "Location:".$fail);
} else {
	//send email to who submitted the tip
	$send2 = mail($_POST['submit_email'], "Greenserve's tip", "Thank you for sharing your knowledge with us.\r\n\n\n The Greenserve Staff \n greenserve.org",$header_sender);
	header( "Location:". $sucess);
}
?>
	