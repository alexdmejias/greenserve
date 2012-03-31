<?php
$mine = 'admin@greenserve.org';

$MESSAGE_BODY = "email: ".$_POST["main_sign_email_field"]. "\r\n"; 
$date = date("Y/m/d");

$header_recepient = "From:". $_POST['main_sign_email_field']." <" . $_POST['main_sign_email_field'] . ">";
$header_sender = "From:". $mine." <" . $mine . ">";


//define where the user goes afterwards
$sucess = "../success.php";
$fail= "../fail.php";


//send the tip to me
$send = mail($mine, "Someone signed the pledge", $MESSAGE_BODY ." on " . $date,$header_recepient);

//check if one of the fields is empty
if ( empty($_POST['main_sign_email_field'])){
	header( "Location:".$fail);
} else {
	//send email to who submitted the tip
	$send2 = mail($_POST['main_sign_email_field'], "Greenserve's pledge", "Thank you for signing the pledge at greenserve.org. We will remind you from time to time about you promise!\r\n\n\n The Greenserve Staff \n greenserve.org",$header_sender);
	header( "Location:". $sucess);
}
?>
	