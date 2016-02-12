<?php

class StaffEntity
{
    public $StaffId ;
    public $StaffName;
    public $Address ;
    public $ContactNo ;
    public $BranchNo ;
   
   
    
   
    function __construct($StaffId,$StaffName, $Address, $ContactNo,$BranchNo)
    {
        $this->StaffId = $StaffId;
        $this->StaffName = $StaffName;
        $this->Address = $Address;
        $this->ContactNo = $ContactNo;
        $this->BranchNo = $BranchNo;
      
        
        
         
      
        
      
         
        
     
    
    }

}

?>
