<?php

require ("Entities/CustomerEntity.php");


class CustomerModel {

   
    function GetCustomerTypes() {
        require 'Credentials.php';

       
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT CustomerId FROM customer") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

       
        mysql_close();
        return $types;
    }

   
    function GetCustomerByType($CustomerId) {
        require 'Credentials.php';

          
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM customer where CustomerId LIKE '$CustomerId'";
        $result = mysql_query($query) or die(mysql_error());
        $customerArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $CustomerId=$row[0];
            $UserName = $row[1];
            $Address = $row[3];
            $ContactNo = $row[4];
            
            
            
            
            $customer = new CustomerEntity($CustomerId, $UserName, $Address, $ContactNo);
            array_push($customerArray, $customer);
        }
       
        mysql_close();
        return $customerArray;
    }

}

?>
