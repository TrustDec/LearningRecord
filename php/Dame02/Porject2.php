<?php 
	include '../header.php';
	# 用户注册逻辑
	# isset判断变量是否存在,如果存在返回true,否则返回false
	$username = isset($_POST['user'])?$_POST['user']:'';
	$password = isset($_POST['pwd'])?$_POST['pwd']:'';
	$pwd1 = isset($_POST['pwd1'])?$_POST['pwd1']:'';
	$select = isset($_POST['select'])?$_POST['select']:'';
	# checkbox接收数据
	$hobby = $_POST['hobby'];
	var_dump($hobby);
	# 将数据变成字符串(implode:JS的split()函数,,第一个参数是数组元素之间放置的内容[可选],第二个为要转换的数据)
	$hobby = implode('--',$hobby);		//string
	var_dump($hobby);
	# 验证数据合法性,用户名,密码不为空且两次密码一致,类型 必须选择(php不相信任何数据来源)
	# 判断数据不能为空:empty,判断变量是否为空,空为true,不空为false
	if (empty($username) || empty($password) || empty($pwd1) || empty($select)) {
		# 跳转到重新注册的界面
		# header函数前面不能有任何输出,Refresh: set 跳转时间--2秒
		header('Refresh:2;url=Porject2.html');
		# 如果其中有一个为空,都应该提示数据不合法,应当重新开始
		echo "用户民,密码和用户类型不能为空!";
		# 结束当前脚本
		exit;
	}
	# 两次密码必须一致
	if ($password !== $pwd1) {
		header('Refresh:2;url=Porject2.html');
		echo "两次密码输入不一致";
		# 结束当前脚本
		exit;
	}
	# 验证数据有效性(当前数据是否已经在数据库中存在)
	# 组织SQL语句,如果当前用户在数据库中已经存在,则失败
	# $sql = "select * from where username='{$username}'";
	if ($username == 'admin') {
		header('Refresh:2;url = Porject2.html');
		echo "当前用户已近存在,请重新注册!";
		# 结束当前脚本
		exit;
		# code...
	}
	# 写入数据库
	# 将用户信息插入数据库中
	# $sql + "insert into 表 values('{$username}','{$password}','{$type}')";
	# 判断写入结果
	# 根据结果进行界面跳转
	# 提示用户注册成功
	echo "注册成功";
?>