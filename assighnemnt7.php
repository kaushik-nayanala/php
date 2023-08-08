<?php
	if(isset($_POST['submit'])) {
		$num = $_POST['num'];
		echo "<h2>Table of $num:</h2>";
		for($i=1; $i<=10; $i++) {
			echo "$num x $i = " . $num*$i . "<br>";
		}
	}
	else {
?>
	<form method="post">
		<label>Enter a number:</label>
		<input type="number" name="num" required><br><br>
		<input type="submit" name="submit" value="Print Table">
	</form>
<?php
	}
?>
