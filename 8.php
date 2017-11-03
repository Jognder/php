<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
    $x=5;//local scope
	echo "<p>Varible x inside function is : $x</p>";
	
	}
myTest();

//using x outside the function will generate an error
echo "<p>Varible x outside is: $x</p>";
?>

</body>
</html>