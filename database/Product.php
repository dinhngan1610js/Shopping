<?php

//use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using itemID
    public function getProduct($itemID = null, $table = 'product'){
        if (isset($itemID)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE itemID = {$itemID}");

            $resultArray = array();

            //  fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }

    public function getDataJewelry(){
        $result = $this->db->con->query("SELECT * FROM product WHERE categoryID = 4");

        $resultArray = array();

        //  fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getDataBags(){
        $result = $this->db->con->query("SELECT * FROM product WHERE categoryID = 2");

        $resultArray = array();

        //  fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getDataSneakers(){
        $result = $this->db->con->query("SELECT * FROM product WHERE categoryID = 1");

        $resultArray = array();

        //  fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getDataDress(){
        $result = $this->db->con->query("SELECT * FROM product WHERE categoryID = 3");

        $resultArray = array();

        //  fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

}