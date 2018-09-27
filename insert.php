<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password,$dbname);

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$sql="INSERT INTO students (name,email,contact) VALUES ('$name','$email','$contact') ";
$result =mysqli_query($conn, $sql);
if($result){
	echo "Data inserted successfully";
}
else{
	echo "something wrong";
}