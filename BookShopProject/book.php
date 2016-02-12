<?php

require 'Controller/BookController.php';
$bookController = new BookController();

if(isset($_POST['types']))
{
   
    $bookTables = $bookController->CreateBookTables($_POST['types']);
}
else 
{
   
    $bookTables = $bookController->CreateBookTables('%');
}


$title = 'Book overview';
$content = $bookController->CreateBookDropdownList(). $bookTables;

include 'bookinfo.php';
?>
