<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $imie = $_GET['num'];
             $nazwisko = $_GET['nazw'];
            
$query = "Insert into test(imie, nazwisko ) values('$imie', '$nazwisko')";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }
?>

<form action="" method="get">
imie:<input type="text" name="num"><br>
Nazwisko:<input type="text" name="nazw"><br>
<input name="sub" type="submit" value="ok">
</form>
