<?php

//use to fetch product data
class productDB
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'products'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table= 'products'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE productID={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function deleteProduct($productID = null, $table = 'products'){
        if($productID != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE productID={$productID}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function changeStock($productID = null, $productStock = null){
        
        if($productID != null && $productStock != null){
            if ($productStock == 1){
                $result = $this->db->con->query("UPDATE products SET productStock = 0 WHERE productID={$productID}");
                print_r($result);
                if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
                }
            }else if($productStock == 0){
                $result = $this->db->con->query("UPDATE products SET productStock = 1 WHERE productID={$productID}");
                print_r($result);
                if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
                }
            }
            

            return $result;

        }
    }

    public function addProduct($productPrice = null, $productName = null, $productStock = null, $supplierID = null, $table = 'products'){
        if($productPrice != null && $productName != null && $productStock != null && $supplierID != null){
            $result = $this->db->con->query("INSERT INTO products(productPrice, productName, productStock, supplierID) VALUES ({$productPrice}, '{$productName}', '1', {$supplierID})");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function addCustomer($customerName = null, $customerEmail = null, $customerPassword = null, $contact = null, $table = 'customer'){
        if($customerName != null && $customerEmail != null && $customerPassword != null && $contact != null){
$result = $this->db->con->query("INSERT INTO customer(customerName, customerEmail, customerPassword, customerContact, customerType) VALUES ('{$customerName}', '{$customerEmail}', '{$customerPassword}', '{$contact}', '0')");

print_r($result);

if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


}