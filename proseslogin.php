<?php
require_once("login.php");
$nim=$_POST['nim'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql="INSERT INTO login (nim,username,password) values ('$nim','$username','$password')";

if(mysqli_query($konek,$sql)){
 header("location:newData.html");
}else{
	echo"Error:".$sql."<br>".mysqli_error($konek);
}
mysqli_close($konek);

?>
