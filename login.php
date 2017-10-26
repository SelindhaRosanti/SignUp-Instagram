<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$servername = "localhost";
	$dbusername ="root";
	$dbpassword ="";
	$dbname ="dblogin";
	$Email=$_POST['email'];
	$Fullname=$_POST['fullname'];
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}
if(empty($Email)){
echo"Data tidak ditemukan";
die();
}
if (empty($Fullname)){
echo"Data tidak ditemukan";
die();
}
if (empty($Username)){
echo"Data tidak ditemukan";
die();
}
if (empty($Password)){
echo"Data tidak ditemukan";
die();
}
$sql = "INSERT INTO tusers (email,fullname,username,password)
VALUES('$Email','$Fullname','$Username','$Password')";
if($conn->query($sql)=== TRUE){
echo "
<table>
<tr>
<td>Email Address</td><td>:</td><td>$Email</td>
</tr>
<tr>
<td>Your Name</td><td> :</td><td>$Fullname</td>
</tr>
<tr>
<td>Username</td><td>:</td><td>$Username</td>
</tr>
<tr>
<td>Create Password</td><td>:</td><td>$Password</td>
</tr>
</table>";
}else{
echo "ERROR : " .sql."<br>".$conn->error;
}
$conn->close();
?>
</body>
</html>