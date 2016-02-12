
<!DOCTYPE html>
<html>
<head>
<title>Insert Book page</title>

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
<h2>Insert Book</h2>
<form action="bookadmin.php" method="post">
<label>Book Name :</label>
<input id="name" name="BookName" placeholder="Book name" type="text">
<label>Author Name :</label>
<input id="password" name="AuthorName" placeholder="Author name" type="text">


<label>Category :</label>
<input id="password" name="Category" placeholder="Category" type="text">

<label>Price :</label>
<input id="name" name="Price" placeholder="Price" type="double">


<label>Published Year :</label>
<input id="name" name="PublishedYear" placeholder="PublishedYear" type="int">

<label>Edition :</label>
<input id="name" name="Edition" placeholder="Edition" type="int">


<label>BookImg :</label>
<input id="password" name="BookImg" placeholder="image address" type="text"><br><br>


<label>Availability :</label><br><br>
<select name="Availability" type="text">
  <option selected="selected" value=''></option>
  <option value="YES">YES</option>
  <option value="NO">NO</option>
  
</select>
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
            $sql="INSERT INTO book(BookName,AuthorName,Category,Price,PublishedYear,Edition,BookImg,Availability)
                VALUES('$_POST[BookName]','$_POST[AuthorName]','$_POST[Category]','$_POST[Price]','$_POST[PublishedYear]','$_POST[Edition]','$_POST[BookImg]','$_POST[Availability]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>