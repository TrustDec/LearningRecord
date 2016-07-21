<?php 
include '../header.php';
# 文件操作(增删改查)
#php4之后
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
#php4之前
	#  fopen:打开一个文件,返回一个资源
		# Mode[r,r+,w,w+,a,a+]
	$f = fopen('demo.txt','r');
	var_dump($f);
	# fgetc:c代表charcater,一次获取一个字符,指针下移一位
		//获取文件资源
		var_dump(fgetc($f));	//?
		var_dump(fgetc($f));	//?
	# fgetc:s代表string,一次获取一行(要么获取指定长度,要么获取一行)
		var_dump(fgets($f,2));//2代表获取1个字符
		var_dump(strlen(fgets($f,1024)));
	# fread: 读取指定长度数据
	var_dump(fgetc($f));
	//获取字符串
	var_dump(fgets($f,2));
	var_dump(strlen(fgets($f,1024)));
	//读取数据
	var_dump(fread($f, 1024));
	# fputs:就是fwrite的替身
	# fwrite :往文件里写入内容
	# 写内容的时候,会覆盖原来位置的内容,内容会被重写
		//写入内容
		var_dump(fwrite($f, 'hello world'));
	#fclose :关闭文件资源
		fclose($f);
	# fseek :重置指针位置,需要用户自己指定位置
		fseek($f, 0);
		fwrite($f, "<?php   \r\n?>");
	# fopen中w与w+的区别测试(手册)
		# w:写入方式打开,将文件指针指向文件头并将文件大小截为零,如果文件不存在则尝试创建
			/**
			*	1.写入内容(指针在最后面)
			*	2.重置指针fseek
			*	3.读取指针fgetc,fgets,fread
			*/
		# w+ :读写方式打开,将文件指针指向文件头并将文件大小截为零,如果文件不存在则尝试创建

?>