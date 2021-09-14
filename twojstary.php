<style>
    td {
        border: 3px solid #000;
        background: greenyellow;
        color: #000000;
    }
</style>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uczniowie";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

echo "<table>";
echo "<tr>";
echo "<td>";
echo "ID:";
echo "</td>";
    echo "<td>";
        echo "Imie:";
    echo "</td>";
    echo "<td>";
        echo "Nazwisko:";
    echo "</td>";
echo "</tr>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";

            echo "<td>";
                echo $row["id"];
            echo "</td>";
 
            echo "<td>";
                echo $row["imie"];
            echo "</td>";
 
            echo "<td>";
                echo $row["nazwisko"];
            echo "</td>";
 
        echo "</tr>";
    }
    } else {
        echo "0 results";
    }
    echo "</table>";


    if(isset($_GET['subb'])) {
        $idosoby = $_GET['idosoby'];
        $imieosoby = $_GET['imieosoby'];
        $nazwiskoosoby = $_GET['nazwiskoosoby'];
        $query = "INSERT INTO test(id, imie, nazwisko) values('$idosoby', '$imieosoby', '$nazwiskoosoby')";
        $run =mysqli_query($conn,$query) or die(mysqli_error());


    }



    
    if(isset($_GET['sub']))
		 {
             $imie = $_GET['imie'];          
$query = "delete from test where  id = '$imie'";
$run =mysqli_query($conn,$query) or die(mysqli_error());


         }

         ?>
<form action="" method="get">
id:<input type="text" name="imie"><br>

<input name="sub" type="submit" value="ok">
</form>
<form action="" method="get">
    Dodaj nowa osobe: <br>
    ID: <input type="number" name="idosoby"><br>
    Imie: <input type="text" name="imieosoby"><br>
    Nazwisko:  <input type="text" name="nazwiskoosoby"><br>
    <input name="subb" type="submit" value="ok">
</form>
