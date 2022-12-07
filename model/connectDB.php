
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
            echo "Kết nối database thất bại !!";
            exit();
        }
    }

    /**
     * $query = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
     */
    public function create($query){
        $conn = $this->database(); // gọi function chung 1 class
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $query;
        $conn->exec($sql);
        echo "Thêm thành công!!";
    }
}

?>