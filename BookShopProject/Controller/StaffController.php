<?php

require ("Model/StaffModel.php");


class StaffController {

    function CreateStaffDropdownList() {
        $staffModel = new StaffModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a ID: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($staffModel->GetStaffTypes()) .
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
    
    function CreateStaffTables($types)
    {
        $staffModel = new StaffModel();
        $staffArray = $staffModel->GetStaffByType($types);
        $result = "";
        
        
        foreach ($staffArray as $key => $staff) 
        {
            $result = $result .
                    "<table class = 'customerTable'>
                        <tr>
                           
                            
                            
                            <th width = '75px' >StaffId : </th>
                            <td>$staff->StaffId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Staff Name : </th>
                            <td>$staff->StaffName</td>
                        </tr>
                        
                        <tr>
                            <th>Address : </th>
                            <td>$staff->Address</td>
                        </tr>
                        
                        <tr>
                            <th>Contact Number : </th>
                            <td>$staff->ContactNo</td>
                        </tr>
                        

                             <tr>
                            <th>Branch Number : </th>
                            <td>$staff->BranchNo</td>
                        </tr>
                        
                            
                       
      
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
