<?php
class DataBase{
    public function generatedID($privilage){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $user, $pass, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "SELECT ID FROM user WHERE HakAkses = '".$privilage."' ORDER BY ID ASC");
            $containData = array();
            while($data = mysqli_fetch_array($query)){
                $containData[] = $data["ID"];
            }

            return $containData;
        }
    }

    public function CreateData($id, $name, $pass, $privilage){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "INSERT INTO user (ID, NamaPengguna, KataSandi, HakAkses) 
            VALUES ('$id', '$name', '$pass', '$privilage')");

            if (!$query) {
                return 0;
            }else{
                return 1;
            }
        }
    }

    public function ReadData(){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "SELECT * FROM user WHERE HakAkses != 'Author' ORDER BY ID ASC");
            $containData = array();
            while($data = mysqli_fetch_array($query)){
                $containData[] = [$data["ID"], $data["NamaPengguna"], $data["KataSandi"], $data["HakAkses"]];
            }

            return $containData; 
        }
    }
}