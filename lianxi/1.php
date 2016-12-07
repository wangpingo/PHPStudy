<?php
	echo "=====使用for循环打印的99乘法表=====";
	echo "</br>";
	for ($i=1; $i <10; $i++) { 
		for ($j=1; $j <$i+1 ; $j++) { 
			echo $i."*".$j."=".$i*$j.' ';
		}
		echo "</br>";
	}
	echo "=====使用while循环打印的99乘法表=====";
	echo "</br>";
	$a=1;
	while ($a<10) {
		$b=1;
		while ($b <$a+1) {
			echo $a."*".$b."=".$a*$b.' ';
			$b++;
		}
		$a++;
		echo "</br>";
	}
	echo "=====使用do,while循环打印的99乘法表=====";
	echo "</br>";
	$a=1;
	do{
		$b=1;
		do{
			echo $a."*".$b."=".$a*$b.' ';
			$b++;
		}while($b<$a+1);
		echo "</br>";
		$a++;
	}while($a<10);
?>