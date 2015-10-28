<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// =========== DEFINE THE CLASS ==========
		class Cat{
			// object properties
			public $name;
			public $age;
			public $weight;
			private $breed;

			// the object's constructor
			public function __construct($_name, $_age, $_weight){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;

				if ($this->weight >25) {
					$this->breed ="Giant";
				}
			}

			public function feedCat($_food){
				if ($_food < $this->weight/8){
					echo $this->name." needs more food than that!";
					echo "<br>";
				} else {
					echo $this->name." is fully fed!";
					echo "<br>";
				}
			}

			public function howOld(){
				echo $this->name." is ".$this->age." years old.";
				echo "<br>";
				echo $this->name." is ".$this->age." cat years old!";
				echo "<br>";	
			}

			public function catWeight(){
				echo  $this->name." is ".$this->weight." pound";
			}
		}


		$cat1 = new Cat("Little Buddy", 2, 8);
		$cat2 = new Cat("Sneaky Pete", 0, 2);
		$cat3 = new Cat("Mephisto", 300, 900);

		$cat1->howOld();
		$cat1->feedCat(6);
		$cat3->howOld();
		$cat3->catWeight();
		echo "<br>";

		echo $cat3->age;
		echo "<br>";
		echo $cat3->weight;
	?>

</body>
</html>




