<?php

require ("Model/BookModel.php");


class BookController {

    function CreateBookDropdownList() {
        $bookModel = new BookModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a Category: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($bookModel->GetBookTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateBookTables($types)
    {
        $bookModel = new BookModel();
        $bookArray = $bookModel->GetBookByType($types);
        $result = "";
        
       
        foreach ($bookArray as $key => $book) 
        {
            $result = $result .
                    "<table class = 'bookTable'>
                        <tr>
                            <th rowspan='8' width = '200px' ><img runat = 'server' src = '$book->BookImg' /></th>
                            
                            
                            <th width = '75px' >BookId : </th>
                            <td>$book->BookId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Book Name : </th>
                            <td>$book->BookName</td>
                        </tr>
                        
                        <tr>
                            <th>Author name : </th>
                            <td>$book->AuthorName</td>
                        </tr>
                        

                        <tr>
                            <th>Category : </th>
                            <td>$book->Category</td>
                        </tr>
                        

                        <tr>
                            <th>Price : </th>
                            <td>$book->Price</td>
                        </tr>
                        

                        
                        

                         <tr>
                            <th>Published Year : </th>
                            <td>$book->PublishedYear</td>
                        </tr>
                        

                         <tr>
                            <th>Edition : </th>
                            <td>$book->Edition</td>
                        </tr>
                        

                         <tr>
                            <th>Availability : </th>
                            <td>$book->Availability</td>
                        </tr>
                        
                    
                        
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
