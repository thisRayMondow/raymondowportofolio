<?php
class deleteData {
    public function checkData($ID){
        if ($this->checkID($ID) == 1) {
            $this->delData($ID);
        }else{
            echo "Gagal Menghapus Data Pengguna atau ID Tidak Sesuai";
        }
    }

    private function checkID($id){
        include_once "../Model/DataBase.php";
        $checkID = new DataBase();
        return $checkID->checkID($id);
    }
    private function delData($id){
        include_once "../Model/DataBase.php";
        $del = new DataBase();
        $info = $del->delData($id);

        if ($info == 1) {
            header("Location: /public/BS4xPHP/UD Database/");
        }else{
            echo "Gagal Menghapus Data Pengguna";
        }
    }

}