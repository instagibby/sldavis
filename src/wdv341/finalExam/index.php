<?php
session_start();

if(isset($_POST["submit"]))
  {
    // Checks if returning from another page or self posted
  } else {
      if (isset($_SESSION["admin"]) || isset($_SESSION["resumeAdmin"])) {
        session_unset();
        session_destroy();
      }
      else {
        // Continue onward
      }
    }


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

  <?php
    include '../connection.php';

    $username = "";
    $password = "";
    $errMsg = "";
    $successMsg = "";
    $adminDisplayForm = "";
    $_SESSION["admin"] = false;
    $_SESSION["username"] = "";
    $_SESSION["resumeAdmin"] = false;

    if(isset($_POST["submit"]))
    	{
        $username = $_POST['username'];
        $password = $_POST['password'];
        try
          {
            $stmt = $conn->query("SELECT * FROM `341_final` WHERE `user_password` = '$password' AND `user_name` = '$username'");
            $signIn = $stmt->fetch();
            if (empty($signIn)){
              $errMsg = '<h5 class="alert alert-danger">Please Try Again</h5>';
            } else {

              if ($signIn["user_name"] == "resumeAdmin"){
                $_SESSION["resumeAdmin"] = true;
                $_SESSION["username"] = $signIn["user_name"];
              } else {
                $_SESSION["admin"] = true;
                $_SESSION["username"] = $signIn["user_name"];
              }
              header("location:../finalExam/admin.php");
            }
          }
        catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage();
          }
      }

  ?>
</head>

<body>

  <!--Nav menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">Spencer Davis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Login<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Events</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- nav menu end --->
  <div class="container col-lg-9">
    <div class="jumbotron jumbotron-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h3>Please sign in or continue as a <a href="events.php">guest</a></h3>
          <div>
            <?=$errMsg?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div>
            <form id="form" name="form" method="post" action="index.php">
                <input type="text" placeholder="Username" id="username" name="username"></input>
                <input type="password" placeholder="Password" id="password" name="password"></input>
              <hr>
                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login" />
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
