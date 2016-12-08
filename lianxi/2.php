<?php
	echo "=====使用for循环打印的99乘法表=====";
	echo "<table border='1px'>";
	for ($i=1; $i <10; $i++) {
		echo "<tr>"; 
		for ($j=1; $j <$i+1 ; $j++) { 
			echo "<td>".$i."*".$j."=".$i*$j.'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "=====使用for循环打印的99乘法表=====";
	echo "<table border='1px'>";
	for ($i=9; $i >0; $i--) {
		echo "<tr>"; 
		for ($j=1; $j <$i+1 ; $j++) { 
			echo "<td>".$i."*".$j."=".$i*$j.'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "</table>";
	echo "=====使用for循环打印的99乘法表=====";
	echo "<table border='1px'>";
	for ($i=9; $i >0; $i--) {
		echo "<tr>"; 
		for ($k=9; $k>$i ; $k--) { 
			echo "<td></td>";
		}
		for ($j=1; $j <$i+1 ; $j++) { 
			echo "<td>".$i."*".$j."=".$i*$j.'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "=====使用for循环打印的99乘法表=====";
	echo "<table border='1px'>";
	for ($i=1; $i <10; $i++) {
		echo "<tr>";
		for ($k=9; $k >$i ; $k--) { 
			echo "<td></td>";
		} 
		for ($j=1; $j <$i+1 ; $j++) { 
			echo "<td>".$i."*".$j."=".$i*$j.'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
?>