<?php

$owoce = array ("d"=>"mango ","a"=>"papaja ","b"=>"banan ", "c"=>"aronia ");
krsort ($owoce);
reset ($owoce);
while(list($klucz,$wartosc)=each($owoce)){
    echo"$klucz=$wartosc";
}
//asort - alfabetycznie po wartościach
//arsort - w odwrotnej kolejności po wartościach
//ksort - według klucza 
//krsort - w odwrotnej kolejności po kluczu
?>


