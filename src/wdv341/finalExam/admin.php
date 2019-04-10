<?php
session_start();
if ($_SESSION["admin"] || $_SESSION["resumeAdmin"]) {

} else {
  header("location:../finalExam");
  exit;
}
$signIn = $_SESSION["username"];
$signedInAs = '<div class="signedOnName">Signed In as: ' . $signIn . '</div>';
$logout = '<div class="signedOnName noMargin"><button class="btn btn-dark signedOnName"><a href="../finalExam">Logout</a></button></div>';
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
  <?php
    include '../connection.php';

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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin.php"/>Admin<span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>

  </nav>
  <!-- nav menu end --->

  <div class="container col-lg-9">
    <div class="jumbotron jumbotron-fluid">
      <?=$signedInAs?>
      <?=$logout?>
      <div class="row">
        <div class="col-md-12">
          <h3>Welcome back <?=$signIn?>!</h3>
        </div>
        <hr>
          <div class="col-md-12">
          <button class="btn btn-primary">
            <a href="updateEventsPage.php"/>Update Events Page</>
          </button>
          <button class="btn btn-success">
            <a href="addEventsPage.php"/>Add Events Page</a>
          </button>
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
