<?php
	//数组 索引数组 关联数组
	//关系型数据库，非关系型数据库
	//[] [] [] []  不写下表从零开始，写下表从上一个开始
	//关联数组 ==>
	$user=array(
		'id'=>1,
		'age'=>19
	);
	echo $user['id'];
	$user=array(
		array(1,'zhangsan','melo','19'),
		array(2,'lilinlin','melo','19')
	);
	//遍历数组 for foreach  while-each-list
	//foreach (变量名(数组名)  as    键名 => 键值) {};
	//三位数组
	$info=array(
		'user'=>array(
			array('1',"zhangsan",19,"male")
		),
		'score'=>array(
			array(1,1,1,1,)
		),
		'connect'=>array(
			array(2,2,2,2)
		)
	);
	foreach ($info as $tablename => $table) {
		echo "<table width='500' align='center' border='1'> ";
		
		echo "</table>";
		
	};
	
?>
		
<?php
	//each
	each();
	next();
	prev();
	end();
	while ($a =each($user)) {
			
	}
?>