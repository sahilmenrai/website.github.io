<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "from");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$fathername = mysqli_real_escape_string($link, $_REQUEST['fathername']);
	$mothername = mysqli_real_escape_string($link, $_REQUEST['mothername']);
	$date = mysqli_real_escape_string($link, $_REQUEST['date']);
	$email = mysqli_real_escape_string($link, $_REQUEST['email']);
	$radio = mysqli_real_escape_string($link, $_REQUEST['radio']);
	$class = mysqli_real_escape_string($link, $_REQUEST['class']);
	$course = mysqli_real_escape_string($link, $_REQUEST['course']);
	$city = mysqli_real_escape_string($link, $_REQUEST['city']);
	$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
	$address = mysqli_real_escape_string($link, $_REQUEST['address']);
	
	$sql="INSERT INTO form1 (name,father,mother,dob,email,gender,class,course,city,contact,address) VALUES ('$name','$fathername','$mothername','$date','$email','$radio','$class','$course','$city','$contact','$address')";
	
// Attempt insert query execution

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 header("refresh:0; url=index.php");
// Close connection
//mysqli_close($link);
?>
</body>
</html>