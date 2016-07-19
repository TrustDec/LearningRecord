<?php 
# 文件目录操作	(文件/文件夹的增删改查)
# 定义一个路径
	$dir = './';	# 当前目录
	$o=opendir($dir);	# 打开目录	
	var_dump($o);		# 打开路径,得到路径里的所有资源
# 读取文件,从路径资源中一个一个读取
	var_dump(readdir($o));		# .当前文件夹
	var_dump(readdir());		#..上级目录
	var_dump(readdir());		# demo.txt
# 目录相关函数
	rewinddir($o);			# 重置指针
	var_dump(readdir($o));		# . 读取
	closedir($o);			# 释放目录资源
	$files=scandir($dir);		# 浏览目录
	var_dump($files);		
# 遍历目录
	$dir = '../../';		// 定义目录
	$o = opendir($dir);	// 获取资源
	$count = 0;		// 计数器
	while($filename = readdir($o)){
	/**
	 * 	1.执行readdir($o);
	 * 	2.把执行结果赋值给$filename
	 * 	3.while判断条件:将$filename输出
	 */
		echo $filename,'<br>';
		++$count;	//计数
	}



/**
 * 	opendir:打开一个目录.需要一个路径参数,返回一个资源
 * 	readdir:在资源里读取一个对应的文件当前文件指针所指向的文件,将文件指针下移一位.返回当前文件的名字或者false,可以显示的使用资源参数,也可以不提示,因为系统会向上自动寻找文件路径资源.
 * 	rewinddir:重置目录资源的指针,回到第一个文件(.文件)
 * 	closedir:释放目录资源
 * 	sacandir:浏览器目录,把所有的文件都获得,并存放到一个数组返回
 * 	
 */
?>
