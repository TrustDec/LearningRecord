<?php 
	include '../header.php';
	# 递归函数
	$Array = range(1,100);
	function getValue1(){
		# get 位置
		foreach ($Arrar as $key => $value) {
			if ($value == $num) {
				# ok
				return $key + 1;
			}
		}

		return false;
	}

	#二叉树 查找
	function getValue2($num,$Arrar){
		$length =count($Arrar);
		$end = $length;
		$start =0;
		$middle =floor(($start + $end) / 2);
		while ($start < $end - 1) {
			if ($Arrar[$middle] ==$num) {
				return ($middle+1);
			}elseif ($Arrar[$middle] < $num) {
				$start  = $middle;
				$middle = floor(($start +$end)/2);
			}else{
				$end = $middle;
				$middle =floor(($start + $end)/2);
			}
		}
		return false;
	}
	var_dump(getValue2(150,$Array));
	function getValue3($num,$Arrar){

	}
?>