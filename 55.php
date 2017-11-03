<!DOCTYPE html>
<html>
<body>

<?php
$number=array(1,2,3,4,5);
rsort($number);

$arrlength=count($number);
  for($x=0; $x< $arrlength ; $x++) {
     echo $number[$x];
	 echo "<br>";
	 
}
?>

</body>
</html>