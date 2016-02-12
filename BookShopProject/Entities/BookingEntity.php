<?php

class BookingEntity
{
    public $BookingId;
    public $CustomerName;
    public $ContactNo;
    public $Email;
   
    public $PersonNumber;
    public $BookingDate;
    public $TimeBand;
  
    
    function __construct($BookingId,$CustomerName, $ContactNo, $Email, $PersonNumber,$BookingDate,$TimeBand)
    {
        $this->BookingId = $BookingId;
        $this->CustomerName = $CustomerName;
        $this->ContactNo = $ContactNo;
        $this->Email = $Email;
      
        $this->PersonNumber = $PersonNumber;
        
        $this->BookingDate = $BookingDate;
        $this->TimeBand = $TimeBand;
    
    }

}

?>
