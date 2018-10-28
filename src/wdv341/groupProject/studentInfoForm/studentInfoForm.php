<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DMACC Portfolio Day Bio Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
  <link rel="stylesheet" href="/css/shards.min.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
  <link rel="shortcut icon" href="/images/test.png" />
  <link rel="stylesheet" href="/css/main.css" />

  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
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

  	form{
  		text-align: center;
      border: solid;
      border-color: #5a6169;
      border-width: thin;
      padding: 1em;
  	}

  	h2 {
  		text-align: center;
  	}

  	.robotic{
  		display: none;
  	}

  	.form {
  		background-color:white;
  	}

  	p {
  		align:left;
  	}

  	.secondWeb {
  		display: none;
  	}

  	.error{
  		font-style: italic;
  		color: #d42a58;
  		font-weight: bold;
  	}

    @media (min-width: 1200px){
      .container {
          max-width: 750px;
      }
    }
    @media (min-width: 768px){
      .container {
        max-width: 530px;
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
          $websiteErr = "Invalid URL, format like www.google.com";
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
          $submitMsg = "<div class=\"alert alert-success\" role=\"alert\"/>Submitted successfully!</div>";
      }
      $programArray[$program] = "selected";
      $program2Array[$program2] = "selected";
      if(strlen($honeyPot) > 0 ){
        $isFormValid = false;
      }
    }
  ?>


</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">Spencer Davis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/resume/index.html">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/resume/index.html#contact-form">Contact Me</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Homework
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/WDV/Homework/wdv101homework.html">Intro HTML/CSS (2017)</a>
            <a class="dropdown-item" href="/wdv205/index.html">Adv CSS (2017)</a>
            <a class="dropdown-item" href="/introJavaScript/index.html">Intro Javascript (2017)</a>
            <a class="dropdown-item" href="/wdv321/index.html">Advanced Javascript (2018)</a>
            <a class="dropdown-item" href="/wdv341/index.php">Intro PHP (2018)</a>
            <a class="dropdown-item" href="/angular5">Playing with Angular (2018)</a>
            <a class="dropdown-item" href="/WebComponents">Web Components (2018)</a>
          </div>
        </li>
        <li>
          <a class="gitgrey d-sm-block d-lg-none d-xl-none" href="https://www.linkedin.com/in/spencer-davis-618a58155/"><i class="fab fa-2x fa-linkedin"></i></a>
          <a class="gitgrey d-sm-block d-lg-none d-xl-none" href="https://github.com/instagibby"><i class="fab fa-2x fa-github"></i></a>
        </li>
      </ul>
    </div>
    <a class="gitgrey hidesmall d-sm-none d-xl-block" href="https://www.linkedin.com/in/spencer-davis-618a58155/"><i class="fab fa-2x fa-linkedin"></i></a>
    <a class="gitgrey hidesmall d-sm-none d-xl-block" href="https://github.com/instagibby"><i class="fab fa-2x fa-github"></i></a>
  </nav>
  <div>
    <img class="img-fluid" src="madonna.gif" alt="Mix gif" >
  </div>


<div class="container">
	<h2><?=$submitMsg ?></h2>
	<form id="portfolioBioForm" method="post" action="<?=htmlentities($_SERVER['PHP_SELF']); ?>">
    <h4>Team Members:</h4>
      <p>Spencer Davis, Almir Mujic, and James Borlaug</p>
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="firstName">*First Name:</label><br/>
         <input class="form-control" type="text" id="firstName" name="firstName" value="<?=$firstName ?>"/>
         <small><span class="error"><?=$firstNameErr;?><span/></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="lastName">*Last Name:</label><br/>
         <input class="form-control" type="text" id="lastName" name="lastName" value="<?=$lastName ?>"/>
         <small><span class="error" ><?=$lastNameErrMsg;?></span></small>
       </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group">
         <label for="emailToLogin">*Login Email:</label><br/>
         <input class="form-control" type="text" id="emailToLogin" name="emailToLogin" value="<?=$emailToLogin ?>"/>
         <small><span class="error"><?=$emailToLoginErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group">
         <label for="email">Personal Email:</label><br/>
         <input class="form-control" type="text" id="email" name="email" value="<?=$email ?>"/>
         <small><span class="error" id="emailError"><?=$emailErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="program">*Primary Program:</label><br/>
         <select class="custom-select form-control"  id="program" name="program">
           <option value="<?=$program ?>">Select Your Program</option>
           <option value="animation" <?=$programArray["animation"]?>>Animation</option>
           <option value="graphicDesign" <?=$programArray["graphicDesign"]?>>Graphic Design</option>
           <option value="photography" <?=$programArray["photography"]?>>Photography</option>
           <option value="videoProduction"<?=$programArray["videoProduction"]?>>Video Production</option>
           <option value="webDevelopment" <?=$programArray["webDevelopment"]?>>Web Development</option>
         </select>
         <small><span class="error" id="programError"><?=$programErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="program2">*Secondary Program:</label><br/>
         <select class="custom-select form-control"  id="program2" name="program2">
           <option value="<?=$program2 ?>">No Secondary Program</option>
           <option value="animation" <?=$program2Array["animation"] ?> >Animation</option>
           <option value="graphicDesign" <?=$program2Array["graphicDesign"] ?>  >Graphic Design</option>
           <option value="photography" <?=$program2Array["photography"] ?>  >Photography</option>
           <option value="videoProduction" <?=$program2Array["videoProduction"] ?>  >Video Production</option>
           <option value="webDevelopment" <?=$program2Array["webDevelopment"] ?>  >Web Development</option>
         </select>
         <small><span class="error" id="program2Error"><?=$program2Err;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="websiteAddress">Website Address:</label><br/>
          <input class="form-control" type="text" id="websiteAddress" name="websiteAddress" value="<?=$websiteAddress ?>"/>
          <small><span class="error" id="websiteAddressError"><?=$websiteErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="linkedIn">LinkedIn Profile:</label><br/>
         <input class="form-control" type="text" id="linkedIn" name="linkedIn" value="<?=$linkedIn ?>" />
         <small><span class="error" id="linkedInError"><?=$linkedInErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12 secondWeb">
        <div class="form-group">
         <label for="websiteAddress2">Secondary Website Address (git repository, etc.):</label>
           <input class="form-control" type="text" id="websiteAddress2" name="websiteAddress2" value="<?=$websiteAddress2 ?>"/>
         <small><span class="error" id="websiteAddress2Error"><?=$website2Err;?></span></small>
       </div>
  		</div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="hometown">*Hometown:</label><br/>
         <input class="form-control" type="text" id="hometown" name="hometown" value="<?=$hometown ?>"/>
         <small><span class="error" id="hometownError"><?=$hometownErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="threeWords">Three Words that Describe You:</label><br/>
         <input class="form-control" type="text" id="threeWords" name="threeWords" value="<?=$threeWords ?>"/>
         <small><span class="error" id="threeWordsError"><?=$threeWordsErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
         <label for="careerGoals">Career Goals:</label><br/>
         <textarea id="careerGoals" class="form-control" name="careerGoals" value="<?=$careerGoals ?>"></textarea>
         <small><span class="error" id="careerGoalsError"><?=$careerGoalsErr;?></span></small>
       </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group">
          <p class="robotic" id="pot">
            <label>Leave Blank</label><br/>
            <input class="form-control" type="hidden" name="honeypot" id="inRobotest" class="inRobotest" value="" />
          </p>
          <button class="btn btn-primary" type="submit" id="submitBio" name="submitBio" value="Submit Bio">Submit Bio</button>
      		<button class="btn btn-secondary" onclick="location.href='/wdv341/groupProject/studentInfoForm.php'" value="Reset Bio"/>Reset Bio</button>
        </div>
      </div>
	 </form>
 </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="/wdv205/portfolio/js/shards.min.js"></script>


</body>


</html>
