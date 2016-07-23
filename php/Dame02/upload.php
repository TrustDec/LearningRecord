<?php 
	function upload($file,$allow=array('gif','png','jpg','jpeg')){
		# 判断$file是否为数组,如果不是,就不存在上传
		if (!is_array($file)) {
			return array(false,'当前不是上传的文件信息!');
		}
		# 文件是否上传成功
		# 定义一个错误字符串
		$errorinfo ='';
		switch ($file['error']) {
			case 1:
				$errorinfo ='文件超过服务器限制!允许上传的文件的最大值:'.ini_get('upload_max_filesize');
				break;
			case 2:
				$errorinfo ='文件超过浏览器允许大小!';
				break;
			case 3:
				$errorinfo ='文件只上传成功一部分!';
				break;
			case 4:
				$errorinfo ='没有选中要上传的文件!';
				break;
			case 6:
				$errorinfo ='找不到服务器的临时目录!';
				break;
			case 7:
				$errorinfo ='文件上传路径不可写!';
				break;
		}
		# 判断errorinfo
		if ($errorinfo) {
			# 错误信息存在
			return array(FALSE,$errorinfo);
		}
		# 3文件类型判断
		# # 获取文件后缀名
		$extension = getExtension($file['name']);
		# 3.1 判断文件后缀是否存在
		if (!$extension) {
			# 文件后缀不存在
			return array(false,'当前文件没有后缀名!');
		}
		# 3.2当前文件是否允许上传
		if (!in_array($extension,$allow)) {
			# 文件后缀不允许
			return array(false,'当前文件类型不允许上传,允许上传的类型:'.implode(',', $allow));
		}
		# 4.上传文件
		# 4.1 重名命文件:获取一个随机文件
		$filename = getRandomFilename();
		# 拼凑文件全名
		$filename .= '.'.$extension;
		# 4.2 移动文件
		if (!@move_uploaded_file($file['tmp_name'],'./file/'.$filename)) {
			# 文件移动失败
			# 将错误信息写入到错误日志
			return array(false,'文件上传失败!');
		}
		# 4.3文件上传成功
		return './file/'.$filename;
	}
	# 获取文件后缀名
	function getExtension($filename){
		# 获取文件后缀名
		if (strrpos($filename,'.')) {
			return substr($filename,strrpos($filename,'.')+1);
		}
		return false;
	}
	# 获取一个随机的名字
	function getRandomFilename(){
		# 随机文件名规则:年月日时分秒+随机字符串(6)
		$filename ='';
		# 获取年月日时分秒
		$filename.=date('YmdHis');
		#获取一个随机字符串
		$str = "abcdefghijklmnopqrstuvwxyz";
		for($i = 0;$i < 6;$i++){
			$filename.=$str[mt_rand(0,25)];
		}
		# 返回文件名
		return $filename;;
	}
?>