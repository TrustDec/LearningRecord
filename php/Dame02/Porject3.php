<?php 
	#
	$username = 'mark';
	$password = md5('1234');
	$type = 1;
	$hobby = "1|3|6";
	$hobby = explode('|',$hobby);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="Porject2.php" method="post">
		<label>用户名:</label><input type="text" name="user" id="">
		<label>密码:</label><input type="password" name="pwd" id="">
		<label>确认密码:</label><input type="password" name="pwd1" id="">
		<select name="select" >
			<option value="">请选择身份</option>
			<option value="1" <?php echo ($type == 1) ? 'selected = "selected"': '';?>>教师</option>
			<option value="2" <?php echo ($type == 2) ? 'selected = "selected"': '';?>>学生</option>
		</select>
		<br/>
		<label>爱好</label>
		<input type="checkbox" name="hobby[]" value="1" <?php 
			if (in_array('1',$hobby)) {
				echo "checked='checked'";
			}
		?>>篮球&nbsp;&nbsp;
		<input type="checkbox" name="hobby[]" value="2" <?php 
			if (in_array('2',$hobby)) {
				echo "checked='checked'";
			}
		?>>足球&nbsp;&nbsp;
		<input type="checkbox" name="hobby[]" value="3" <?php 
			if (in_array('3',$hobby)) {
				echo "checked='checked'";
			}
		?>>羽毛球&nbsp;&nbsp;
		<input type="checkbox" name="hobby[]" value="4" <?php 
			if (in_array('4',$hobby)) {
				echo "checked='checked'";
			}
		?>>乒乓球&nbsp;&nbsp;
		<input type="checkbox" name="hobby[]" value="5" <?php 
			if (in_array('5',$hobby)) {
				echo "checked='checked'";
			}
		?>>网球&nbsp;&nbsp;
		<input type="checkbox" name="hobby[]" value="6" checked="checked" <?php 
			if (in_array('6',$hobby)) {
				echo "checked='checked'";
			}
		?>>网球&nbsp;&nbsp;
		<br/>
		<input type="submit" value="提交">
	</form>
</body>
</html>