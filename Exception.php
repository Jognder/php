<?php
//Create function with an exception
function checknNum($number) {
  if($number>1) {
     throw new Exception("Value must be 1 or below");
	}
	return true;
	}
	
//trigger exception

checknNum(2);
?>