<?php

class Order
{
    public $_db;

    function __construct()
    {
        $this->_db = new PDO('mysql: host=us-cdbr-iron-east-02.cleardb.net; dbname=heroku_592fc3ecec18124', 'bf738e443f27f3', '1100c26f');
    }

    function db2Arr($data)
    {
        $arr = array();
        while ($row = $data->fetch(PDO::FETCH_ASSOC))
            $arr[] = $row;
        return $arr;
    }

    function addNewOrder($u, $s, $item_in_cart)
    {
        ///$u = $this->_db->quote($u);
        //$s = $this->_db->quote($s);
        $order_number = $this->orderId();
        $arr = $item_in_cart;
        foreach ($arr as $key => $value) {

            $goods = $key;
            $quantity = $arr[$key];
            try {
                $sql = "SELECT price FROM goods WHERE id='$goods'";
                $result = $this->_db->query($sql);
                $res = $this->db2Arr($result);
                foreach ($res as $items) {
                    $price = $items[price];
                }
                $summary = $quantity * $price;
                $sql = "INSERT INTO orders (user,order_number, commodity, quantity,price,summary,status) VALUES ('$u','$order_number','$goods','$quantity','$price','$summary','$s')";
                $result = $this->_db->query($sql);
                if (!is_object($result))
                    throw new PDOException($this->_db->errorInfo());
            } catch (PDOException $e) {
                die ("Error: " . $e->getMessage());
            }
        }
    }

    function orderId()
    {
        try {
            $sql = "SELECT MAX(id) FROM orders";
            $result = $this->_db->query($sql);
            $res = $this->db2Arr($result);
            foreach ($res as $value) {
                $id = $value['MAX(id)'];
            }
            return $id;
        } catch (PDOException $e) {
            die ("Error: " . $e->getMessage());
        }
    }

    function getAllOrders()
    { //Order,Date,Status
        try {
            $sql = "SELECT a.order_number, a.status, (a.date),b.description, b.id FROM orders a, order_status b WHERE a.status = b.id GROUP BY order_number ORDER BY a.date DESC";
            $result = $this->_db->query($sql);
            $res = $this->db2Arr($result);
            return $res;
        } catch (PDOException $e) {
            die ("Error: " . $e->getMessage());
        }
    }

    function getCurrentOrder($orderid)
    {
        //$orderid = $this->_db->quote($orderid);
        try {
            $sql = "SELECT a.order_number, a.commodity,a.user, a.quantity, a.price,(a.date), b.name AS goods_name, f.name FROM orders a, goods b,users f WHERE a.commodity = b.id AND a.user = f.id AND order_number='$orderid'";
            $result = $this->_db->query($sql);
            $res = $this->db2Arr($result);
            return $res;
        } catch (PDOException $e) {
            die ("Error: " . $e->getMessage());
        }
    }
    function processingOrder($orderid){
        {
            try {
                $sql = "UPDATE orders SET status='2' WHERE order_number='$orderid'";
                $this->_db->exec($sql);
                return true;
            } catch (PDOException $e) {
                die ("Error: " . $e->getMessage());
            }
        }
    }
    function mostPopular(){
        {
            try {
                $sql = "SELECT commodity,COUNT(commodity) AS popular FROM orders GROUP BY commodity ORDER BY popular DESC LIMIT 9";
                $result = $this->db2Arr($this->_db->query($sql));
                return $result;
            } catch (PDOException $e) {
                die ("Error: " . $e->getMessage());
            }
        }
    }

}