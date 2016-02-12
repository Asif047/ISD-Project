<?php

require 'Controller/OrdersController.php';
$ordersController = new OrdersController();

if(isset($_POST['types']))
{
    
    $ordersTables = $ordersController->CreateOrdersTables($_POST['types']);
}
else 
{
    
    $ordersTables = $ordersController->CreateOrdersTables('%');
}


$title = 'Order overview';
$content = $ordersController->CreateOrdersDropdownList(). $ordersTables;

include 'ordersinfo.php';
?>
