<html>
    <head>
</head>
<body>
    <h1>Kostka</h1>
  <form action='' method="GET" >  
<input type="number" name="ilosc" > 
<input type="number" name="sciany" > 
<input type="number" name="gracze" > 
<input type="submit" value="wykonaj" name="wykonaj">
</form>

</body>
</html>

<?php 
error_reporting(0);

if(isset($_GET['wykonaj'])){
    $w=array();
    $z=$_GET['ilosc'];
    $s=$_GET['sciany'];
    $g=$_GET['gracze'];
            for($i=0;$i<$g;$i++){
echo('gracz '.$i. ' ');
                                      for($a=0;$a<$z;$a++){
                                            
                                                $c=rand(1,$s);
                                                
                                            
                                                    echo ($c.' ');
                                                
                                                
                                               $w[$i]+=$c;
                                            } echo('<br>');


                                
}
for($o=0; $o<$g; $o++){
echo($w[$o]." ");

}
}

?>


