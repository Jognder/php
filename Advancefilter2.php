<!DOCTYPE html>
<html>
<body>

<?php
//Variable to check
$url="https://www.w3schools.com";

//Validate url
  if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) == false) {
  echo("$url is a valid URL");
} else {
   echo("$url is not a valid URL");
   
}

?>

</body>
</html>