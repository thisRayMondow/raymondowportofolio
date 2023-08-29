<?php
include_once './model/model.php';
class get {
    public function getTableBody() {
        $data = new data();        
        return $data->sendDataTableBody();
    }
    
    public function titleTable() {
        $title = ["No", "Nama Penulis", "E-mail Penulis", "Jenis Kelamin", "Artikel"];
        return $title;
    }
}