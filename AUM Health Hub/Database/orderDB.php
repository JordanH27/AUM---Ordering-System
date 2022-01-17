<?php

// php Order class
class Order
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

     public function addToOrders($customerID = null, $orderCost = null, $table = 'orders'){
        if($customerID != null && $orderCost != null){
            $result = $this->db->con->query("INSERT INTO orders(customerID, orderCost, orderStatus) VALUES ({$customerID}, '{$orderCost}', 'pending')");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // insert into orders_products table
    public  function insertIntoOP($params = null, $table = "orders_products"){
        if ($this->db->con != null){
            if ($params != null){
                // get table columns
                $columns = implode(',', array_keys($params));
                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                echo $query_string;
                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get productID and orderID and insert into orders table
    public  function addToOP($productID, $orderID, $quantity){
        if (isset($productID) && isset($orderID) && isset($quantity)){
            $params = array(
                "productID" => $productID,
                "orderID" => $orderID,
                "quantity" => $quantity

            );

            // insert data into orders
            $result = $this->insertIntoOP($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // delete order using orderID
    public function cancelOrder($orderID = null){
        
        if($orderID != null){
            $result = $this->db->con->query("UPDATE orders SET orderStatus = 'cancelled' WHERE orderID={$orderID}");
            print_r($result);
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;

        }
    }

    public function delivered($orderID = null){
        
        if($orderID != null){
            $result = $this->db->con->query("UPDATE orders SET orderStatus = 'delivered' WHERE orderID={$orderID}");
            print_r($result);
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;

        }
    }

    public function pending($orderID = null){
        
        if($orderID != null){
            $result = $this->db->con->query("UPDATE orders SET orderStatus = 'pending' WHERE orderID={$orderID}");
            print_r($result);
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;

        }
    }

    public function getOrderDetails(){
        $result = $this->db->con->query("SELECT c.* , p.* FROM orders c,orders_products p WHERE c.orderID=p.orderID");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getData($table = 'customer'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }


}