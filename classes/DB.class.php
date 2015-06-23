<?php

class DB
{
    public $_db;


    function __construct()
    {

        try {
            $this->_db = new PDO('mysql: host=37.78.90.223; dbname=heroku_592fc3ecec18124', 'bf738e443f27f3', '1100c26f');
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }


    }

    function __destruct()
    {
        unset($this->_db);
    }

    function addNewGoods($commodity_name, $commodity_category, $commodity_file, $commodity_price, $commodity_quantity)
    {
        ///$commodity_name = $this->_db->quote($commodity_name);
        //$commodity_category = $this->_db->quote($commodity_category);
        //$commodity_file = $this->_db->quote($commodity_file);
        //$commodity_price = $this->_db->quote($commodity_price);
        ///$commodity_quantity = $this->_db->quote($commodity_quantity);
        try {
            $sql = "INSERT INTO goods (name, category, img, price, quantity) VALUES ('$commodity_name', '$commodity_category', '$commodity_file', '$commodity_price','$commodity_quantity')";
            if (!$result = $this->_db->exec($sql))
                throw new PDOException($this->_db->errorInfo());
        } catch (PDOException $e) {
            die ("Error: ".$e->getMessage());
        }
    }

    function uploadImg()
    {
        $uploaddir = 'files/';
        $file_name = $_POST['commodity_name'];
        $uploadfile = $uploaddir.$file_name;
        if (copy($_FILES['commodity_file']['tmp_name'], $uploadfile)) {
            return $uploadfile;
        } else {

            exit;
        }
    }


    function db2Arr($data)
    {
        $arr = array();
        while ($row = $data->fetch(PDO::FETCH_ASSOC))
            $arr[] = $row;
        return $arr;
    }

    function selectGoodsByCategories($category)
    {
        //$category = $this->_db->quote($category));
        try {
            $sql = "SELECT id, name, img, price FROM goods WHERE category='$category' LIMIT 25";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new PDOException($this->_db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }
    }

    function allGoodsViewsAdmin()
    {
        try {
            $sql = "SELECT a.name, a.category, a.img, a.quantity, a.price, a.date, b.category, b.id FROM goods a, category b WHERE b.id = a.category";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new PDOException($this->_db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }

    }

    function selectGoodsByDate()
    {
        try {
            $sql = 'SELECT * FROM goods ORDER BY date DESC LIMIT 25';
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new PDOException($this->db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }
    }

    function addNewUser($registration_name, $registration_email, $registration_password, $salt)
    {
        //$registration_name = $this->_db->quote($registration_name);
        //$registration_email = $this->_db->quote($registration_email);
        //$registration_password = $this->_db->quote($registration_password);
        //$salt = $this->_db->quote($salt);
        try {
            $sql = "INSERT INTO users (name, email, password, salt) VALUES ('$registration_name','$registration_email','$registration_password','$salt')";
            $result = $this->_db->exec($sql);
            if (!$result === true)
                throw new PDOException($this->db->errorInfo());
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function existField($db_field, $field) //$db_field - поле таблицы, $field - искомое значение
    {                                       //проверям существование повторений в таблице
        //$db_field = $this->_db->quote($db_field);
        //$field = $this->_db->quote($field);
        try {
            $sql = "SELECT $db_field FROM users WHERE $db_field='$field'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new PDOException($this->_db->errorInfo());
            $data = $this->db2Arr($result);
            if (count($data) < 1) {
                return true;
            } else return false;

        } catch (PDOException $e) {
            return false;
        }
    }

    function userCart($id)
    {
        //$id = $this->_db->quote($id);
        try {
            $sql = "SELECT name, quantity, price FROM goods WHERE id='$id'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new PDOException($this->_db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }
    }

    function checkLogin($userLogin, $userPassword) //ищем пользователя с логином и паролем в базе
    {
        //$userLogin = $this->_db->quote($userLogin);
        //$userPassword = $this->_db->quote($userPassword);
        try {
            $sql ="SELECT password, salt,id FROM users WHERE name=:userLogin";
            $stmt  = $this->_db->prepare($sql);
            $stmt->bindValue(':userLogin',$userLogin);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt === false){
                throw new PDOException($this->_db->errorInfo());
            }
            if (count($result) !=3){
                return false;
            }
                $password = $result[password];
                $salt = $result[salt];
                $id = $result[id];
            if ((md5(md5($userPassword).$salt)) === $password) {
                $name = md5(md5($userLogin).$salt);
                try {
                    $sql = "UPDATE users SET hash='$name' WHERE name='$userLogin'";
                    $result = $this->_db->exec($sql);
                    if ($result === false){
                        throw new PDOException ($this->_db->errorInfo());
                    }
                    $arr['name']=$name;
                    $arr['id'] = $id;
                    return $arr;
                } catch (PDOException $e) {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo 'false';
            return false;
        }
    }

    function checkSession($userLogin, $userHash)
    {
        //$userLogin = $this->_db->quote($userLogin);
        //$userHash = $this->_db->quote($userHash);
        try {
            $sql = "SELECT name, hash, access FROM users WHERE name='$userLogin' AND hash= '$userHash'";
            $result = $this->_db->query($sql);
            if ($result===false){
                throw new PDOException($this->_db->errorInfo());
            }
            $data = $this->db2Arr($result);
            foreach($data as $item){
                $access = $item[access];
            }
            if (count($data) == 1){
                if($access == 1){
                    return '1';
               }else{
                    return '0';
               }
            }
        } catch (PDOException $e) {
            return '88';
        }
    }

    function chooseCategory()
    {
        try {
            $sql = 'SELECT id, category FROM category';
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }
    }

    function selectCategory($data)
    {
        //$data = $this->_db->quote($data);
        try {
            $sql = "SELECT category FROM category WHERE id='$data'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }
    }
    function changePassword($user_id, $old_password, $new_password)
    {
        try {
            $sql = "SELECT id, password, salt FROM users WHERE id='$user_id'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->errorInfo());
            $result = $this->db2Arr($result);
            foreach($result as $res){
                $password = $res[password];
                $salt = $res[salt];
            }
            if((md5(md5($old_password).$salt)) === $password){
                $new_password = md5(md5($new_password).$salt);
                $sql = "UPDATE users SET password='$new_password' WHERE id='$user_id'";
                $this->_db->exec($sql);
                return true;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    function getGoods($goods_id){
        try {
            $sql = "SELECT id,name,img ,price FROM goods WHERE id='$goods_id'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->errorInfo());
            return $this->db2Arr($result);
        } catch (PDOException $e) {
            return false;
        }
    }

}


