<!DOCTYPE html>
<html>
<body>

<?php
$int= 100;

if(!filter_var($int, FILTER_VALIDATE_INT)== false) {
    echo("Integer is valide");
} else {

    echo("Integer is not valid");
}
?>

</body>
</html>