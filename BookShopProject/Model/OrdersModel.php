<?php

require ("Entities/OrdersEntity.php");


class OrdersModel {

   
    function GetOrdersTypes() {
        require 'Credentials.php';

       
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT OrderId FROM orders") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

       
        mysql_close();
        return $types;
    }

   
    function GetOrdersByType($OrderId) {
        require 'Credentials.php';

          
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM orders where OrderId LIKE '$OrderId'";
        $result = mysql_query($query) or die(mysql_error());
        $ordersArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $OrderId=$row[0];
            $CustomerName = $row[1];
            $Address = $row[2];
            $ContactNo = $row[3];
            
            $BookName = $row[4];
            
           
            
             $BookName2 = $row[5];
         
            
             $BookName3 = $row[6];
           
            
            
            
            $OrderDate = $row[7];
            
            
            
            

            
            $orders = new OrdersEntity($OrderId, $CustomerName, $Address, $ContactNo,$BookName,$BookName2,$BookName3,$OrderDate);
            array_push($ordersArray, $orders);
        }
       
        mysql_close();
        return $ordersArray;
    }

}

?>
