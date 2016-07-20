<?php 
include 'header.php';
# 文件操作(增删改查)
	# file_get_contents:获取文件的全部内容,不但能读取本地,还可以通过http协议去访问互联网的文件
	# file_put_contents:向文件中写入内容---文件不存在会新建此文件,默认会覆盖原来的内容进行写入,第三参数用来设置是否覆盖原来的参数
		# FILE_USE_INCLUDE_PATH:表示会覆盖
		# FILE_APPEND:在后面追加数据
	file_put_contents('../Dame02/1.txt',"是的发送到反反复复");	
	echo file_get_contents('../Dame02/1.txt');
	file_put_contents('../Dame02/1.txt',"改喽");
	echo "<br>";
	echo file_get_contents('../Dame02/1.txt');
	file_put_contents('../Dame02/1.txt',"改喽122222222222",FILE_APPEND);
	echo "<br>";
	echo file_get_contents('../Dame02/1.txt');
	//echo file_get_contents('http://new.060s.com/article/2016/07/07/2186609.htm');
	echo "<br>";
	# file 把整个文件读入一个数组中,返回一个数组
	$arr = file('demo.txt');
	var_dump($arr);
?>