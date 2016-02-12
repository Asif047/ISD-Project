<?php

class BranchEntity
{
    public $BranchId;
    public $BranchName;
    public $Location;
    public $ContactNo;
   
    public $FoodImg;
  
    
    function __construct($BranchId, $BranchName, $Location, $ContactNo,  $BranchImg) {
        $this->BranchId = $BranchId;
        $this->BranchName = $BranchName;
        $this->Location = $Location;
        $this->ContactNo = $ContactNo;
      
        $this->BranchImg = $BranchImg;
    
    }

}

?>
