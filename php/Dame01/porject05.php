<?php
	include '../header.php';
	# 函数计数器
	# 定义一个全局计数器
	# $count = 0;
	# 定义数组
	$arr =range(1, 2000);
	/*
	*	从数组中获取元素值
	*	@param1 int $num,要查找的目标值
	*	@param2 array $arr,要查找的数组
	* 	@param3 int $start,要找的起始位置
	*	@param4 int $end,查找的结束位置
	*	@return mixed,找到返回位置,没找到返回false
	*/
	function getValue($num,$arr,$start=0,$end =100){
		# 计数器自增
		# $GLOBALS['count']++;
		# 定义一个静态变量
		static $counter = 0;
		# 自增变量
		++$counter;
		echo $counter.",";
		# 采用二分法查找
		$middle = floor(($end + $start) / 2);
		# 判断
		if ($arr[$middle] == $num) {
			# 已经找到,递归的出口
			return $middle+1;
		}elseif ($arr[$middle] < $num) {
			# 要查找的元素在数组的后半段
			$start = $middle + 1;
			# 边界值
			if ($start >= $end) {
				# 没有找到,但是已经超出边界值,递归出口
				return false;
			}
			# 调用自己去查找:递归点
			return getValue($num,$arr,$start,$end);
		}else{
			# 要查找的元素在数组前半段
			$end =$middle - 1;
			if ($end < 0) return false;
			//调用自己:递归点
			return getValue($num,$arr,$start,$end);
		}
		//都没有找到
		return false;
	}
	# 调用函数
	var_dump(getValue(1,$arr,0,count($arr)));
?>