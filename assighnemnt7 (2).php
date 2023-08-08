<?php
	// Numeric array
	$nums = array(1, 2, 3, 4, 5);
	echo "Numeric array:<br>";
	foreach($nums as $num) {
		echo "$num<br>";
	}

	// Associative array
	$assoc = array("name" => "kaushik", "age" => 20, "city" => "Rajahmundry");
	echo "Associative array:<br>";
	foreach($assoc as $key => $value) {
		echo "$key: $value<br>";
	}

	// Multidimensional array
	$multi = array(
		array("name" => "Kaushik", "age" => 20, "city" => "Rajahmundry"),
		array("name" => "Brijesh", "age" => 22, "city" => "Osmanabad"),
		array("name" => "Tanay", "age" => 21, "city" => "Pune")
	);
	echo "Multidimensional array:<br>";
	foreach($multi as $person) {
		echo "Name: " . $person["name"] . ", Age: " . $person["age"] . ", City: " . $person["city"] . "<br>";
	}
?>
