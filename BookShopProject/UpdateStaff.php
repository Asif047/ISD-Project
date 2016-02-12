
<!DOCTYPE html>
<html>
<head>
<title>Update Staff Page</title>

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
                   
                    
                   
  
        
         
        
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['StaffId'])&&($_POST['StaffName'])){
             
           $staffId = $_POST['StaffId'];
        $staffName = $_POST['StaffName'];
        
        
        
        $query = "UPDATE staff SET StaffName = '$staffName' WHERE StaffId = '$staffId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['StaffId'])&&($_POST['Address'])){
             
           $staffId = $_POST['StaffId'];
        $address = $_POST['Address'];
        
        
        
        $query = "UPDATE staff SET Address = '$address' WHERE StaffId = '$staffId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['StaffId'])&&($_POST['ContactNo'])){
             
           $staffId = $_POST['StaffId'];
        $contactNo = $_POST['ContactNo'];
        
        
        
        $query = "UPDATE staff SET ContactNo = '$contactNo' WHERE StaffId = '$staffId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        
          <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['StaffId'])&&($_POST['BranchNo'])){
             
           $staffId = $_POST['StaffId'];
        $branchNo= $_POST['BranchNo'];
        
        
        
        $query = "UPDATE staff SET BranchNo = '$branchNo' WHERE StaffId = '$staffId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
       
        
        
        
        
       
        
         
    
    
<div id="main">
    

<div id="login">
<h2>Update Staff</h2>
<form action="UpdateStaff.php" method="post"> Staff Id:
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('bookshopdb');

$sql="SELECT StaffId FROM staff";
$result=  mysql_query($sql);

echo "<select  name='StaffId' type='int'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['StaffId']."'>".$row['StaffId']."</option>";
}

echo "</select>";
?>
    
    
    
    <form method="post" name="update" action="update.php" />
    Staff Name:   <input type="text" name="StaffName" /> 
    Address:   <input type="text" name="Address" /> 
    Contact Number:   <input type="text" name="ContactNo" /> 
    Branch Number:   <input type="int" name="BranchNo" /> 
    
    <br><br>
    <input type="submit" name="Submit" value="update" />
    </form> 
    
    
    
</form> 



</div>
</div>
        
        
        
      
        
        
        
       
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>