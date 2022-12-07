<?php 
include "connectDB.php";

class M_Room{

    public function firts($data){
        // code
    }

    public function get($data){
        // code
    }

    public function count($data){
        // code
    }

    public function all($data){
        // code
    }

    public function create($attributes, $values){
        $ConnectDB = new Connection();
        $query = "INSERT INTO room (".implode(",",$attributes).") VALUES (".implode(",",$values).")";
        $ConnectDB->create($query);
    }

    public function update($data){
        // code
    }

    public function delete($data){
        // code
    }

}
?>