<?php 
class updateData{
    public function checkData($ID, $NAME, $PRIV){
        if ($this->checkID($ID) == 1) {
            $id = $this->generatedID($PRIV);
            $this->UpdataData($ID, $id, $NAME, $PRIV);
        }else{
            header("Location: /public/BS4xPHP/UD Database/");
        }
    }

    private function checkID($id){
        include_once "../Model/DataBase.php";
        $checkID = new DataBase();
        return $checkID->checkID($id);
    }

    private function generatedID($priv){
        $admMinMax = [1,5];
        $usrMinMax = [10,50];
        $id = "";

        if ($priv == "Admin") {
            include_once "../Model/DataBase.php";
            $Getid = new DataBase();
            $ContainId = $Getid->GetID($priv);
            if (count($ContainId)== $admMinMax[1]) {
                echo "Data ".$priv." Sudah Penuh, ";
            }else {
                do {
                    $id = rand($admMinMax[0], $admMinMax[1]);
                    if (in_array($id, $ContainId)) {
                        $info =  1;
                    }else{
                        $info = 0;
                    }
                } while ($info == 1);
            }
        }else{
            include_once "../Model/DataBase.php";
            $Getid = new DataBase();
            $ContainId = $Getid->GetID($priv);
            if (count($ContainId)== $usrMinMax[1]) {
                echo "Data ".$priv." Sudah Penuh, ";
            }else {
                do {
                    $id = rand($usrMinMax[0], $usrMinMax[1]);
                    if (in_array($id, $ContainId)) {
                        $info =  1;
                    }else{
                        $info = 0;
                    }
                } while ($info == 1);
            }
        }

        return $id;
    }

    private function UpdataData($ID1, $ID2, $NAME, $PRIV){
        include_once "../Model/DataBase.php";
        $setData = new DataBase();
        $info = $setData->upadateData($ID1, $ID2, $NAME, $PRIV);

        if($info == 1){
            header("Location: /public/BS4xPHP/UD Database/");
        }else {
            echo "Gagal Merubah Data";
        }
    }
}