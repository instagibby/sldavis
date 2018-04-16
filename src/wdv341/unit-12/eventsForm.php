<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WDV341 Intro PHP - Form Validation Example</title>

	<?php
  include '../connection.php';

		$event_name = "";
    $event_date = "";
    $event_description = "";
    $event_presenter = "";
    $event_time = "";

		if(isset($_POST["submit"]))
		{


			$event_name = $_POST['event_name'];
      $event_date = $_POST['event_date'];
      $event_description = $_POST['event_description'];
      $event_presenter = $_POST['event_presenter'];
      $event_time = $_POST['event_time'];


      $stmt = $conn->prepare("INSERT INTO 341_event (event_date, event_description, event_name, event_presenter, event_time)
      VALUES (:event_date, :event_description, :event_name, :event_presenter, :event_time)");
      $stmt->bindParam(':event_date', $event_date);
      $stmt->bindParam(':event_description', $event_description);
      $stmt->bindParam(':event_name', $event_name);
      $stmt->bindParam(':event_presenter', $event_presenter);
      $stmt->bindParam(':event_time', $event_time);

      // insert a row

      $stmt->execute();

		}
	?>

	<script>
		function resetForm() {
			$("#inName").val("");
			$("#inEmail").val("");
			$("#RadioGroup1").val("default");
		}
	</script>
	<style>
		#orderArea {
			width: 600px;
			background-color: #CF9;
      padding: 5px 0 0 15px;
		}

		.error {
			color: red;
			font-style: italic;
		}
	</style>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Form Validation Assignment


</h2>
	<div id="orderArea">
		<form id="form1" name="form1" method="post" action="eventsForm.php">
			<h3>Student Registration Form</h3>
      <p>
			    <input type="text" name="event_name" id="event_name" placeholder="Event Name" value="<?php echo($event_name); ?>" />
      </p>
      <p>
			    <input type="text" name="event_description" id="event_description" placeholder="Description" value="<?php echo($event_description);?>" />
			</p>
      <p>
			    <input type="text" name="event_presenter" id="event_presenter" placeholder="Presenter Name" value="<?php echo($event_presenter); ?>" />
      </p>
      <p>
			    <input type="date" name="event_date" id="event_date" value="<?php echo($event_date); ?>" />
			</p>
      <p>Time:
      <br>
			    <input type="time" name="event_time" id="event_time" value="<?php echo($event_time); ?>" />
			</p>
			<p>
				<input type="submit" name="submit" id="button" value="Register" />
				<input type="reset" name="button2" id="button2" value="Clear Form" onClick="resetForm()" />
			</p>
      <br>
		</form>
	</div>

</body>

</html>
