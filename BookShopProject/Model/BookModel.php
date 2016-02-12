<?php

require ("Entities/BookEntity.php");


class BookModel {

    
    function GetBookTypes() {
        require 'Credentials.php';

        
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT Category FROM book") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        
        mysql_close();
        return $types;
    }

    
    function GetBookByType($type) {
        require 'Credentials.php';

         
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM book WHERE Category LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $bookArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $BookId=$row[0];
            $BookName = $row[1];
            $AuthorName = $row[2];
           
            $Price = $row[3];
            $Category = $row[4];
            
            $PublishedYear = $row[5];
            $Edition= $row[6];
            
           
            $BookImg = $row[7];
            
            $Availability= $row[8];
            

           
            $book = new BookEntity($BookId, $BookName, $AuthorName,$Category, $Price,$PublishedYear,$Edition,$BookImg,$Availability);
            array_push($bookArray, $book);
        }
        
        mysql_close();
        return $bookArray;
    }

}

?>
