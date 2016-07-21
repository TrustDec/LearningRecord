<?php
	header("Content-type:application/octet-stream");
	header("Content-Disposition: attachment; filename=1.jpg");
	//输出数据
	echo file_get_contents('1.jpg');
?>