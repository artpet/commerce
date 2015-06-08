<?php
class Commodity
{
    protected $id;
    protected $name;
    protected $img;
    protected $price;
    protected $quantity;
    protected $date;
    protected $db;

    function __construct($id = 0)
    {
        $this->_id = $id;
        $db = new DB;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }
    public function showAllGoodsAdmin(){
        $result = $this->_db->allGoodsViewsAdmin();
        if(is_array($result))
            return $result;
        else
            return 'error';
    }
}