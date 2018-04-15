<?php
//Model-Controller Area.  The PHP processing code goes in this area.
	//Method 1.  This uses a loop to read each set of name-value pairs stored in the $_POST array
	$tableBody = "";		//use a variable to store the body of the table being built by the script

	foreach($_POST as $key => $value)		//This will loop through each name-value in the $_POST array
	{
		$tableBody .= "<tr>";				//formats beginning of the row
		$tableBody .= "<td>$key</td>";		//dsiplay the name of the name-value pair from the form
		$tableBody .= "<td>$value</td>";	//dispaly the value of the name-value pair from the form
		$tableBody .= "</tr>";				//End this row
	}


	//Method 2.  This method pulls the individual name-value pairs from the $_POST using the name
	//as the key in an associative array.

	$inContactName = $_POST["contactName"];		//Get the value entered in the first name field
	$inEmail = $_POST["email"];		//Get the value entered in the last name field
	$inComment = $_POST["comment"];			//Get the value entered in the school field
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
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV 341 Intro PHP - Code Example</title>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Form Handler Result Page - Code Example</h2>
<p>This page displays the results of the Server side processing. </p>
<p>The PHP page has been formatted to use the Model-View-Controller (MVC) concepts. </p>
<h3>Display the values from the form using Method 1. Uses a loop to process through the $_POST array</h3>
<p>
	<table border='a'>
    <tr>
    	<th>Field Name</th>
        <th>Value of Field</th>
    </tr>
	<?php echo $tableBody;  ?>
	</table>
</p>
<h3>Display the values from the form using Method 2. Displays the individual values.</h3>
<p>Contact Name: <?php echo $inContactName; ?></p>
<p>Email: <?php echo $inEmail; ?></p>
<p>Comments: <?php echo $inComment; ?></p>


</body>
</html>
