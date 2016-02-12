
<!DOCTYPE html>
<html>
<head>
<title>Insert Staff page</title>

<link rel="stylesheet" type="text/css" href="Styles/StyleSheet4.css" />
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
             
             
            
             
             
                                        <ul id="drop-nav">
                                            <li><a href="bookadmin.php">Book Zone</a>
                           <ul>
                               <li><a href="bookadmin.php">Insert Book</a></li>
                               <li><a href="DeleteBook.php">Delete Book</a></li>
                               <li><a href="UpdateBook.php">Update Book</a></li>
                            </ul>
                          </li>
                          
                          
                           <li><a href="branchadmin.php">Branch Zone</a>
                            <ul>
                                <li><a href="branchadmin.php">Insert branch</a></li>
                                <li><a href="DeleteBranch.php">Delete branch</a></li>
                                <li><a href="UpdateBranch.php">Update branch</a></li>
                            </ul>
                          </li>
                          
                          
                          <li><a href="Orders.php">Orders</a>
                            <ul>
                                <li><a href="Orders.php">Show orders</a></li>
                                <li><a href="DeleteOrder.php">Delete orders</a></li>

                            </ul>
                          </li>
                          
                          
                          
                          <li><a href="ShowCustomer.php">Customers</a>
                            <ul>
                                <li><a href="ShowCustomer.php">Show Customer Info</a></li>
                                

                            </ul>
                          </li>
                          
                          
                          
                          
                          <li><a href="ShowStaff.php">Staffs</a>
                            <ul>
                                <li><a href="ShowStaff.php">Show Staff Info</a></li>
                                
                                <li><a href="InsertStaff.php">Insert Staff Info</a></li>
                                
                               
                                 
                                 <li><a href="UpdateStaff.php">Update Staff Info</a></li>
                                 
                                 <li><a href="DeleteStaff.php">Delete Staff Info</a></li>
                                
                                

                            </ul>
                          </li>
                          
                          
                          
                        </ul>

             
             
             
            </nav>
                   
                    
                   
             
    
    
    
<div id="main">

<div id="login">
<h2>Insert Staff</h2>
<form action="InsertStaff.php" method="post">
<label>Staff Name :</label>
<input id="name" name="StaffName" placeholder="Staff name" type="text">
<label>Address :</label>
<input id="Address" name="Address" placeholder="Address" type="text">


<label>Contact Number :</label>
<input id="ContactNo" name="ContactNo" placeholder="Contact number" type="text">

<label>Branch Number :</label>
<input id="name" name="BranchNo" placeholder="Branch no" type="int">





<br><br>

<input name="submit" type="submit" value=" Insert ">
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
            
            mysql_select_db("bookshopdb",$con);
            $sql="INSERT INTO staff(StaffName,Address,ContactNo,BranchNo)
                VALUES('$_POST[StaffName]','$_POST[Address]','$_POST[ContactNo]','$_POST[BranchNo]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>