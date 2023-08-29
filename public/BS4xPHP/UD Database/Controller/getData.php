<?php
class ReadData{
    public function Data(){
        return $this->setData();
    }
    public function dataUpadate($id){
        return $this->getUpdateData($id);
    }

    private function setData(){
        include_once "./Model/DataBase.php";

        $getData = new DataBase();
        if (isset($_POST["cari"])) {
            $cek = $_POST["cari"];
        }else{
            return $getData->ReadData();
        }
    }

    private function getUpdateData($id){
        include_once "../Model/DataBase.php";

        $getData = new DataBase();
        
        return $getData->getUpdateData($id);
    }
}