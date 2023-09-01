<?php

$servername = "localhost";
$username = "readeruser";
$password = "Password1";
$dbname = "databaseName";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from sensors order by id";

$result = $conn->query($sql);

echo "<h1>Command</h1>";
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
   echo "<p>";
   echo $row["id"];
   echo " | ";
   echo $row["command"];
   echo "</p>";
  }
}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from output ORDER BY datetime desc, id desc LIMIT 50";

$result = $conn->query($sql);

echo "<h1>Result</h1>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   echo "<p>";
   echo $row["datetime"];
   echo " | ";
   echo $row["id"];
   echo " | ";
   echo $row["command"];
   echo " | ";
   echo $row["result"];
   echo "</p>";
  }
}

?>
