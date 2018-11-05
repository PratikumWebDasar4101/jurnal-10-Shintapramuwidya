<?php
require_once("login.php");
$username=$_POST['username'];
$password=$_POST['password'];


$sql="INSERT INTO login (username,password) values ('$username','$password')";

if(mysqli_query($konek,$sql)){
 header("location:newData.html");
}else{
	echo"Error:".$sql."<br>".mysqli_error($konek);
}
mysqli_close($konek);

?>
