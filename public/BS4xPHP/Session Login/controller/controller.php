<?php 
include_once '../model/model.php';

class getData {
    public function getDataUser($name, $pass) {
        $getData = new dataLogin();
        $data = $getData->sendData();
        
        foreach ($data as $d){            
            $validUser = array_search($name, $d);
            if (!$validUser) {
                $info = 0;
            }else {
                if ($d["pass"] == md5($pass)) {
                    $info = 1;
                }else {
                    $info = 0;
                }
                break;                
            }
        }
        
        return $info;
    }
}
?>