<?php

class DB
{
    public $_db;

    function __construct()
    {
        $this->_db = new mysqli("localhost", "root", "qweasd1!", "shop_db", 8889) or die ('Connect error!');
    }

    function __destruct()
    {
        unset($this->_db);
    }

    function addNewGoods($commodity_name, $commodity_category, $commodity_file, $commodity_price, $commodity_quantity)
    {
        $sql = "INSERT INTO goods (name, category, img, price, quantity) VALUES ('$commodity_name', '$commodity_category', '$commodity_file', '$commodity_price','$commodity_quantity')";
        if (!$result = $this->_db->query($sql)) {
            die('There was an error running the query');
        }
    }

    function uploadImg()
    {
        // Каталог, в который мы будем принимать файл:
        $uploaddir = 'files/';
        $file_name = $_POST['commodity_name'];
        $uploadfile = $uploaddir . $file_name;
        // Копируем файл из каталога для временного хранения файлов:
        if (copy($_FILES['commodity_file']['tmp_name'], $uploadfile)) {
            #echo "<h3>Файл успешно загружен на сервер</h3><br>";
            return $uploadfile;
        } else {
            #echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3><br>";
            #echo '<br>';
            #echo $uploadfile;
            exit;
        }
    }


    protected function db2Arr($data)
    {
        $arr = array();
        while ($row = $data->fetch_assoc())
            $arr[] = $row;
        return $arr;
    }

    function selectGoodsByCategories($category){
        try{
            $sql = "SELECT id, name, img, price FROM goods WHERE category='$category;'";
            $result = $this->_db->query($sql);
            if(!is_object($result))
                throw new Exception($this->_db->mysqli_error());
            return $this->db2Arr($result);
        }catch (Exception $e){
            return false;
        }
    }

    function allGoodsViewsAdmin()
    {
        try {
            $sql = "SELECT a.name, a.category, a.img, a.quantity, a.price, a.date, b.category, b.id FROM goods a, category b WHERE b.id = a.category";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->mysqli_error());
            return $this->db2Arr($result);
        } catch (Exception $e) {
            return false;
        }

    }

    function selectGoodsByDate()
    {
        try {
            $sql = 'SELECT * FROM goods ORDER BY date DESC LIMIT 30';
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->db->mysqli_error());
            return $this->db2Arr($result);
        } catch (Exception $e) {
            return false;
        }
    }

    function addNewUser($registration_name, $registration_email, $registration_password, $salt)
    {
        try {
            $sql = "INSERT INTO users (name, email, password, salt) VALUES ('$registration_name','$registration_email','$registration_password','$salt')";
            $result = $this->_db->query($sql);
            if (!$result === true)
                throw new Exception($this->db->mysqli_error());
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    function existField($db_field, $field) //$db_field - поле таблицы, $field - искомое значение
    {
        try {
            $sql = "SELECT $db_field FROM users WHERE $db_field='$field'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->mysli_error());
            if (($chck = $this->checkQuery($result)) < 1) {
                return true;
            } else return false;

        } catch (Exception $e) {
            return false;
        }
    }

    function userCart($id)
    {
        try {
            $sql = "SELECT name, quantity, price FROM goods WHERE id='$id'";
            #echo '2';
            $result = $this->_db->query($sql);
            #echo '3';
            if (!is_object($result))
                #echo '4';
                throw new Exception($this->_db->mysqli_error());
            #   echo '4';
            return $this->db2Arr($result);
        } catch (Exception $e) {
            return false;
        }
    }

    function checkLogin($userLogin, $userPassword) //ищем пользователя с логином и паролем в базе
    {

        try {
            $sql = "SELECT password, salt FROM users WHERE name='$userLogin'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->mysqli_error());
            if (($chck = $this->checkQuery($result)) != 1)
                return false;
            foreach ($result as $item) {
                $password = $item[password];
                $salt = $item[salt];

            }
            //генерируем hash и пишем в базу
            if ((md5(md5($userPassword) . $salt)) === $password) {
                $name = md5(md5($userLogin) . $salt);
                try {
                    $sql = "UPDATE users SET hash='$name' WHERE name='$userLogin'";
                    $result = $this->_db->query($sql);
                    if ($result != true)
                        throw new Exception ($this->_db->mysqli_error());
                    return $name;
                } catch (Exception $e) {
                    return false;
                }
            }
        } catch (Exception $e) {
            return false;
        }
    }

    function checkSession($userLogin, $userHash)
    {
        try {
            $sql = "SELECT name, hash FROM users WHERE name='$userLogin' AND hash= '$userHash'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->mysqli_error());
            if (($chck = $this->checkQuery($result)) === 1)
                return true;
        } catch (Exception $e) {
            return false;
        }
    }

    function chooseCategory()
    {
        try {
            $sql = 'SELECT id, category FROM category';
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->mysqli_error());
            return $this->db2Arr($result);
        } catch (Exception $e) {
            return false;
        }
    }
    function selectCategory($data){
        try {
            $sql = "SELECT category FROM category WHERE id='$data'";
            $result = $this->_db->query($sql);
            if (!is_object($result))
                throw new Exception($this->_db->mysqli_error());
            return $this->db2Arr($result);
        } catch (Exception $e) {
            return false;
        }
    }
    protected function checkQuery($data)//проверяет кол-во элементов массива после SELECT
    {                                   //true если 1 элемент, иначе false
        $arr = array();
        $arr_size = 0;
        while ($row = $data->fetch_assoc()) {
            $arr[] = $row;
            $arr_size++;
        }
        return $arr_size;
    }

    function test($userLogin)
    {
        echo $userLogin;
        return true;
    }

    protected
    function dataFromDb($data)
    {
        foreach ($data as $item) {
            $salt = $item[salt];
        }
        return $salt;
    }


}





/*


/*

function  selectGoodsByDate($date)
{

 function selectGoodsByCategory($category)
 {

 }


}

function updateGoodsQuantity($id, $number)
{

}

function  updateGoodsName($id, $name)
{

}

function  updateGoodsImage($id, $img)
{

}

function  updateGoodsPrice($id, $price)
{

}

function  updateGoodsDate($id, $date)
{

}

function  updateGoodsCategory($id, $category)
{

}
}