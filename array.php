<!DOCTYPE html>
<html>
<head>
	<title>Arrays Intro</title>
</head>
<body>
	<?php 
		$array1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		echo "<pre>";
		print_r($array1);
		echo "</pre>";
	?>

	<br>
	<?php 
		echo "<pre>";
		print_r(array_slice($array1, 1, 6, true));
		echo "</pre>";
	?>
	<br>
	<?php 
		$array2 = array("name" => "gospel", "dept" => "Computer science", "school" => "FUTO");
		echo '<h2> $array2: </h2> <pre>';
		print_r($array2);
		echo '</pre>';
	?>

	<br>
	<?php 
		//This additional boolean parameter enables you store the array output format in a variable

		$array3 = array("Mathematics" => "A", "English" => "B", "Physics" => "A", "Biology" => "A");
		$print_r_stored_in_variable = print_r($array3, true);
		echo "<pre>" . $print_r_stored_in_variable . "</pre>";

		//$num = current($array3);

		while($num = current($array3)){
			echo $num . "<br>";
			next($array3);
		}

		/* Other functions that help iterate through the array include 
		1.	current()	- displays the current element in the array
		2.	key()	- displays the key value of the pointed element
		3.	prev()
		4.	next()
		5.	reset()
		6.	end()
		However, a problem arises because a boolean value of false is returned by the function if the value is not found
		It gives rise to the a problem that if the array actually contains a "false" as its value you can't differentiate 
		its value from the return statement of the function.

		Moreover, a better function is used known as each()- This returns a four element array that contains
		1.	key (in number) e.g. 0
		2.	key(as a string) e.g. "key"
		3.	value (in number) e.g. 1
		4.	value (as a string) e.g. "value".

		*/
	?>
	<h1>Using the each function to iterate through an array of elements</h1>
	<dl>
		<?php 
		/*iterating through the array using the each function */

		$array4 = array("Name" => "Gospel Isaac", "Hobby" => "Coding, Reading, playing tennis, teaching", "languages" =>"JAVA");
		while($num = each($array4)){
			echo "<dt>{$num[0]}</dt>";
			echo "<dd>{$num[1]}</dd>";
		}
		
		?>
	</dl>

	<h1>Using the each function to iterate through an array of elements</h1>
	<dl>
		<?php 
		/*iterating through the array using the each function */

		$array4 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		while($num = each($array4)){
			echo "<dt>" . $num["key"] . "</dt>";
			echo "<dd>" . $num["value"] . "</dd>";
		}
		
		?>
	</dl>
	
	<h1>Using the foreach function to iterate through an array</h1>
	
		<?php 
			$array5= array(2, 4, 6, 8, 10, 12, 14);
			$sum = 0;
			foreach($array5 as $val){
				echo $val . "<br>";
				$sum += $val;

			}
			echo "The sum of the elements in the array is: " . $sum;
		?>
		<br>

	<dl>
		<?php 
			$array6 = array("author" => "Gospel Isaac", "Book" => "Anger a compelling force", "Cause" =>"Hatred");

			foreach($array6 as $key => $value){
				echo "<dt>{$key}</dt>";
				echo "<dd>{$value}</dd>";
			}
		?>
	</dl>

	<h1>Changing the value in an array using the foreach function either by value or by reference</h1>

	<?php
		echo "<h2>Changing by value</h2>";
		$array7 = array("author" => "Gospel Isaac", "Book" => "Anger a compelling force", "Cause" =>"Hatred");
		foreach($array7 as $key => $value){
			if($key == "Book"){
				$value = "honour my word";
			}
			echo $value . "<br>";
		}
	?>

	<?php 
		echo "<h2>Changing by refernce </h2>";
		$array8 = array("author" => "Gospel Isaac", "Book" => "Anger a compelling force", "Cause" =>"Hatred");

		foreach ($array7 as $key => &$value) {
			if($value == "Hatred"){
				$value = "sin";
			}
			echo $value . "<br>";
		}
		unset($value); //This deletes the reference to the array element. it is important to do this to avoid bugs in  your code
		echo "<pre>";
		print_r($array7);
		echo "</pre>";
	?>

	<h1>Multi-dimensional Array</h1>
	<?php 
		$array8 = array(
			array(
				"title" => "Things fall apart",
				"author" => "Chinua Achebe",
				"pubYear" => "1859"
			), 
			array(
				"title" => "Anger a compelling force",
				"author" => "Bro. Emma Okorie",
				"pubYear" => "2012"
			),
			array(
				"title" => "The Fallen man",
				"author" => "Kennedy HenShaw",
				"pubYear" => "2014"
			)
		);

		echo "<pre>";
		print_r($array8); 
		echo "</pre>";

		$arrayIndex = 0;
		foreach($array8 as $val){
			$arrayIndex++;

			echo "<h2> Item{$arrayIndex}</h2>";

			echo "<dl>";
			foreach($val as $key => $value){
				echo "<dt>{$key}</dt>";
				echo "<dd>{$value}</dd>";
			}
			echo "</dl>";
		}
	?>
	<h1>Playing around with multi-dimensional arrays</h1>
	<?php 
	$sum = 0;
		$numbers = array(
			array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
			array(2, 4, 6, 8, 10),
			array(1, 3, 5, 7, 9)
		);

		foreach($numbers as $val){
			foreach($val as $key => $value){
				$sum += $value;
			}
		}

		echo "<p>The sum of the  numbers in the array is: {$sum}</p>";
	?>
	<h1>Sorting an array</h1>
	<?php 
		echo "<h3> Indexed Array </h3>";

		$array9 = array(5, 9, 4, 6, 2, 7, 0, 3, 5);
		sort($array9);

		echo "<pre>";
		print_r($array9);
		echo "</pre>";

		/*To sort multiple arrays at the same time use array_multisort(array1, array2, array3, ....);
		  For associative arrays use asort() and arsort()
		  To sort by keys use ksort() and krsort()
		*/
	?>
	
	<h1> Converting an array to a list of variables </h1>
	<?php 
		$array10 = array("Genius", "Gospel", "Isaac", "Okwuchukwu");
		list($nickName, $firstName, $lastName, $otherName) = $array10;
	?>

	<?php 
			echo $nickName ."<br>";
			echo $firstName . "<br>";
			echo $lastName . "<br>";
			echo $otherName . "<br>";
	?>

	<h1>Using the list() function to hold values in variables when an array is iterated</h1>
	<dl>
	<?php 
		$array11 = array("title" => "PHP: HyperText Preprocessor", "author" => "GIGO", "pubYear" => "1895");
		while(list($key, $value) = each($array11)){
			echo "<dt>{$key}</dt>";
			echo "<dd>{$value}</dd>";
		}
	?>
	</dl>
	
	
	

</body>
</html>