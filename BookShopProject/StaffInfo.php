<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet4.css" />
        
        <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css"/> 
            <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
          
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="gereric.css" rel="stylesheet" type="text/css"/>
        
        
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
            
            <div id="content_area">
                
                
                
                 

                
                
                

    <div class="div2">
       
    </div>
                <br><br>
                <?php echo $content; ?>
                
            </div>
            
           
    
           <footer>
                <font size="4" color="black">copyright@2015. All rights are reserved </font>

            </footer>
            
            
        </div>
    </body>
</html>
