<?php
include('CustomerLogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: Orderform.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="Styles/Stylesheet3.css" />

 <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
</head>
<body>
    
    <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                   <li><a href="index.php">Home</a></li>
                    <li><a href="book.php">Book info</a></li>
                   <li><a href="Branch.php">Branches</a></li>
                    <li><a href="Customer.php">Order</a></li>
                    
                    <li><a href="Register.php">Register</a></li>
                    
                    <li><a href="Customer.php">Log in</a></li>
                   
                    <li><a href="aboutus.php">About Us</a></li>
                    
                    <!-- <li><a href="admin.php">AdminPanel </a></li>  -->
                   
                    
                   
                </ul>
            </nav>
    
    
    
<div id="main">

<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="UserName" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="Password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
        
        <footer>
            <font size="5" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
</body>
</html>