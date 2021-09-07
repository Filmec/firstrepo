<?php

$uczniowie = array ("1"=>"Max ","2"=>"Szymon ","3"=>"Kacper ", "4"=>"Łukasz ","5"=>"Kuba ","6"=>"Tomek ", "7"=>"Emil ","8"=>"Alex ","9"=>"Emil ", "10"=>"Filip ");
ksort ($uczniowie);
reset ($uczniowie);
while(list($klucz,$wartosc)=each($uczniowie)){
    echo"$klucz=$wartosc<br>";
}
//asort - alfabetycznie po wartościach
//arsort - w odwrotnej kolejności po wartościach
//ksort - według klucza 
//krsort - w odwrotnej kolejności po kluczu
?>