<?php

$chipId = $_GET["chipid"];

$servername = "localhost";
$username = "readeruser";
$password = "Password1";
$dbname = "databaseName";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT command from databaseName.sensors where id = " . $chipId;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo $row["command"];
echo  "\r\n";
   //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
echo "@update,enable=0,lastRun=1;";
}
$conn->close();

?>
