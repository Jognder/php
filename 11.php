<!DOCTYPE html>
<html>
<body>

<?php
$x=5;
$y=10;

 function myTest() {
     global $x,$y;
	 $y=$x+$y;
}

myTest();  //run function
echo $y;  //ouput the new value for varible $y
?>

</body>
</html>