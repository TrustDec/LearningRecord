<?php
	include '../header.php';

	$dir="D:/wamp/www/LearningRecord/php/Dame01";
	# 获取资源
	if (is_dir($dir)) {
		# 是路径就打开
		$o = opendir($dir);
		var_dump($o);
		# 遍历文件
		while ($filename = readdir($o)) {
			# 将.和..文件夹去掉
			if ($filename =='.' || $filename == '..') {
				echo "<font color='red'>$filename</font><br>";
				continue;
			}
			# 判断当前文件是否是目录还是文件
			//$dir = $dir.'/'.$filename;
			//echo $dir.'/';
			if (is_dir($dir)) {
				# 判断路径必须先拼凑完整的路径
				# 改变工作路径
				if (is_file($filename)) {
					echo "<font color='green'>$filename</font><br>";
				}else{
					echo "<font color='red'>$filename</font><br>";
				}
				
				// var_dump($next);exit;
				//chdir($dir);
				//opendir($dir);

			}else{
				echo "<font color='yellow'>$filename</font><br>";;
			}
		}
	}
?>