<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//Echo session varibales that were  set on pervious page
echo "Favorite color is" . $_SESSION["favcolor"]. ".<br>";
echo "favorite animal is " .$_SESSION["favanimal"]. ".";
?>

</body>
</html>