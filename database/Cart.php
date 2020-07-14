<?php
class Cart{
    public $db = null;
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }
    //insert into cart table
    public function insertIntoCart($params = null,$table = 'cart'){
        if($this->db->con != null){
            if($params!=null){
                $columns = implode(',',array_keys($params));
                $values = implode(',',array_values($params));
                //sql query
                $query_string = "INSERT INTO $table($columns) VALUES($values)";
                //execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }
    //to get user_id and item_id and insert into cart table
    public function addToCart($userId,$itemId){
        if(isset($userId) && isset($itemId)){
            $params = array(
                "user_id"=>$userId,
                "item_id"=>$itemId
            );
            $result = $this->insertIntoCart($params);
            if($result){
                //refresh the page
                header('location:'.$_SERVER['PHP_SELF']);
                exit();
            }
        }
    }
        //delete product using id
        public function deleteProduct($item_id,$table='product'){
            if(isset($item_id)){
                $result = $this->db->con->query("DELETE FROM $table WHERE item_id=$item_id");
                $resultArray = array();
                while($item = mysqli_fetch_assoc($result)){
                    $resultArray[]=$item;
                }
                return $resultArray;
            }
        }
}