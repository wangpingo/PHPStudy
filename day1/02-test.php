<?php
	//var_dump(),echo只能输出标量类型,print_r()
	//类型转换 string->int (intval)(floatval) int->string
	//settype
	//string->array array->string
	//计算字符窜的长度strlen
	//$arr=Array();
	//count->array
	//四个标量类型:int float string bool
	//两个符合类型 array object
	//resources:数据库    null
	//eval 把一个字符串变成对象(js)
	//serialize(php) 
	//$_server->
	if(isset($_GET['sub'])){
		$year=$_GET['year'];
		echo $year;
	};
?>
<form action="02-test.php" method="get">
	year:<input type="text" name="year"/>
	<input type="submit" value="提交" name="sub" />
</form>