<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<?php
	include '../connection.php';
  include 'selectEvents.php';

	$deleteId = $_GET['event_id'];
	if($deleteId == $deleteId)
    {
    	$stmt = $conn->prepare("DELETE FROM 341_event WHERE event_id = '$deleteId'");

    	$stmt->execute();

      echo "<br>";
    	echo "<h1>"."Record Event Id Was Deleted: ".$deleteId."</h1>";

    }
    else
    {
    	echo "<h1>Record was not deleted!</h1>";
    }

  ?>


</head>

<body>
</body>
</html>
