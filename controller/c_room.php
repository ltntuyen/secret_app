<?php 
include "Controller.php";
include "../model/m_room.php";

class C_Room extends Controller{

    public function get_room(){
        // code
    }

    public function create_room(){

        try {
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $roomModel = new M_Room();

            $idroom = "'R".time()."KEY".rand(0, 999)."'";

            $attributes=["idroom"];
            $values=[$idroom];
            $roomModel->create($attributes, $values);

        } catch (\Throwable $th) {
            echo "Ban khong the tao phòng".$th;
        }
        
    }

    public function update_room(){
        // code
    }

    public function delete_room(){
        // code
    }

}
?>