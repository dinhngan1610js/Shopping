<?php

// for Cart.php
class Cart
{
    public $db =null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table in db
    public function insertIntoCart($params = null, $table = 'cart')
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // "insert into cart(userID) value(0)"
                // get table columns
                $columns = implode(',', array_keys($params));
                print_r($columns);
                $values = implode(',', array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get userID and itemID and insert into cart table
    public function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "userID"=>$userid,
                "itemID"=>$itemid
            );

            //insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // reload page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    //get itemID in cart list - duplicate item
    public function getCartId($cartArray = null, $key = "itemID"){
        if ($cartArray != null){
            $cartID = array_map(function ($value) use ($key){
                return $value[$key];
            }, $cartArray);
            return $cartID;
        }
    }

    // delete cart item using itemID
    public function deleteCart($itemID = null, $table = 'cart')
    {
        if ($itemID != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE itemID = {$itemID}");
            if ($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // sum total of cart
    public function getSum($arr)
    {
        if (isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
    }

    // save in wishlist
    public function addToWishlist($itemID = null, $saveTable="wishlist", $fromTable="cart"){
        if ($itemID != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE itemID ={$itemID};";
            $query .= "DELETE FROM {$fromTable} WHERE itemID={$itemID}";

            // execute multi query
            $result = $this->db->con->multi_query($query);
            if ($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}