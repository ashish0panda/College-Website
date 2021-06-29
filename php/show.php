<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "college";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	$query="select * from student";
	$result=mysqli_query($conn,$query);
?>
<!doctype html>
<head></head>
<body>
<table width="100%">
<tr>
<td>NAME</td>
<td>EMAIL</td>
<td>CONTACT</td>
<td>COMMENT</td>
<td>COURSE</td>
</tr>
 <?php
 while($row=mysqli_fetch_assoc($result))
 {
 ?>
<tr>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['number'] ?></td>
<td><?php echo $row['comment'] ?></td>
<td><?php echo $row['course'] ?></td>
</tr>
<?php
 }
 ?>
</table>
</body>
</html>