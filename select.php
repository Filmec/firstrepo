<?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'uczniowie';
 


 $conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uczniowie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
$conn->close();
?>