<!DOCTYPE html>
<html>
    <head>
        
        <title>Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css"/> 
            <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
          
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="gereric.css" rel="stylesheet" type="text/css"/>
        
        
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
                    
                    <li><a href="admin.php">Admin Panel</a></li>
                    
                   <!-- <li><a href="OrderBook.php">Order book</a></li>
                    <!-- <li><a href="admin.php">AdminPanel </a></li> -->
                   
                </ul>
            </nav>
            
            
            <div>
                      <marquee><font size="5" color="#0066FF">Welcome to Our Book Shop</font></marquee>
            </div>
            
            
            <div id="content_area">
                
                
                
                 <h1>Introduction</h1>
<p >
    Our Book shop <b>  Modern Book's  </b>   has brought different categories of books for you. 
    Customer can buy their favourite books from our book shop at a very effort able price.
    They can also order book from our web site<br><br>
    
    <a id="a1"  href="https://www.facebook.com"><img src="BookImg/facebook.PNG"> 
       Click here to see our facebook page</a>
</p>
                
                
                <div id="sliderFrame">
        <div id="slider">
            
            
		
	
            <a href="http://www.facebook.com" target="_blank">  
                <img src="BookImg/book1.jpg" alt="Welcome to Modern Book's" class="imgcenter" />
            </a>
			
        <img src="BookImg/book2.jpg" alt="" class="imgcenter" />
        <img src="BookImg/book3.jpg" alt="" class="imgcenter" />
        <img src="BookImg/book4.jpg" alt="" class="imgcenter" />
       
      
       
	   </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>

    <div class="div2">
       
    </div>
                <br><br>
                <?php echo $content; ?>
                
            </div>
            
            <h1 id="P_center">Location & Contact info</h1>
<p id="P_center" >
    
    Modern Book's <br>
    1, Mirpur Road(Islamia market), Nilkhet, Dhaka<br>
    Contact no. : 01677190809,<br>01673900900
</p>
    
           <footer>
                <font size="4" color="black">copyright@2015. All rights are reserved </font>

            </footer>
            
            
        </div>
    </body>
</html>
