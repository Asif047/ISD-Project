<?php

require ("Entities/BranchEntity.php");


class BranchModel {

    
    function GetBranchTypes() {
        require 'Credentials.php';

          
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT BranchName FROM BRANCH") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        
        mysql_close();
        return $types;
    }

    
    function GetBranchByName($branchName) {
        require 'Credentials.php';

          
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM BRANCH WHERE BranchName LIKE '$branchName'";
        $result = mysql_query($query) or die(mysql_error());
        $branchArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $BranchId=$row[0];
            $BranchName = $row[1];
            $Location = $row[2];
            $ContactNo = $row[3];
           
            $BranchImg = $row[4];
            

           
            $branch = new BranchEntity($BranchId, $BranchName,  $Location, $ContactNo, $BranchImg);
            array_push($branchArray, $branch);
        }
        
        mysql_close();
        return $branchArray;
    }

}

?>
