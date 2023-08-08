<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"student_details");

if(isset($_REQUEST['btnInsert']))
{
	$rollno=$_REQUEST['rollno'];
	$name=$_REQUEST['name'];
	$dept=$_REQUEST['dept'];
	$year=$_REQUEST['year'];
	$grades=$_REQUEST['grades'];

	$str1="insert into students values($rollno,'$name','$dept',$year,'$grades')";

    if(mysqli_query($con,$str1))
	{
		echo "Row inserted successfully!";
	}
	else
	{
		echo "Error: ".mysqli_error($con);
	}
}

if(isset($_REQUEST['btnSearch']))
{
	$year1=$_REQUEST['year'];

	$str1="select * from students where year=$year1";

	$result=mysqli_query($con,$str1);

    echo "<table border=2><tr><td>RollNo</td><td>Name</td><td>Department</td><td>Passing Year</td><td>Class Grades</td></tr>";
     
    while($row=mysqli_fetch_array($result))
    {
	    echo "<tr><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$row['dept']."</td><td>".$row['year']."</td><td>".$row['grades']."</td></tr>";
    }
    echo "</table>";
}

mysqli_close($con);
?>
