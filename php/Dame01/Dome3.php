<?php
	include '../header.php';
# 文件操作相关函数
	# copy:拷贝,会保存原文件
	# unlink:删除文件
	# rename:重名命
	var_dump(file_put_contents("d.txt","新建的txt文件"));
	//拷贝
	copy("d.txt", "son/d.txt");
	//删除
	unlink("son/d.txt");
	//重名命
	rename("d.txt", "ddd.txt");
	# filemtime :m代表modify,修改的意思,获取文件最后被修改的时间
		//获取文件最后修改的时间
		var_dump(filemtime('ddd.txt'));
	# filesize:获取文件长度
		//get文件大小
		var_dump(filesize('ddd.txt')); //18字节 int(18)
	# fileperms:获取文件的权限(主要针对linux),返回是一个八进制结果
		var_dump(fileperms("ddd.txt")); //33206:左边第一位代表读,第二位代表写权限,第三位代表执行权限
# 文件下载
	# 文件下载的两种方式
		# html的a标签
			//<a href="../a.zip"></a>
			# 缺点:
			# 1.导致服务器会自动解析相关文件(如果服务器能够识别)
			# 2.路径是文件在服务器存在的真实路径,所以导致不安全
		# php 实现下载
			//header("Content-type:application/octet-stream");//:当前PHP输出给浏览器的数据是流式文件,浏览器不要解析(下载的意思)
			// header("Content-Disposition: attachment; filename=filename");//:对文件进行伪装,文件变成一个普通的附件并进行重名命
		# php下载原理
			# 1.通过header设置告诉浏览器,接收到内容之后不要解析,应该当做附件处理
			# 2.输出对应的数据即可
			echo "<a href='porject04.php'>下载图片</a>";
		# 案例 php下载-->porject04.php	
# 函数调用计数器 案例-->porject05.php
		//计算函数被调用多少次
		# 1.穿入参数,参数使用引用传值:对外部变量的引用
		# 2.$GLOBALS和global都可以
		/**
		*	1.函数内部定义变量能够在其他被调用的函数(同一个函数)中认可
		*	2.静态变量:在函数中定义,但是在函数再次调用时,不会重新定义,而是使用第一次函数定义的变量
		* 	3.静态变量:在函数结束后不会被立即释放
		*  语法:static $变量名 = 值;
		* 	注意:
		*	1.一个静态变量只会被定义一次
		* 	2.静态变量不是存放在局部变量内存中,而是存放在静态变量区(静态变量区不允许定义重复的变量)
		*/

?>