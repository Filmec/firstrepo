<?php

if(isset($_POST['show'])) {
$log = $_POST['log'];
$pass = $_POST['pass'];

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$miasto = $_POST['miasto'];

if($log=='jacek' && $pass=='owca') {
    echo "Udane logowanie";
    echo "<br>";
    echo "Imie: ".$imie."<br> Nazwisko: ".$nazwisko." <br> Miasto: ".$miasto."";
}
else{
    echo "Złe dane";
}}

?>

<form action="" method="POST">
    Login: <input type="text" name="log"><br>
    Hasło: <input type="password" name="pass"><br>
    Imię: <input type="imie" name="imie"><br>
    Nazwisko: <input type="nazwisko" name="nazwisko"><br>
    Miasto: <input type="miasto" name="miasto"><br>
    <input type="submit" name="show"><br>
</form>