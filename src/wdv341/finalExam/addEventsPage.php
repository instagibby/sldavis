<?php
session_start();
if (isset($_SESSION["admin"]) || isset($_SESSION["resumeAdmin"])) {

} else {
  header("location:../finalExam");
  exit;
}
$signIn = $_SESSION["username"];
$signedInAs = '<div class="signedOnName">Signed In as: ' . $signIn . '</div>';
$logout = '<div class="signedOnName noMargin"><button class="btn btn-dark signedOnName"><a href="../finalExam">Logout</a></button></div>';
$successMsg = "";
$errMsg = "";
?>
<!doctype html>
<html lang="en">

<head>
	<title>Final Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
  <link rel="stylesheet" href="/css/shards.min.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
  <link rel="shortcut icon" href="/images/slogo.png" />
  <link rel="stylesheet" href="/css/main.css" />
  <link rel="stylesheet" href="final.css" />
  <style>
    div.jumbotron {
      padding-top: 0px;
    }
  </style>
  <script>
    function resetForm() {
      $("#event_date").val("");
      $("#event_description").val("");
      $("#event_presenter").val("");
      $("#event_date").val("");
      $("#event_time").val("");
    }
  </script>

  <!--Nav menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">Spencer Davis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php"/>Admin</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- nav menu end --->



</head>

<div class="container col-lg-9">
  <div class="jumbotron jumbotron-fluid">
    <?=$signedInAs?>
    <?=$logout?>
    <div class="row">
      <?php
        include '../connection.php';

        $event_name = "";
        $event_date = "";
        $event_description = "";
        $event_presenter = "";
        $event_time = "";
        $event_image = "";

        if(isset($_POST["submit"]) && isset($_SESSION["admin"])){
            if(!empty($_FILES['uploaded_file'])){
              $path = "../finalExam/images/";
              $path = $path . basename( $_FILES['uploaded_file']['name']);
              if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

              } else{

              }
            }

            $event_name = $_POST['event_name'];
            $event_date = $_POST['event_date'];
            $event_description = $_POST['event_description'];
            $event_presenter = $_POST['event_presenter'];
            $event_time = $_POST['event_time'];
            $event_image = "images/" . basename( $_FILES['uploaded_file']['name']);



            $stmt = $conn->prepare("UPDATE 341_event SET event_date =:event_date, event_description =:event_description, event_name =:event_name, event_presenter =:event_presenter, event_time =:event_time, event_image =:event_image WHERE event_id = '$updated_id' ");
            $stmt->bindParam(':event_date', $event_date);
            $stmt->bindParam(':event_description', $event_description);
            $stmt->bindParam(':event_name', $event_name);
            $stmt->bindParam(':event_presenter', $event_presenter);
            $stmt->bindParam(':event_time', $event_time);
            $stmt->bindParam(':event_image', $event_image);

            // insert a row

            $stmt->execute();
            $successMsg = '<h2 class="alert alert-success">Event Updated Inserted Correctly!</h2>';
          } else if ($_SESSION["resumeAdmin"]) {
            $errMsg = '<h2 class="alert alert-warning">Hello Resume Admin, Sorry I can\'t let you change anything!</h2>';
          } else {
            // Do Nothing
          }



          ?>

    </div>
    <br>
    <br>
    <?=$errMsg?>
    <?=$successMsg?>
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div id="orderArea">
      		<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="updateEventsPage.php?event_id=<?=$updated_id?>">
      			<h3>Event Update Form</h3>
            <div class="alignLeft">
              <p>Event Name:
      			    <input class="form-control" type="text" name="event_name" id="event_name" placeholder="Event Name" value="<?php echo($event_name); ?>" required />
              </p>
              <p>Event Description
      			    <input class="form-control" type="text" name="event_description" id="event_description" placeholder="Description" value="<?php echo($event_description);?>" required />
        			</p>
              <p>Event Host
      			    <input class="form-control" type="text" name="event_presenter" id="event_presenter" placeholder="Host Name" value="<?php echo($event_presenter); ?>" required />
              </p>
              <p>Event Date
      			    <input class="form-control" type="date" name="event_date" id="event_date" value="<?php echo($event_date); ?>" required />
        			</p>
              <p>Event Time
      			    <input class="form-control" type="time" name="event_time" id="event_time" value="<?php echo($event_time); ?>" required />
        			</p>
              <p>
                Image Upload:
                <input type="file" class="btn btn-primary form-control" name="uploaded_file" id="uploaded_file" accept=".jpg, .jpeg, .png, .gif">
              <p>
        			<p>
        				<input type="submit" name="submit" id="button" value="Update Event" class="btn btn-success" />
        				<input type="reset" name="button2" id="button2" value="Clear Form" onClick="resetForm()" class="btn btn-secondary" />
        			</p>
            </div>
            <br>
      		</form>
      	</div>
      </div>
    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="/js/shards.min.js"></script>
</body>

  </html>
