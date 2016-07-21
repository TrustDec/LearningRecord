<?php 
	include '../header.php';
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
	$dir = '../../';		// 定义目录LearningRecord
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
# 目录操作原理
	# opendir
		# 找到对应目录
		# 将目录所有文件全部读入到内存(包含子文件下的所有文件)
		# 将目录指针指向第一个文件
	# readdir
		# 读取当前指针所指的文件的文件名
		# 将目录指针向下移动一位
echo "<hr>";
# 文件相关函数
	# file_exists:判断文件是否存在,存在返回true,不存在返回false;	
		$dir1 = './';
		$dir2 = '../';
		$dir3 = __FILE__;	# 当前文件的完整路径和文件名
		$dir4 = './test';		# 没有该文件
		$dir5 = __DIR__;	# 当前文件的完整路径(5.3new)
		$dir6 = 'demo.txt';
		var_dump(file_exists($dir1));
		var_dump(file_exists($dir2));
		var_dump(file_exists($dir3));
		var_dump(file_exists($dir4));
		var_dump(file_exists($dir5));
		var_dump(file_exists($dir6));
		echo "<hr>";
	# is_dir: 判断给定的路径是否是一个路径,是为true,假false
		var_dump(is_dir($dir1));
		var_dump(is_dir($dir2));
		var_dump(is_dir($dir3));
		var_dump(is_dir($dir4));
		var_dump(is_dir($dir5));
		var_dump(is_dir($dir6));
		echo "<hr>";
	# is_file: 判断给定的路径是否是一个文件...返回(Boolean)
		var_dump(is_file($dir1));
		var_dump(is_file($dir2));
		var_dump(is_file($dir3));
		var_dump(is_file($dir4));
		var_dump(is_file($dir5));
		var_dump(is_file($dir6));
		echo "<hr>";
	# mkdir :创建文件夹,不能创建同名文件夹(linux下:必须保证当前文件夹有php所在组有权限进行写操作
		var_dump(mkdir('new'));
		//var_dump(mkdir('文件夹.....'));
		echo "<hr>";
	# rmdir :删除文件夹
		var_dump(rmdir('new'));
	# getcwd :获取当前操作目录
		var_dump(getcwd());
	# chdir:改变当前操作目录,代表进入到目标目录
		//chdir 改变工作目录
		var_dump(@chdir($dir5));
		//指向另一个路径
		var_dump(@chdir('son'));
		var_dump(getcwd());
# 遍历所有文件将爱及子目录 遍历文件/文件夹案例-->porject01.php
	/**
	 * 	1.得到一个路径
	 * 	2.获得路径资源
	 * 	3.获取指针所指向的文件名
	 * 	4.判断当前文件是否是一个路径
	 * 		a):如果是,则进入目录,改变工作路径
	 * 		b):如果是文件直接输出
	 * 	5.关闭资源
	 */
# 递归操作	案例演示-->porject02/03.php
	/**
	 * 	自调用函数本身 
	 */
/**
 * 	opendir:打开一个目录.需要一个路径参数,返回一个资源
 * 	readdir:在资源里读取一个对应的文件当前文件指针所指向的文件,将文件指针下移一位.返回当前文件的名字或者false,可以显示的使用资源参数,也可以不提示,因为系统会向上自动寻找文件路径资源.
 * 	rewinddir:重置目录资源的指针,回到第一个文件(.文件)
 * 	closedir:释放目录资源
 * 	sacandir:浏览器目录,把所有的文件都获得,并存放到一个数组返回
 * 	
 */
?>
