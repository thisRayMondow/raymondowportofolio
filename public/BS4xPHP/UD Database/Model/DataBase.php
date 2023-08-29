<?php
class DataBase{
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
        $conn->close();
    }

    public function getUpdateData($id){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "SELECT NamaPengguna, HakAkses FROM user WHERE ID = '$id'");
            $containData = array();
            while($data = mysqli_fetch_array($query)){
                $containData = ["Nama" => $data["NamaPengguna"], "Hak" => $data["HakAkses"]];
            }

            return $containData; 
        }
        $conn->close();
    }

    public function checkID($id){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "SELECT COUNT(*) FROM user WHERE ID = '$id'");
            $row = mysqli_fetch_row($query);
            if (count($row) == 1) {
                return 1;
            }else{
                return 0;
            }
        }
        $conn->close();
    }

    public function GetID($priv){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "SELECT ID FROM user WHERE HakAkses = '$priv'");
            while($data = mysqli_fetch_array($query)){
                $containData[] = $data["ID"];
            }

            return $containData; 
        }
        $conn->close();
    }

    public function upadateData($ID1, $ID2, $NAME, $PRIV){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "UPDATE user SET NamaPengguna = '$NAME', HakAkses= '$PRIV', ID= '$ID2' WHERE ID = '$ID1'");
            if ($query) {
                return 1;
            }else{
                return 0;
            }            
        }
        $conn->close(); 
    }

    public function delData($ID){
        $server = "localhost";
        $u = "root";
        $p = "";
        $db = "simpledatabase";

        $conn = mysqli_connect($server, $u, $p, $db);

        if (!$conn) {
            echo "Gagal Terhubung";
        }else{
            $query = mysqli_query($conn, "DELETE FROM user WHERE ID = '$ID'");
            if ($query) {
                return 1;
            }else{
                return 0;
            }            
        }
        $conn->close();
    }
}