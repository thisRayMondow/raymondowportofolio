<?php 
// require_once '/blackDiamond/pages/model/data/Excel_Reader.php';
// $data = new Spreadsheet_Excel_Reader("/blackDiamond/pages/model/data/data.xls"); //untuk versi 2003 kebawah
// $row = $data->rowcount();

// /* ======================== MS Excel ===========================
// Lokasi file MS Excel
$excelFilePath = "/blackDiamond/pages/model/data/dataBase.xlsx";
// Membuat koneksi PDO menggunakan driver ODBC untuk Excel
$pdo = new PDO("odbc:Driver={Microsoft Excel Driver (*.xls, *.xlsx, *.xlsm, *.xlsb)};Dbq=$excelFilePath;");

// Query SELECT untuk mengambil data dari lembar kerja tertentu (Sheet1 dalam contoh ini)
$query = "SELECT * FROM [Sheet1$]";
$result = $pdo->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // echo "" . number_format($row['Id']) ." || ". ." || ". ."<br>";
    $data[number_format($row['Id'])]=["Nama"=>$row['Nama'], "Sandi" => md5($row["Sandi"]), "Hak"=>$row['Hak']]; 
}
ksort($data);
// ===================================== MS Excel ====================================*/

// Menutup koneksi PDO
$pdo = null;

/** Get */
if (!isset($_GET["cari"])) {
    $cek = "";
}else{
    $cek = $_GET["cari"];
}
/** Post */
// if (!isset($_POST["cari"])) {
//     $cek = "";
// }else{
//     $cek = $_POST["cari"];
// }

for ($d=1; $d <= count($data); $d++) { 
    if (!$cek) {
        echo "<tr>";
        echo "<td scope='row' class='text-center'>".$d."</td>";
        echo "<td >".$data[$d]["Nama"]."</td>";
        echo "<td >".$data[$d]["Sandi"]."</td>";
        echo "<td class='text-center'>".strtoupper($data[$d]["Hak"])."</td>";        
        echo "</tr>";
    }else{
        // var_dump($cek);

        if ($data[$d]["Hak"] == $cek) {
            // $contain[$d] = [$data[$d]["Nama"], $data[$d]["Sandi"], $data[$d]["Hak"]];
            echo "Sama"; 
        }
        // do {
            // if($data[$d]["Hak"] == $cek){
                // echo "<tr>";
                // echo "<td scope='row' class='text-center'>".$d."</td>";
                // echo "<td >".$data[$d]["Nama"]."</td>";
                // echo "<td >".$data[$d]["Sandi"]."</td>";
                // echo "<td class='text-center'>".strtoupper($data[$d]["Hak"])."</td>";        

            //     echo "</tr>"; 
            // }else{
            //     continue;
            // }
        // } while ($d == count($data));
    }
}
// var_dump($contain);
?>