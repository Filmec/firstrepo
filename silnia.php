<?php

function silnia($n){
    if ($n ==1){
        return 1;

    } 
else{
    return $n* silnia($n-1);

}
}

if(isset($_POST['Show'])){
    $liczba = $_POST['liczba'];
echo(silnia($liczba));

}
?>

<form action="" method="POST">
Liczba: <input type="text" name="liczba"><br>
    <input type="submit" name="Show"><br>
</form>