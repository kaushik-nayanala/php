<?php
$my_array = array(
    array("John", "Doe", "25"),
    array("Jane", "Smith", "30"),
    array("Bob", "Johnson", "40")
);

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    // Get the input values
    $index = $_POST['index'];
    $column = $_POST['column'];
    $value = $_POST['value'];

    // Update the value in the array
    $my_array[$index][$column] = $value;
}

// Print the array values in a table
echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th></tr>";
foreach($my_array as $row) {
    echo "<tr>";
    foreach($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Print the input fields for inserting and updating values
echo "<form method='POST'>";
echo "<h2>Insert or Update Values:</h2>";
echo "Index: <input type='text' name='index'><br>";
echo "Column: <input type='text' name='column'><br>";
echo "Value: <input type='text' name='value'><br>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
?>
