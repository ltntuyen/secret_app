
<?php

class Connection{

    public function database(){
        $servername = "127.0.0.1";
        $dbname = "secret";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            return $conn;
        
        } catch(PDOException $e) {
            echo "Lỗi kết nối dữ liệu thất bại !!";
            exit();
        }
    }

    /**
     * $query = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
     */
    public function create($table, $data, $option){
        $conn = $this->database(); // gọi function chung 1 class
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $attributes = array();
        $values = array();
        foreach($data as $key => $value){
            $attributes[$key] = $key;
            if(is_string($value)){
                $values[$key] = "'".$value."'";
            }
            else{
                $values[$key] = $value;
            }            
        }
        $sql = "INSERT INTO $table (".implode(',',$attributes).") VALUES (".implode(',',$values).")";
        
        if( isset($option) 
            && isset($option['TIMESTAMP']) 
            && $option['TIMESTAMP'] == true 
            && isset($option['CREATED_AT']) 
            && $option['CREATED_AT'] != null){

            $CREATED_AT = $option['CREATED_AT'];
            $sql = "INSERT INTO $table (".implode(',',$attributes).",$CREATED_AT) VALUES (".implode(',',$values).",CURRENT_TIMESTAMP())";
        }
        
        $conn->exec($sql);

        return $conn->lastInsertId();
    }
}

?>