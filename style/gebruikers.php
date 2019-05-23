<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Gebruikers.php </title>
</head>

<body>

<a href="locaties.php">Locaties</a> <br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "repairs";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, password FROM gebruikers";
if($result = $conn->query($sql)){


   while($row = $result->fetch_array()) {
     echo $row[0]." ".$row[1]." ".$row[2]. "<br/>";
   }
 $result->close();
}

$conn->close();
?>

</body>

</html>
