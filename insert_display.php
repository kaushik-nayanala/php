<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"phpmyadmin");

//$result=mysql_query($str1);

if(isset($_REQUEST['btnDisplay']))
{
	$str1="select * from stud";

	$result=mysqli_query($con,$str1);

    echo "<table border=2 id='d1'><tr><td>RollNo</td><td>Name</td><td>Subject</td></tr>";
     
     while($row=mysqli_fetch_array($result))
     {
	//echo "<br>" .$row['rollno'].$row['name'].$row['marks'];
	
	//to display  fetched data in form of table 

	   echo "<tr><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$row['subject']."</td></tr>";
     }
     echo "</table>";
}
if(isset($_REQUEST['btnInsert']))
{
	$rollno=$_REQUEST['rollno'];
	$name=$_REQUEST['name'];
	$subject=$_REQUEST['subject'];

	//mysqli_select_db($con,"isdb");

	$str1="insert into stud values($rollno,'$name','$subject')";

    if(mysqli_query($con,$str1))
	{
	echo "row inserted in table";
	}
	else
	{
	echo "row not inserted".mysqli_error($con);
	}
}
mysqli_close($con);
?>