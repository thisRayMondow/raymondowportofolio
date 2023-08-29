<?php
class ReadData{
    public function Data(){
        return $this->setData();
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
}