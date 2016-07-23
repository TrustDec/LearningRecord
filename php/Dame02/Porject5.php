<?php 
	include_once '../header.php';
	include_once 'upload.php';
	// var_dump($_FILES);
	// exit;
	if (empty($_FILES)) {
		die('没有上传文件');
	}

	$res = upload($_FILES['file']);

	if (is_array($res)) {

		exit($res[1]);

	}else{
		echo "文件上传成功,文件路径为:".$res;
	}
?>