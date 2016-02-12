<?php

require 'Controller/BranchController.php';
$branchController = new BranchController();

if(isset($_POST['types']))
{
    
    $branchTables = $branchController->CreateBranchTables($_POST['types']);
}
else 
{
   
    $branchTables = $branchController->CreateBranchTables('%');
}


$title = 'Branch overview';
$content = $branchController->CreateBranchDropdownList(). $branchTables;

include 'Branchinfo.php';
?>
