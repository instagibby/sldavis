<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DMACC Portfolio Day Bio Form</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<script src="css3-mediaqueries.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>

	$(document).ready(function(){
		if( $("select[name=program]	option:selected").val() == "webDevelopment")
		{
			$(".secondWeb").css("display", "inline");
		}
		else
		{
			$(".secondWeb").css("display", "none");
		}

		$("select#program").change(function(){
			if( $("select#program option:checked").val() == "webDevelopment")
			{
				$(".secondWeb").css("display", "inline");
			}
			else
			{
				$(".secondWeb").css("display", "none");
			}
		});

		function resetForm(){
			$("#firstName").val("");
			$("#lastName").val("");
			$("#program").val("default");
			$("#websiteAddress").val("");
			$("#websiteAddress2").val("");
			$("#email").val("");
			$("#hometown").val("");
			$("#careerGoals").val("");
			$("#threeWords").val("");
		}
	});


	</script>

  <style>
  * {
    font-family: 'Roboto', sans-serif;
  }
	img{
		display: block;
		margin: 0 auto;
	}
	.frame{
		background-image: url("images/orange popsicle.jpg");
		padding: 1em;
	}
	.frame2{
		background-image: url("images/citrus.jpg");
		padding: 1.3em;
	}
	body{
		background-image: url("images/bodacious.png");
		margin: 1.5em;
	}

	.main {
		padding: 1em;
		background-color: white;
	}
	form{
		text-align: center;
	}
	h2 {
		text-align: center;
	}
	.robotic{
		display: none;
	}

	.form {
		background-color:white;
		padding-left: 5em;
	}
	p {
		align:left;
	}
	.citrus{
		margin: auto;
		background-image: url("images/raspberry.jpg");
		padding: 1.3em;
		width: 70%;
	}
	.bamboo{
		background-image: url("images/bamboo.jpg");
		padding: 1em;
	}
	.violet{
		background-image: url("images/ultra violet.png");
		padding: .5em;
	}
	.secondWeb{
		display: none;
	}
	table{
		margin: auto;
	}
	table td{
		padding-bottom: .75em;
	}
	.error{
		font-style: italic;
		color: #d42a58;
		font-weight: bold;
	}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  img {
    width:100%;
  }
  .form {
	width:100%;
	padding-left: .1em;
	padding-top: .1em;
  }
  .citrus {
	background-image:none;
  }
  .bamboo {
	background-image:none;
  }
  .violet {
	background-image:none;
  }
  .secondWeb{
		display: none;
	}
  table{
		margin: auto;
	}
  table td{
		padding-bottom: .5em;
	}
}

  </style>


  <?php
  $firstName = "";
  $lastName = "";
  $program = "default";
  $program2 = "none";
  $websiteAddress = "";
  $email = "";
  $linkedIn = "";
  $websiteAddress2 = "";
  $hometown = "";
  $careerGoals = "";
  $threeWords = "";
  $submitMsg = "";
  $emailToLogin = "";
  $isFormValid = false;
  $honeyPot = "";
  $programArray["animation"] = "";
  $programArray["graphicDesign"] = "";
  $programArray["photography"] = "";
  $programArray["videoProduction"] = "";
  $programArray["webDevelopment"] = "";

  $program2Array["animation"] = "";
  $program2Array["graphicDesign"] = "";
  $program2Array["photography"] = "";
  $program2Array["videoProduction"] = "";
  $program2Array["webDevelopment"] = "";

  $firstNameErr = $emailErr  = $websiteErr = $emailErr = $website2Err = $careerGoalsErr = $threeWordsErr = "";
  $lastNameErrMsg = $emailToLoginErr = $programErr = $program2Err = $website = $linkedInErr = $hometownErr = "";







    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $program = $_POST["program"];
      $program2 = $_POST["program2"];
      $websiteAddress = $_POST["websiteAddress"];
      $email = $_POST["email"];
      $linkedIn = $_POST["linkedIn"];
      $websiteAddress2 = $_POST["websiteAddress2"];
      $hometown = $_POST["hometown"];
      $careerGoals = $_POST["careerGoals"];
      $threeWords = $_POST["threeWords"];
      $emailToLogin = $_POST["emailToLogin"];


      $isFormValid = true;

      if (empty($_POST["firstName"])) {
        $firstNameErr = "Name is required";
        $isFormValid = false;
      } else {
        $firstName = test_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$firstName)) {
          $firstNameErr = "Only letters and white space allowed";
          $isFormValid = false;
        }
      }

      if (empty($_POST["lastName"])) {
        $lastNameErrMsg = "Last name is required";
        $isFormValid = false;
      } else {
        $lastName = test_input($_POST["lastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lastName)) {
          $lastNameErrMsg = "Only letters and white space allowed";
          $isFormValid = false;
        }
      }

      if (empty($_POST["emailToLogin"])) {
        $emailToLoginErr = "Login is required";
        $isFormValid = false;
      } else {
        $emailToLogin = test_input($_POST["emailToLogin"]);
        // check if e-mail address is well-formed
        if (!filter_var($emailToLogin, FILTER_VALIDATE_EMAIL)) {
          $emailToLoginErr = "Invalid email format";
          $isFormValid = false;
        }
      }

      if ($_POST["program"] != "default") {
        $programErr = "";
      } else {
        $programErr = "Please Select a Program";
        $isFormValid = false;
      }

      if ($_POST["program2"] != "none") {
        $program2Err = "";
      } else {
        $program2Err = "Please Select a Secondary Program";
        $isFormValid = false;
      }

      if (empty($_POST["websiteAddress"])) {
        $websiteErr = "";
      } else {
        $website = test_input($_POST["websiteAddress"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
          $isFormValid = false;
        }
      }

      if (empty($_POST["websiteAddress2"])) {
        $website2Err = "";
      } else {
        $website2 = test_input($_POST["websiteAddress2"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website2)) {
          $website2Err = "Invalid URL";
          $isFormValid = false;
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "";
      } else {
        $email = test_input($_POST["emailToLogin"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          $isFormValid = false;
        }
      }

      if (empty($_POST["linkedIn"])) {
        $linkedInErr = "";
      } else {
        $linkedIn = test_input($_POST["linkedIn"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedIn) && !strstr(strtolower($linkedIn),"linkedin.com")) {
          $linkedInErr = "Invalid Profile";
          $isFormValid = false;
        }
      }

      if (empty($_POST["hometown"])) {
        $hometownErr = "Hometown is required";
        $isFormValid = false;
      } else {
        $hometown = test_input($_POST["hometown"]);

        if (!preg_match('/^[a-zA-Z0-9, ]*$/i', $hometown)) {
          $hometownErr = "Use only letters, numbers, spaces and commas";
          $isFormValid = false;
        }
      }

      if (empty($_POST["careerGoals"])) {
        $careerGoalsErr = "";
      } else {
        $careerGoals = test_input($_POST["careerGoals"]);
        if (!preg_match('/^[a-zA-Z0-9,.!? \']*$/i', $careerGoals)) {
          $careerGoalsErr = "Please use only basic punctiation ie don't use:@#$%^&*()<>{}[]|";
            $isFormValid = false;
        }
      }

      if (empty($_POST["threeWords"])) {
        $threeWordsErr = "";
      } else {
        $threeWords = test_input($_POST["threeWords"]);
        if (!preg_match('/^[a-zA-Z0-9,.!? \']*$/i', $threeWords)) {
          $threeWordsErr = "Please use only basic punctiation ie don't use:@#$%^&*()<>{}[]|";
            $isFormValid = false;
        }
      }
      if ($isFormValid) {
          $submitMsg = "Submitted successfully!";
      }

      $programArray[$program] = "selected";
      $program2Array[$program2] = "selected";

      if(strlen($honeyPot) > 0 ){
        $isFormValid = false;
      }
    }

  ?>


</head>

<section class="orange">
<body>
<div class="frame2">
<div class="frame">

  <div class="main">
  <div><img src="images/madonna.gif" alt="Mix gif" ></div>
  <br>



<section class="citrus">
<section class="bamboo">
<section class="violet">

	<div class="main form">

	<h2><span><?php echo $submitMsg ?></span></h2>
	</table>
	<form id="portfolioBioForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

		<table>
		<tr>
		<td>Login Email:<br> <input type="text" id="emailToLogin" name="emailToLogin" value="<?php echo $emailToLogin ?>"/><br><span class="error"><?php echo $emailToLoginErr;?></span></td>
		</tr>
		<tr>
		<td>First Name:<br> <input type="text" id="firstName" name="firstName" value="<?php echo $firstName ?>"/><br><span class="error"><?php echo $firstNameErr;?></span></td>
		</tr>
		<tr>
		<td>Last Name:<br> <input type="text" id="lastName" name="lastName" value="<?php echo $lastName ?>" /><br><span class="error" ><?php echo $lastNameErrMsg;?></span></td>
		</tr>
		<tr>
		<td >Program:<br> <select id="program" name="program">
				<option value="<?php echo $program ?>">---Select Your Program---</option>
				<option value="animation" <?php echo $programArray["animation"] ?>>Animation</option>
				<option value="graphicDesign" <?php echo $programArray["graphicDesign"] ?> >Graphic Design</option>
				<option value="photography" <?php echo $programArray["photography"] ?> >Photography</option>
				<option value="videoProduction"<?php echo $programArray["videoProduction"] ?> >Video Production</option>
				<option value="webDevelopment" <?php echo $programArray["webDevelopment"] ?>>Web Development</option>
			</select><br><span class="error" id="programError"><?php echo $programErr;?></span><td>
		</tr>
		<tr>
		<td >Secondary Program:<br> <select id="program2" name="program2">
				<option value="<?php echo $program2 ?>" >---No Secondary Program---</option>
				<option value="animation" <?php echo $program2Array["animation"] ?> >Animation</option>
				<option value="graphicDesign" <?php echo $program2Array["graphicDesign"] ?>  >Graphic Design</option>
				<option value="photography" <?php echo $program2Array["photography"] ?>  >Photography</option>
				<option value="videoProduction" <?php echo $program2Array["videoProduction"] ?>  >Video Production</option>
				<option value="webDevelopment" <?php echo $program2Array["webDevelopment"] ?>  >Web Development</option>
			</select><br><span class="error" id="program2Error"><?php echo $program2Err;?></span><td>
		</tr>
		<tr>
		<td>Website Address:<br> <input type="text" id="websiteAddress" name="websiteAddress" value="<?php echo $websiteAddress ?>"/><br><span class="error" id="websiteAddressError"><?php echo $websiteErr;?></span></td>
		</tr>
		<tr>
		<td>Personal Email:<br><input type="text" id="email" name="email" value="<?php echo $email ?>" /><br><span class="error" id="emailError"><?php echo $emailErr;?></span></td>
		</tr>
		<tr>
		<td>LinkedIn Profile:<br><input type="text" id="linkedIn" name="linkedIn" value="<?php echo $linkedIn ?>" /><br><span class="error" id="linkedInError"><?php echo $linkedInErr;?></span></td>
		<tr>
		<td><span class="secondWeb">Secondary Website Address (git repository, etc.):<br> <input type="text" id="websiteAddress2" name="websiteAddress2" value="<?php echo $websiteAddress2 ?>"/><br><span class="error" id="websiteAddress2Error"><?php echo $website2Err;?></span></span></td>
		</tr>
		<tr>
		<td>Hometown:<br> <input type="text" id="hometown" name="hometown" value="<?php echo $hometown ?>"/><br><span class="error" id="hometownError"><?php echo $hometownErr;?></span></td>
		</tr>
		<tr>
		<td>Career Goals:<br> <textarea id="careerGoals" name="careerGoals" value="<?php echo $careerGoals ?>"> </textarea><br><span class="error" id="careerGoalsError"><?php echo $careerGoalsErr;?></span></td>
		</tr>
		<tr>
		<td>3 Words that Describe You:<br> <input type="text" id="threeWords" name="threeWords" value="<?php echo $threeWords ?>"/><br><span class="error" id="threeWordsError"><?php echo $threeWordsErr;?></span></td>
		<p class="robotic" id="pot">
			<label>Leave Blank</label>
			<input type="hidden" name="honeypot" id="inRobotest" class="inRobotest" value="" />
		</p>
		<input type="hidden" id="submitConfirm" name="submitConfirm" value="submitConfirm"/>
		</tr>
		<tr>
		<td><input type="submit" id="submitBio" name="submitBio" value="Submit Bio" /></td>
		</tr>
		<tr>
		<td><input type="reset" id="resetBio" name="resetBio" value="Reset Bio"/></td>
		</tr>
		</table>
	</form>
	</div>


</section>
</section>
</section>

</div>

</body>
</section>

</html>
