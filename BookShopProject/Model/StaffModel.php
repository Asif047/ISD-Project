<?php

require ("Entities/StaffEntity.php");


class StaffModel {

   
    function GetStaffTypes() {
        require 'Credentials.php';

       
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT StaffId FROM staff") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

       
        mysql_close();
        return $types;
    }

   
    function GetStaffByType($StaffId) {
        require 'Credentials.php';

          
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM staff where StaffId LIKE '$StaffId'";
        $result = mysql_query($query) or die(mysql_error());
        $staffArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $StaffId=$row[0];
            $StaffName = $row[1];
            $Address = $row[2];
            $ContactNo = $row[3];
            
            $BranchNo = $row[4];
            
            
            
            
            $staff = new StaffEntity($StaffId, $StaffName, $Address, $ContactNo,$BranchNo);
            array_push($staffArray, $staff);
        }
       
        mysql_close();
        return $staffArray;
    }

}

?>
