<?php

class OrdersEntity
{
    public $OrderId ;
    public $CustomerName;
    public $Address ;
    public $ContactNo ;
   
    public $BookName ;
   
    
    public $BookName2 ;
  
    public $BookName3 ;

   
    
    public $OrderDate;
    
   
   
    
    function __construct($OrderId,$CustomerName, $Address, $ContactNo, $BookName , $BookName2 , $BookName3 ,$OrderDate)
    {
        $this->OrderId = $OrderId;
        $this->CustomerName = $CustomerName;
        $this->Address = $Address;
        $this->ContactNo = $ContactNo;
      
        $this->BookName= $BookName;
       
        
         
         $this->BookName2= $BookName2;
        
         
         $this->BookName3= $BookName3;
        
         
      
        
         $this->OrderDate = $OrderDate;
         
        
     
    
    }

}

?>
