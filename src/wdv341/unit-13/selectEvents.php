<!DOCTYPE html>
<html>

<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

  <?php
  include '../connection.php';

  $languageArray = array();

  try {
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "<table>" . "\n";
      echo "<tr>" . "\n";
      echo "<th>event_id</th>" . "\n";
      echo "<th>event_name</th>" . "\n";
      echo "<th>event_description</th>" . "\n";
      echo "<th>event_presenter</th>" . "\n";
      echo "<th>event_date</th>" . "\n";
      echo "<th>event_time</th>" . "\n";
      echo "<th>update</th>" . "\n";
      echo "<th>delete</th>" . "\n";
      echo "</tr>" . "\n";


      $stmt = $conn->query("SELECT `event_id`, `event_name`, `event_description`, `event_presenter`, `event_date`, `event_time`  FROM `341_event` ");
      while ($row = $stmt->fetch())
        {
          $languageArray[$row[0]] = $row[1];
          echo "<tr>";
          echo "<td>" . $row['event_id'] . "</td>" . "\n";
          echo "<td>" . $row['event_name'] . "</td>" . "\n";
          echo "<td>" . $row['event_description'] . "</td>" . "\n";
          echo "<td>" . $row['event_presenter'] . "</td>" . "\n";
          echo "<td>" . $row['event_date'] . "</td>" . "\n";
          echo "<td>" . $row['event_time'] . "</td>" . "\n";
          echo "<td><a href='updateEvent.php?event_id=" . $row['event_id'] . "'>Update</a></td>" . "\n";
          echo "<td><a href='deleteEvent.php?event_id=" . $row['event_id'] . "'>Delete</a></td>" . "\n";
          echo "</tr>";
        }

      echo "</table>";
      }

  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }



  ?>




</body>
</html>
