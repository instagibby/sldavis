<?php
  session_start();
  if (isset($_SESSION["admin"])) {
    $signIn = $_SESSION["username"];
    $signedInAs = '<div class="signedOnName">Signed In as: ' . $signIn . '</div>';
    $logout = '<div class="signedOnName noMargin"><button class="btn btn-dark signedOnName"><a href="../finalExam">Logout</a></button></div>';
    $styleJumbo = 'div.jumbotron { padding-top: 0px;}';
  } else {
    $signIn = "";
    $signedInAs = "";
    $logout = "";
    $styleJumbo = "";
  }


  include '../connection.php';
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
    <?=$styleJumbo?>
  </style>

</head>

<body>

  <!--Nav menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">Spencer Davis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <?php
        if(isset($_SESSION["admin"]))
          {
            if($_SESSION["admin"]){
            echo "<li><a class=\"nav-link\"href=\"admin.php\"/>Admin</a></li>";
            }
          }
      ?>
    </ul>
    <!--<a class="gitgrey hidesmall d-sm-none d-xl-block" href="https://github.com/instagibby/sldavis"><i class="fab fa-2x fa-github"></i></a> -->

  </nav>
  <!-- nav menu end --->

  <div class="container col-lg-9">
    <div class="jumbotron jumbotron-fluid">
      <?=$signedInAs?>
      <?=$logout?>
      <div class="row">
        <?php
        // $stmt = $conn->prepare("SELECT event_name, event_description, event_time, event_date FROM `341_event`");
        $stmt = $conn->query("SELECT * FROM `341_event` ");
        while ($row = $stmt->fetch())
          {
            $event_name = $row['event_name'];
            $event_description = $row['event_description'];
            $event_presenter = $row['event_presenter'];
            $event_date = $row['event_date'];
            $event_time = $row['event_time'];
            //  Date Fixed
            $stringDate = strtotime($event_date);
            $dateFormatted = date("m/d/y", $stringDate);
            //  String Fixed
            $stringTime = strtotime($event_time);
            $stringFormatted = date("g:i A", $stringTime);



            echo '<div class="col-md-4">';
              echo '<div class="card" style="width: 24rem;">';
                echo '<img class="card-img-top" src="' . $row['event_image'] . '" height="227px" width="286"  alt="Card image cap">';
                  echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $event_name . '</h5>';
                    echo '<h6 class="card-subtitle mb-2 text-muted">' . $event_presenter . '</h6>';
                    echo '<p class="card-text">' . $event_description . '<br/>' . $dateFormatted . '<br/>' . $stringFormatted . '</p>';
                      if(isset($_SESSION["admin"]))
                      {
                        if($_SESSION["admin"]){
                        echo '<a href="updateEventsPage.php?event_id=' . $row['event_id'] . '" class="card-link">Update Event</a>';
                        }
                      }
                echo '</div>';
              echo '</div>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="/js/shards.min.js"></script>
</body>

</html>
