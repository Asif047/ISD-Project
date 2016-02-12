<?php

require 'Controller/CustomerController.php';
$customerController = new CustomerController();

if(isset($_POST['types']))
{
    
    $customerTables = $customerController->CreateCustomerTables($_POST['types']);
}
else 
{
    
    $customerTables = $customerController->CreatecustomerTables('%');
}


$title = 'Customer overview';
$content = $customerController->CreatecustomerDropdownList(). $customerTables;

include 'CustomerInfo.php';
?>
