<?php
	include 'emailer.php';

	$newEmail = new Emailer(); //instantiate a new object/variable
	$newEmail->setSendTo("spencerdavis2012@gmail.com");

	echo $newEmail->getSendTo();

	echo "<br><br>";

	$newEmail->setEmailSubject("Test");

	echo $newEmail->getEmailSubject();

	echo "<br><br>";

	$newEmail->setEmailMsg("This is a test Email!");
	echo $newEmail->getEmailMsg();

	echo "<br><br>";
	$newEmail->setSentFrom("webdev@sldavis.info");

	echo $newEmail->getSentFrom("webdev@sldavis.info");

	$newEmail->sendEmail();
?>
