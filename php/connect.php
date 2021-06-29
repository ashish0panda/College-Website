<?php
$name1 = $_POST['name'];
$email1 = $_POST['email'];
$number1 = $_POST['phone'];
$comment1 = $_POST['commt'];
$course = $_POST['course'];
if (!empty($name1) || !empty($email1) || !empty($comment1) || !empty($course)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "college";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into student(name, email, number, comment, course) values('$name1', '$email1', '$number1', '$comment1', '$course')";
	 mysqli_query($conn,$INSERT);
     echo "New record inserted sucessfully";
     } 
     $conn->close();
    }
	else {
 echo "All field are required";
 die();
}
?>
