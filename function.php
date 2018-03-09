<!DOCTYPE html>
<html>
<head>
	<title>Functions Intro</title>
	<style type="text/css">
		th, td{
			padding: 0.4em;
		}
		td{
			text-align: center;
		}
		table{
			width: 20em; border: 1px solid #000;
		}
	</style>
</head>
<body>
	<?php 
		function say_hello(){
			echo "Hello, World";
		}
		say_hello();
	?>
	<br>
	<?php 
		function say_Hi(){
			return "hi!";
		}
		echo say_Hi();
	?>
	<br>

	<h1>Anonymous functions</h1>
	<p>The create_function() enables you create anonymous function</p>
	<?php 
		$mode = "*";

		$process = create_function('$a, $b', "return \$a $mode \$b;");
		echo $process(4, 5);
	?>

	<br>
	<h1>Recursive Function</h1>

	<p>A recursive function is a function that calls itself</p>

	<?php 
	echo "<h2>Recursive function for fibonacci series </h2>";
		function fibonacci($num){
			if($num <= 1) {
				return $num;
			}else{
				return fibonacci($num - 2) + fibonacci($num - 1);
			}
		}
	?>
	<table>
		<thead>
			<th>Numbers</th>
			<th>Fibonacci series</th>
		</thead>
		
		<?php 

		for($i = 0; $i <= 20; $i++){
		?>
		<tr>
		<td><?php echo $i; ?></td> &nbsp;&nbsp;
		<td><?php echo fibonacci($i); ?> </td>
		</tr>
	<?php
		}
	?>
	</table>

	<br>
	<?php
		echo "<h2> Recursive function for Factorial of numbers </h2>";

		function factorial($num){
			if($num <= 1){
				return 1;
			}else{
				return $num * factorial($num - 1);
			}
		}
	?>

	<table cellspacing="0">
		<thead>
			<th>Numbers</th>
			<th>Factorlal</th>
		</thead>
	

	<?php
		for($i = 0; $i <= 10; $i++){
	?>
		<tr <?php if($i % 2 == 1) echo "style=\"background-color: blue; color: #fff;\""?>> 
			<td><?php echo $i; ?></td>
			<td> <?php echo factorial($i); ?> </td>
		</tr>

		<?php 		
		}
		?>
	</table>

	<h1>Exercise</h1>

	<?php 
		function definition($num){
			$result = "<dl>
			<dt>" . <?php echo {$num} ?> ."</dt>";

			return $result;
		}

		$value = array(1, 2, 3, 4);

		print_r(definition($value));
	?>
	
	
</body>
</html>