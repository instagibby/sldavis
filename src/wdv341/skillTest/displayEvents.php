<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
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
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>

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
      echo "<th>event_day</th>" . "\n";
      echo "<th>event_time</th>" . "\n";
      echo "</tr>" . "\n";

      $stmt = $conn->query("SELECT  `event_id`, `event_name`, `event_description`, `event_presenter`, DATE_FORMAT(event_day, \"%m/%d/%Y\") AS `event_day`, `event_time`  FROM `wdv341_events` ");

      while ($row = $stmt->fetch())
        {
          $languageArray[$row[0]] = $row[1];

          echo "<tr>";
          echo "<td>" . $row['event_id'] . "</td>" . "\n";
          echo "<td>" . $row['event_name'] . "</td>" . "\n";
          echo "<td>" . $row['event_description'] . "</td>" . "\n";
          echo "<td>" . $row['event_presenter'] . "</td>" . "\n";
          echo "<td>" . $row['event_day'] . "</td>" . "\n";
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

</div>
</body>
</html>
