<?php
	if(isset($_GET['sub'])){
		$arr=array('拳头','剪刀','布');
		$num2=rand(0, 2);
		echo "电脑出的是：".$arr[$num2];
		$num1=$_GET['num'];
		if ($num1==$num2) {
			echo "平局";
		}
	}
?>
	<form>
		请出拳：
		<select name="num" action='/PHPStudy/lianxi/5.php'>
			<option value="0">拳头</option>
			<option value="1">剪刀</option>
			<option value="2">布</option>	
		</select>
		<input name="sub" type="submit" />
	</form>