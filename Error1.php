<?php
if(!file_exists("welcome.txt")) {
   die("file not found");
} else {
   $file=fopen("welcome.txt", "r");
 }
 ?>