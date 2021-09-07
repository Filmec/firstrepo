<?php
function fibo($n){
    if($n == 1 || $n == 2){
            return 1;
     }
else{
    return fibo($n - 1) + fibo($n - 2);
     }
    }
if(isset($_POST['show'])){
    $liczba = $_POST['liczba'];
 echo(fibo($liczba));


}
?>

<form action="" method="POST">
Liczba: <input type="text" name="liczba"><br>
      <input type="submit" name="show"><br>
</form> 