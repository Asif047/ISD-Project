<?php
session_start(); 
$error=''; 



if (isset($_POST['submit'])) {
if (empty($_POST['UserName']) || empty($_POST['Password'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['UserName'];
$password=$_POST['Password'];

$connection = mysql_connect("localhost", "root", "");

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$db = mysql_select_db("bookshopdb", $connection);

$query = mysql_query("select * from customer where Password='$password' AND UserName='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;




header("location: Orderform.php"); 
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); 
}
}
?>