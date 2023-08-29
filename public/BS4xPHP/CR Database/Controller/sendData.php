<?php
class CreateData{
    public function Data($name, $pass, $privillage){
        $this->setData($name, md5($pass), $privillage);
    }

    private function setData($name, $pass, $privillage){
        include_once "../Model/DataBase.php";
        $setCreateData = new DataBase();
        $admMinMax = [1,5];
        $usrMinMax = [10,50];
        $id = "";

        if ($privillage == "Admin") { 

            $dataID = $setCreateData->generatedID($privillage);
            if (count($dataID)== $admMinMax[1]) {
                echo "Data ".$privillage." Sudah Penuh, Gagal Menambahkan";
            }else {
                do {
                    $id = rand($admMinMax[0], $admMinMax[1]);
                    if (in_array($id, $dataID)) {
                        $info =  1;
                    }else{
                        $info = 0;
                    }
                } while ($info == 1);
            }
            
        }else {

            $dataID = $setCreateData->generatedID($privillage);
            if (count($dataID)== $usrMinMax[1]) {
                echo "Data ".$privillage." Sudah Penuh, Gagal Menambahkan";
            }else {
                do {
                    $id = rand($usrMinMax[0], $usrMinMax[1]);
                    if (in_array($id, $dataID)) {
                        $info =  1;
                    }else{
                        $info = 0;
                    }
                } while ($info == 1);
            }

        }

        $getInfoAdd = $setCreateData->CreateData($id, $name, $pass, $privillage);
        if ($getInfoAdd == 1) {
            header("Location: /public/BS4xPHP/CR Database/");
        }

    }

    // private function gereatedID($id, $privilage){
    //     include_once "../Model/DataBase.php";
    //     $cekID = new DataBase();
    //     $containID = $cekID->generatedID($privilage);

    //     if (in_array($id, $containID)) {
    //         return 1;
    //     }else{
    //         return 0;
    //     }
    // }
}