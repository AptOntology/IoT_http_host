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
echo "<table style='width:100%'><tbody>";
echo "<tr><td><b>chipId</b></td><td><b>Setting</b></td></tr>";

   while($row = $result->fetch_assoc()) {
echo "<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["command"];
echo "</td></tr>";
  }
 echo "</tbody></table>";

}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from output ORDER BY datetime desc, id desc LIMIT 50";

$result = $conn->query($sql);

echo "<h1>Result</h1>";
echo "<table style='width:100%'><tbody>";
echo "<tr><td><b>Time</b></td><td><b>id</b></td><td><b>Command</b></td><td><b>Result</b></td></tr>";

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
echo "<tr><td>";
echo $row["datetime"];
echo "</td><td>";
echo $row["id"];
echo "</td><td>";
echo $row["command"];
echo "</td><td>";
echo $row["result"];
echo "</td></tr>";
}
echo "</tbody></table>";

}

?>
