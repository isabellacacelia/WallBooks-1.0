<?php

//$conecta = mysql_connect("mywallbooks.cwhvgsv4s9ry.us-west-2.rds.amazonaws.com", "wallroot", "wall123!#") or print (mysql_error()); 
//print "Conexão OK!"; 
//mysql_close($conecta); 
function conecta(){
 $conecta = mysql_connect("mywallbooks.cwhvgsv4s9ry.us-west-2.rds.amazonaws.com", "wallroot", "wall123!#") or print (mysql_error());
mysql_select_db("wallbooks", $conecta) or print(mysql_error());

return $conecta;
}

function desconecta ($conecta){
mysql_close($conecta);
}
?>