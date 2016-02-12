
<!DOCTYPE html>
<html>
<head>
<title>Customer register page</title>
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
<h2>Register form</h2>
<form action="Register.php" method="post">
<label>User Name :</label>
<input id="name" name="UserName" placeholder="User name" type="text">

<label>Password :</label>
<input id="name" name="Password" placeholder="********" type="password">

<label>Address :</label>
<input id="password" name="Address" placeholder="Address" type="text">

<label>Contact No :</label>
<input id="name" name="ContactNo" placeholder="Contact Number" type="text">

<br><br>


<br><br>

<input name="submit" type="submit" value=" Submit ">
<span><?php  ?></span>
</form>
</div>
</div>
        
        
        <?php
        
        
        
        if(isset($_POST['submit']))
        {
            $con=  mysql_connect("localhost","root","");
            
            if(!$con)
            {
                die("can not connect".mysql_error());
            }
                
            print '<script type="text/javascript">'; 
            print 'alert("Your information have been taken successfully")'; 
            print '</script>';
            
            
            mysql_select_db("bookshopdb",$con);
            $sql="INSERT INTO customer(UserName,Password,Address,ContactNo)
                VALUES('$_POST[UserName]','$_POST[Password]','$_POST[Address]','$_POST[ContactNo]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        
        
        
        
        
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>