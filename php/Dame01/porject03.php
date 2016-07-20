<?php 
	include 'header.php';
	function getNumSpli($num){
		if ($num ==1||$num == 0) {
			return $num;
		}else{
			echo $num."<br>";
			$num=floor($num/2);
			return getNumSpli($num);
		}
	}
	var_dump(getNumSpli(10));
?>