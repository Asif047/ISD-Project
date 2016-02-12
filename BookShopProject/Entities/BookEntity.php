<?php

class BookEntity
{
    public $BookId;
    public $BookName;
    public $AuthorName;
    public $Price;
    public $Category; 
    public $PublishedYear;
    public $Edition;
    public $BookImg;
    
    public $Availability;
  
    
    function __construct($BookId, $BookName, $AuthorName, $Price,$Category,$PublishedYear,$Edition,$BookImg,$Availability) {
        $this->BookId = $BookId;
        $this->BookName = $BookName;
        $this->AuthorName = $AuthorName;
        $this->Price = $Price;
        
        $this->Category = $Category;
        $this->PublishedYear = $PublishedYear;
        $this->Edition = $Edition;
      
        $this->BookImg = $BookImg;
        
        $this->Availability = $Availability;
    
    }

}

?>
