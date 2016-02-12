<?php

require 'Controller/StaffController.php';
$staffController = new StaffController();

if(isset($_POST['types']))
{
    
    $staffTables = $staffController->CreateStaffTables($_POST['types']);
}
else 
{
    
    $staffTables = $staffController->CreatestaffTables('%');
}


$title = 'Staff overview';
$content = $staffController->CreatestaffDropdownList(). $staffTables;

include 'StaffInfo.php';
?>
