<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));
               
                $values = implode(',' , array_values($params));
                

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                // echo $query_string;
                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public  function addToCart($customerID, $productID, $quantity){
        if (isset($customerID) && isset($productID) && isset($productID)){
            $params = array(
                "customerID" => $customerID,
                "productID" => $productID,
                "quantity" => $quantity
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // delete cart item using cart item id
    public function deleteCart($productID = null, $table = 'cart'){
        if($productID != null){
            $customerID = $_SESSION["customerID"];
            $result = $this->db->con->query("DELETE FROM {$table} WHERE productID={$productID} AND customerID={$customerID}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    
    }

    // get item_id of shopping cart list
    public function getCartId($cartArray = null, $key = "productID"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

}