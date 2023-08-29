<?php 
class dataLogin {
    public function sendData() {
        return $this->setUser();
    }
    
    private function setUser(){
        $user1 = $this->dataUser("admin", "admin");
        $user2 = $this->dataUser("user", "123");
        
        $dataUser = [$user1, $user2];
        return $dataUser;
    }
    
    private function dataUser($user, $pass) {
        $data = ["user" => $user, "pass"=>md5($pass) ];
        return $data;
    }
}
?>