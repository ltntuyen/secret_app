<?php 
include "Controller.php";
include "../model/m_room.php";

class C_Room extends Controller{

    public function get_room(){
        // code
    }

    public function create_room(){

        try {
            
            $roomModel = new M_Room();

            $data["idroom"] = time()."KEY".rand(0, 999);

            $last_id = $roomModel->create($data);

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