
<!DOCTYPE html>
<html>
<head>
<title>Order book page</title>
<link rel="stylesheet" type="text/css" href="Styles/Stylesheet3.css" />

 <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
</head>
<body>
    
    <div id="wrapper">
            <div id="banner">             
            </div>
            
           
         <div id="profile">

<b id="logout"><a href="logout.php">Log Out</a></b>
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
<h2>Order Book</h2>
<form action="Orderform.php" method="post">
<label>Customer Name :</label>
<input id="name" name="CustomerName" placeholder="Customer name" type="text">
<label>Address :</label>
<input id="password" name="Address" placeholder="Address" type="text">

<label>Contact No :</label>
<input id="name" name="ContactNo" placeholder="Contact Number" type="text">

<br><br>

<label>Book Name :</label><br>



<?php
mysql_connect('localhost','root','');

mysql_select_db('bookshopdb');

$sql="SELECT BookName FROM book WHERE Availability = 'YES'";
$result=  mysql_query($sql);

echo "<select  name='BookName' type='text'>   <option value = ' ' ></option>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['BookName']."'>".$row['BookName']."</option>";
}

echo "</select>";
?><br><br>








<label>Book Name2 :</label><br>



<?php
mysql_connect('localhost','root','');

mysql_select_db('bookshopdb');

$sql="SELECT BookName FROM book WHERE Availability = 'YES'";
$result=  mysql_query($sql);

echo "<select  name='BookName2' type='text'>   <option value = ' ' ></option>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['BookName']."'>".$row['BookName']."</option>";
}

echo "</select>";
?><br><br>








<label>Book Name3 :</label><br>



<?php
mysql_connect('localhost','root','');

mysql_select_db('bookshopdb');

$sql="SELECT BookName FROM book WHERE Availability = 'YES'";
$result=  mysql_query($sql);

echo "<select  name='BookName3' type='text'>   <option value = ' ' ></option>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['BookName']."'>".$row['BookName']."</option>";
}

echo "</select>";
?><br><br>




       
<br><br><label>N.B:Sir you can't order more than 3 books at a time</label>  <br><br> 
                          
                      
   <label>OrderDate :</label>
<input id="name" name="OrderDate" placeholder="Order date" type="date">  



                      
                      





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
            print 'alert("The order has been taken successfully")'; 
            print '</script>';
            
            
            mysql_select_db("bookshopdb",$con);
            $sql="INSERT INTO orders(CustomerName,Address,ContactNo,BookName,BookName2,BookName3,OrderDate)
                VALUES('$_POST[CustomerName]','$_POST[Address]','$_POST[ContactNo]','$_POST[BookName]','$_POST[BookName2]','$_POST[BookName3]','$_POST[OrderDate]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        
        
        
        
        
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>