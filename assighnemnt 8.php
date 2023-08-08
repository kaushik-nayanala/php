<!DOCTYPE html>
<html>
<head>
	<title>Shopping Application Form</title>
</head>
<body>
	<h1>Shopping Application Form</h1>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="itemID">Item ID:</label>
		<input type="text" name="itemID" required><br><br>
		<label for="itemName">Item Name:</label>
		<input type="text" name="itemName" required><br><br>
		<label for="itemQuantity">Item Quantity:</label>
		<input type="number" name="itemQuantity" required><br><br>
		<input type="submit" name="btnInsert" value="Insert Item">
		<input type="submit" name="btnDisplay" value="Display Items">
	</form>

	<?php
	// Connecting to database
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"my_shopping_app");

	// Inserting item data into the database
	if(isset($_REQUEST['btnInsert']))
	{
		$itemID=$_REQUEST['itemID'];
		$itemName=$_REQUEST['itemName'];
		$itemQuantity=$_REQUEST['itemQuantity'];

		$str1="INSERT INTO items (itemID, itemName, itemQuantity) VALUES ('$itemID','$itemName',$itemQuantity)";

		if(mysqli_query($con,$str1))
		{
			echo "<p>Item inserted in the database.</p>";
		}
		else
		{
			echo "<p>Error: Item not inserted.</p>".mysqli_error($con);
		}
	}

	// Displaying items from the database
	if(isset($_REQUEST['btnDisplay']))
	{
		$str1="SELECT * FROM items";

		$result=mysqli_query($con,$str1);

	    echo "<table border=2 id='d1'><tr><td>Item ID</td><td>Item Name</td><td>Item Quantity</td></tr>";
	     
	     while($row=mysqli_fetch_array($result))
	     {
		   echo "<tr><td>".$row['itemID']."</td><td>".$row['itemName']."</td><td>".$row['itemQuantity']."</td></tr>";
	     }
	     echo "</table>";
	}

	mysqli_close($con);
	?>
</body>
</html>
