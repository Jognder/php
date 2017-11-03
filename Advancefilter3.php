<!DOCTYPE html>
<html>
<body>

<?php
//Varibale to check
$str="<h1>Hello  WorldÆØÅ!</h1>";

//Remove HTML tagas and all character with ASCII value > 127
$newstr=filter_var($str,FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 echo $newstr;
 ?>
 
 </body>
 </html>
 