<?php
include_once 'pages/model/handler.php';

class handler {
    
    private $info, $nav, $proyek;    
    
    /** call Handler Nav ==*/
    function getNav() {
        $this->nav = new nav();        
        return $this->nav->sendNav();
    }
    /** call Handler Nav ==*/
    
    /** Handler Info Data*/
    public function getInfoData() {
        $this->info = new info();        
        return $this->info->sendDataInfo();
    }
    /** Handler Info Data*/
    
    /** Handler Proyek Data*/
    public function getProyek() {
        $this->proyek = new proyek();
        return $this->proyek->sendProyek();
    }
    /** Handler Proyek Data*/

    public function getPict(){
        $pict = ["Lg.png", "me.png", "me2.jpg", "me3.png", "me4.png", "me5.png", "me6.jpg"];
        $randPict = rand(0, count($pict)-1);
        return $pict[$randPict];
    }
}
?>