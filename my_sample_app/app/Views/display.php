<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
</head>
<body>
	<h1>
		<?php
		#Using \n
			#echo "Hello World!\n <br>"; 
			#echo "Hello ISPSC!";
		?>

		<?php
		#Using >br> tag
			#echo "Hello World!\n"; 
		?> 
		<br>
		<font color="#FF0000">
			<?php
				#echo "Hello World!\n"; 
			?> 
		</font>

		<?php
		#Using variables
			#$sum = 5 + 6;
			#echo "The sum is ". $sum; 
		?> 
	</h1>
	<form id="form" name="form" method="POST" action="">
		<label>Number 1</label><br>
		<input id ="num1" name="num1" type="number" /><br>

		<label>Number 2</label><br>
		<input id ="num2" name="num2" type="number" /><br>

		<label>Select Operator</label><br>
		<select id="operator" name="operator">
			<option value="1">Addition</option>
			<option value="2">Subtraction</option>
			<option value="3">Multiplication</option>
			<option value="4">Division</option>
		</select><br>

		<button id="action" name="action" value="1" type="submit">Compute</button>
	</form>

	<?php
	/*
	#Using Operators
	if(isset($_POST["action"])){
		$num1=$_POST["num1"];
		$num2=$_POST["num2"];
		$operator=$_POST["operator"];

		if($operator=="1")
		{
			$answer=$num1 + $num2;
		}else if($operator=="2")
		{
			$answer=$num1 - $num2;
		}else if($operator=="3")
		{
			$answer=$num1 * $num2;
		}if($operator=="4")
		{
			$answer=$num1 / $num2;
		}

		echo "The answer is ".$answer;
	}*/
	?>

	<?php
	$str = "*";
		for ($i=0; $i<10; $i++)
		{
			echo $str ."<br>";
			$str .="*";
		}
	?>

	<?php
		$simpl_array = [];
	?>
</body>
</html>