<?php


$recipient = "saravananitbtech@gmail.com";

$subject = "The Fitting Room - Subscribe from coming soon page";

$location = "http://thefittingroom.com/";


$sender = $recipient;

# MAIL BODY
$body .= "Name: New Subscriber"." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##



mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>