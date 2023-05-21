<?php 

class profileModel extends database {

    public function addMobile($mobile){

        if($this->Query("INSERT INTO mobile (brand , model , processor , ram ,pur_date , price,userId) VALUES (?,?,?,?,?,?,?)", $mobile)){
            return true;
        }

    }

    public function getData($userId){

        if($this->Query("SELECT * FROM mobile WHERE userId = ? ", [$userId])){

            $data = $this->fetchAll();
            return $data;

        }

    }

    public function edit_data($id, $userId){

        if($this->Query("SELECT * FROM mobile WHERE id = ? && userId = ? ", [$id, $userId])){

            $row = $this->fetch();
            return $row;

        }

    }

    public function updateMobile($updateData){

        if($this->Query("UPDATE mobile SET brand = ? , model = ? , processor = ?,ram = ?, price = ? WHERE id = ? AND userId = ? ", $updateData)){

            return true;

        }

    }

    public function deletemobile($id, $userId){

        if($this->Query("DELETE FROM mobile WHERE id = ? && userId = ? ", [$id, $userId])){
            return true;
        }

    }

}


?>