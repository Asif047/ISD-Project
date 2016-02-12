<?php

require ("Model/CustomerModel.php");


class CustomerController {

    function CreateCustomerDropdownList() {
        $customerModel = new CustomerModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a ID: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($customerModel->GetCustomerTypes()) .
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
    
    function CreateCustomerTables($types)
    {
        $customerModel = new CustomerModel();
        $customerArray = $customerModel->GetCustomerByType($types);
        $result = "";
        
        
        foreach ($customerArray as $key => $customer) 
        {
            $result = $result .
                    "<table class = 'customerTable'>
                        <tr>
                           
                            
                            
                            <th width = '75px' >CustomerId : </th>
                            <td>$customer->CustomerId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Customer Name : </th>
                            <td>$customer->UserName</td>
                        </tr>
                        
                        <tr>
                            <th>Address : </th>
                            <td>$customer->Address</td>
                        </tr>
                        
                        <tr>
                            <th>Contact Number : </th>
                            <td>$customer->ContactNo</td>
                        </tr>
                        
                            
                       
      
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
