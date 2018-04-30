<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<?php
	include '../connection.php';

	$deleteId = $_GET['eventID'];
	if($deleteId == $deleteId)
    {
    	$stmt = $conn->prepare("DELETE FROM 341_event WHERE event_id = '$deleteId'");

    	$stmt->execute();
      header("location:../finalExam/updateEventsPage.php");
    }
    else
    {
      header("location:../finalExam/updateEventsPage.php");
    }

  ?>


</head>

<body>
</body>
</html>
