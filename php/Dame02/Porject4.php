<?php 
	include '../header.php';
	var_dump($_FILES['file']);
	//exit;
	sleep(5);
	switch ($_FILES['file']['error']) {
		case 0:
			move_uploaded_file($_FILES['file']['tmp_name'],'./file'.$FILES['file']['name']);
			echo "上传成功";
			break;
		case 1:
		case 2:
			header('Refresh:3;url=Porject4.html');
			echo "文件大小超过服务器限制";
			break;
		case 3:
			header('Refresh:3;url=Porject4.html');
			echo "文件只有部分上传成功！";
			break;
		default:
			header('Refresh:3;url=Porject4.html');
			echo "文件上传失败";
	}
?>