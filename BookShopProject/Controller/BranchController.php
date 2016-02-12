<?php

require ("Model/BranchModel.php");


class BranchController {

    function CreateBranchDropdownList() {
        $branchModel = new BranchModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a Location: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($branchModel->GetBranchTypes()) .
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
    
    function CreateBranchTables($types)
    {
        $branchModel = new BranchModel();
        $branchArray = $branchModel->GetBranchByName($types);
        $result = "";
        
       
        foreach ($branchArray as $key => $branch) 
        {
            $result = $result .
                    "<table class = 'branchTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$branch->BranchImg' /></th>
                            
                            
                            <th width = '75px' >BranchId : </th>
                            <td>$branch->BranchId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Name : </th>
                            <td>$branch->BranchName</td>
                        </tr>
                        
                        <tr>
                            <th>Location : </th>
                            <td>$branch->Location</td>
                        </tr>
                        
                        <tr>
                            <th>ContactNo: </th>
                            <td>$branch->ContactNo</td>
                        </tr>
                        
                    
                        
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
