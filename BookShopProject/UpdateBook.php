
<!DOCTYPE html>
<html>
<head>
<title>Update Book Page</title>

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
        
        
         if(isset($_POST['BookId'])&&($_POST['BookName'])){
             
           $bookId = $_POST['BookId'];
        $bookName = $_POST['BookName'];
        
        
        
        $query = "UPDATE book SET BookName = '$bookName' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['AuthorName'])){
             
           $bookId = $_POST['BookId'];
        $authorName = $_POST['AuthorName'];
        
        
        
        $query = "UPDATE book SET AuthorName = '$authorName' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['Category'])){
             
           $bookId = $_POST['BookId'];
        $category = $_POST['Category'];
        
        
        
        $query = "UPDATE book SET Category = '$category' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        
          <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['Price'])){
             
           $bookId = $_POST['BookId'];
        $price = $_POST['Price'];
        
        
        
        $query = "UPDATE book SET Price = '$price' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['PublishedYear'])){
             
           $bookId = $_POST['BookId'];
        $publishedyear = $_POST['PublishedYear'];
        
        
        
        $query = "UPDATE book SET PublishedYear = '$publishedyear' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['Edition'])){
             
           $bookId = $_POST['BookId'];
        $edition = $_POST['Edition'];
        
        
        
        $query = "UPDATE book SET Edition = '$edition' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['BookImg'])){
             
           $bookId = $_POST['BookId'];
        $bookimg = $_POST['BookImg'];
        
        
        
        $query = "UPDATE book SET BookImg = '$bookimg' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("bookshopdb")or die("Connection Failed");
        
        
         if(isset($_POST['BookId'])&&($_POST['Availability'])){
             
           $bookId = $_POST['BookId'];
        $availability = $_POST['Availability'];
        
        
        
        $query = "UPDATE book SET Availability = '$availability' WHERE BookId = '$bookId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
    
    
    
<div id="main">
    

<div id="login">
<h2>Update Book</h2>
<form action="UpdateBook.php" method="post"> Book Id:
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('bookshopdb');

$sql="SELECT BookId FROM book";
$result=  mysql_query($sql);

echo "<select  name='BookId' type='int'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['BookId']."'>".$row['BookId']."</option>";
}

echo "</select>";
?>
    
    
    
    <form method="post" name="update" action="update.php" />
    Book Name:   <input type="text" name="BookName" /> 
    Author Name:   <input type="text" name="AuthorName" /> 
    Category:   <input type="text" name="Category" /> 
    Price:   <input type="double" name="Price" /> 
    
    Published Year:   <input type="int" name="PublishedYear" /> 
    Edition:   <input type="int" name="Edition" /> 
    
    Book image:   <input type="text" name="BookImg" /> <br><br>
    
   <label>Availability :</label><br><br>
<select name="Availability" type="text">
  <option selected="selected" value=''></option>
  <option value="YES">YES</option>
  <option value="NO">NO</option>
  
</select>
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