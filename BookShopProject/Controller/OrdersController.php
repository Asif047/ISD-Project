<?php

require ("Model/OrdersModel.php");


class OrdersController {

    function CreateOrdersDropdownList() {
        $ordersModel = new OrdersModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a ID: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($ordersModel->GetOrdersTypes()) .
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
    
    function CreateOrdersTables($types)
    {
        $ordersModel = new OrdersModel();
        $ordersArray = $ordersModel->GetOrdersByType($types);
        $result = "";
        
        
        foreach ($ordersArray as $key => $orders) 
        {
            $result = $result .
                    "<table class = 'ordersTable'>
                        <tr>
                           
                            
                            
                            <th width = '75px' >OrderId : </th>
                            <td>$orders->OrderId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Customer Name : </th>
                            <td>$orders->CustomerName</td>
                        </tr>
                        
                        <tr>
                            <th>Address : </th>
                            <td>$orders->Address</td>
                        </tr>
                        
                        <tr>
                            <th>Contact Number : </th>
                            <td>$orders->ContactNo</td>
                        </tr>
                        
                            
                        <tr>
                            <th>Book Name : </th>
                            <td>$orders->BookName</td>
                        </tr>
                        


                        
                        
                        


                         <tr>
                            <th>Book Name2 : </th>
                            <td>$orders->BookName2</td>
                        </tr>
                        

                         
                        


                        <tr>
                            <th>Book Name3 : </th>
                            <td>$orders->BookName3</td>
                        </tr>
                        

                          

                        
                        

                        
                           <tr>
                            <th>Order Date : </th>
                            <td>$orders->OrderDate</td>
                        </tr>
                       

                        
                        
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
