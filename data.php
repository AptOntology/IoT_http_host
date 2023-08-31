<?php

$chipId = $_GET["chipid"];
$theCmd = $_GET["cmd"];
$theResult = $_GET["data"];

$servername = "localhost";
$username = "writeruser";
$password = "Password1";
$dbname = "databaseName";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT into databaseName.output(id,command,result) values ('" . substr($chipId,0,100) . "','" . subStr($theCmd,0,100) . "','" . subStr($theResult,0,100) . "')";

//echo $sql;
$result = $conn->query($sql);
echo $result
$conn->close();

?>
