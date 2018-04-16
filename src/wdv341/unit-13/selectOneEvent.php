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


  try {

        echo "<table>" . "\n";
        echo "<tr>" . "\n";
        echo "<th>event_id</th>" . "\n";
        echo "<th>event_name</th>" . "\n";
        echo "<th>event_description</th>" . "\n";
        echo "<th>event_presenter</th>" . "\n";
        echo "<th>event_date</th>" . "\n";
        echo "<th>event_time</th>" . "\n";
        echo "</tr>" . "\n";


        $stmt = $conn->query("SELECT * FROM `341_event` WHERE event_name = 'Spring Break' ");
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
