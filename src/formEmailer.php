<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Form Emailer Example</title>
<style type="text/css">
.colorRed {
	color: #F00;
}
</style>
</head>

<body>
<h1>WDV101 Intro HTML and CSS</h1>
<h2>Chapter 9 - Using a Form to Send an Email</h2>

<hr>
<h3>Format and Email the form information to an email address of your choice.</h3>
<p>This process will process the 'name = value' pairs for all the elements of a form. It will format and create an email with the form information.  The email will be sent to whatever email address you wish to use.  You can hard code the email address within the PHP code or you could pass the email address as part of the form content.
</p>
<p>This form will also display the name value pairs from your form on the response page created by this PHP page.</p>
<p>
Instructions:</p>
<ol>
  <li>To call this page use <strong>formEmailer.php</strong> in the action attribute of your form.</li>
  <li>Make sure you choose method=&quot;post&quot;.</li>
  <li>You may need to setup an email address on your server account. Most servers have some type of protection to stop hackers from  using your email address to send bogus emails. Check with your web server vendor on  the way they do email from a form.<br />
  </li>
  <li>Do the following if you  are using  <strong>www.heartland-webhosting.com</strong>
<ol type="a">
      <li>Sign on to your web hosting account. </li>
      <li>On your control panel select Email Accounts. </li>
      <li>Create an email  address on your web hosting account for this domain name. </li>
      <ul>
        <li><em>For example:</em> webrequestedinfo@larryhall.info or info@mikesgarage.com.  You are welcome to use any email name. info, information and contact are all common choices for this.</li>
      </ul>
      <li>Your newly created email address will be used as the  web address in the <strong>from</strong> section of the email in your PHP code. Sometimes it is also best to use it in  the <strong>to</strong> section in the PHP file. Then use email forwarding on the server to let the  server send the email to multiple parties.</li>
      <li>Turn off the 'retain a  copy' of the email on the server. If you leave this on the server will make a copy of each email and it will remain on the server until you go in and delete them.</li>
      <li>Check the email works by  sending an email from your DMACC account to your newly created web server email  address. For example : <a href="mailto:webrequestedinfo@larryhall.info">webrequestedinfo@larryhall.info</a>.  You will need to log into your hosting account's email system to find the email. This can be done through your account control panel. You can setup your hosting account's email to forward emails to your other emails.</li>
    </ol>
  </li>
  <li><strong>Change the value of the $toEmail</strong> variable in formEmailer.php to<strong> the address you wish to send the email</strong>. <em>Example: $to=&quot;mlsmith@dmacc.edu&quot;.</em> This could be the same as your $from address.</li>
  <li><strong>Change the value of the $fromEmail</strong> variable in formEmailer.php to your email address or the one you just created. <em>Example: $from=&quot;contact@mikesgarage.com&quot;.</em></li>
  <li>Upload the formEmailer.php file to your server. Note: It will need to be in the same folder as your form page or you will need to provide the appropriate path name.</li>
</ol>
<p>Remember, you can change any or all of the HTML above this heading.  It is just HTML and CSS. You can add your own HTML and CSS styles to this page.  You can also change the HTML inside the PHP code if you wish to format or style the output. </p>
<p>The following will display the content that was entered in the form.</p>
<p><strong>name</strong> - The value of the name attribute from the HTML form element.</p>
<p><strong>value</strong> - The value entered in the field. This will vary depending upon the HTML form element.</p>

<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	}
	echo "</table>";
	echo "<p>&nbsp;</p>";

//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //

	$toEmail = "spencerdavis2012@gmail.com";		//CHANGE within the quotes. Place email address where you wish to send the form data.
										//Use your DMACC email address for testing.
										//Example: $toEmail = "jhgullion@dmacc.edu";

	$subject = "Contact Form";	//CHANGE within the quotes. Place your own message.  For the assignment use "WDV101 Email Example"

	$fromEmail = "webdev@sldavis.info";		//CHANGE within the quotes.  Use your DMACC email address for testing OR
										//use your domain email address if you have Heartland-Webhosting as your provider.
										//Example:  $fromEmail = "contact@jhgullion.org";  

//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form
	{
		$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
	}

	$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<p>Message successfully sent!</p>");
  	}
	else
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>

</body>
</html>
