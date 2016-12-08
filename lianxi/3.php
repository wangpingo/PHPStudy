<?php
	    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $ysf=$_POST['ysf'];
        $sum=0;
        switch($ysf){
            case '+':
                $sum=$num1+$num2;
                break;
            case '-':
                $sum=$num1-$num2;
                break;
            case '*':
                $sum=$num1*$num2;
                break;
            case '/':
                $sum=$num1/$num2;
                break;
            default:
                echo "没有这个云算符";
                break;
        }
    }
?>
<html>
	<head>
		<style>
			#container{
				margin:100px auto;
				width:467px;
				height: 200px;
				background:#ccc;
			}
			h1{
				text-align: center;
			}
			table{
				margin-bottom:0;
				width: 467px;
				height: 100px;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<h1>计算器</h1>	
			<form id="menu" method="post" action="/PHPStudy/lianxi/3.php">
			<table border="10px">
						<tr>
						<td><input name="num1" type="text" value=<?php if($num1){echo $num1;}?>></td>
						<td>
							<select name="ysf">
								<option value="+"  <?php if($ysf=='+'){echo 'selected';}?>>+</option>
								<option value="-"  <?php if($ysf=='-'){echo 'selected';}?>>-</option>
								<option value="*"  <?php if($ysf=='*'){echo 'selected';}?>>*</option>
								<option value="/"  <?php if($ysf=='/'){echo 'selected';}?>>/</option>
							</select>
							</td>
						<td><input name="num2" type="text"/ value=<?php if($num2){echo $num2;} ?>></td>
						<td><input type="submit" value="计算"/></td>
						</tr>
				<tr><td><?php echo $sum;?></td></tr>
			</table>
		</form>
		</div>
	</body>
</html>