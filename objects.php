<!DOCTYPE html>
<html>
<head>
	<title>Classes and Objects</title>
</head>
<body>
	<?php
		class even{
			public function isEven($number){
				if ($number % 2 == 0){
					echo "even";
				}else{
					echo "odd";
				}
				return false;
			}
		}
	?>

	<?php 
		$value = new even();

		$value->isEven(7);
	?>

	<h1>Listing the even numbers using a listEven class</h1>

	<?php
		class listEven{
			public function isEven($num){
				$i = 2;
				$count = 0;

				while($i <= $num){
					if($i % 2 == 0){
						echo $i . "&nbsp;&nbsp;&nbsp;&nbsp;";
						$count++;

						if($count % 10 == 0){
							echo "<br>";
						}
					}
					$i++;
				}
				return false;
			}
		}
	?>

	<?php 
		$result = new listEven();
		$result->isEven(200);
	?>

	<h1>Bank App</h1>
	<?php 
	class Bank{
		private $cash = 0;

		public function deposit($amount){
			$this->cash += $amount;
		}

		public function withdraw($amount){
			if($this->cash >= 0 && $amount <= $this->cash && $amount >= 0){
				$this->cash -= $amount;

				echo $amount . " was withdrawn <br>";
			}else{
				die("Insufficient fund");
			}
		}

		public function getBalance(){
			return $this->cash;
		}

	}
	?>
	<?php 
		$money = new Bank();

		echo $money->getBalance() . "<br>";
		$money->deposit(1000);
		echo $money->getBalance() . "<br>";

		$money->withdraw(500);
		echo $money->getBalance() . "<br>";
	?>
</body>
</html>