<?php
class data {
    public function sendDataTableBody() {
        return $this->dataTableBody();
    }
    
    private function dataTableBody() {
        $auth1 = "Alfonso Lian";
        $email1 = "lian1997@gmail.com";
        $gender1 = "Laki-Laki";
        $tArticle1 = "Jaringan Komputer";
        $dataPenulis1 = [$auth1, $email1, $gender1, $tArticle1];
        
        $auth2 = "Ray M.S";
        $email2 = "	raym_s123@outlook.co.id";
        $gender2 = "Laki-Laki";
        $tArticle2 = "Pemrograman Web Dasar, Fisika Dasar";
        $dataPenulis2 = [$auth2, $email2, $gender2, $tArticle2];
        
        $auth3 = "Ronald P.";
        $email3 = "	ron111@yahoo.co.id";
        $gender3 = "Laki-Laki";
        $tArticle3 = "Komputer Personal, Teknologi";
        $dataPenulis3 = [$auth3, $email3, $gender3, $tArticle3];
                
        $data = [$dataPenulis1, $dataPenulis2, $dataPenulis3];
        return $data;
    }
}