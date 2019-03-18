<?php
//get values pass from form login.php
$username=$_POST['user'];
$password=$_POST['pass'];
//to prevent mysqli_affected_rows
$username=stripcslashes[$username];
$uspassword=stripcslashes[$password];
$username=mysqli_real_escape_string($username);
$password=mysqli_real_escape_string($password);
//connect server and select database
mysqli_connect("localhost","root","mysql");
mysqli_select_db("login");
//query the database
$sql="insert into users values('$id','$username','$password')";
$rs=mysqli_query($con,$sql);
$result=mysqli_query("select*from users where username=$username and password=$password") or die ("failed to query database",mysql_error());
$row=mysqli_fetch_array($result);
if($row['username']==$username&&$row['password']=$password) 
{
	echo "login success!!! welcome" $row['username'];
} else {
	echo "failed to login!";
}
?>