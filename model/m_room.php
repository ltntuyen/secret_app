<?php 
include "connectDB.php";

class M_Room{

    protected $table = 'room';

    protected $option = [
        'TIMESTAMP' => true,
        'CREATED_AT' => 'created_at'
    ];

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

    public function create($data){
        $ConnectDB = new Connection();
        $last_id =  $ConnectDB->create($this->table, $data, $this->option);
        return $last_id;
    }

    public function update($data){
        // code
    }

    public function delete($data){
        // code
    }

}
?>