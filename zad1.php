<?php
$n = $_GET['war'];
for($i=0; $i<$n; $i++) {
$los = rand (55,68);
echo ($los);
echo "<br>";

}
?>

<form action="" method="GET">
    <input type="text" name="war">
    <input type="submit" value="Show">
</from>