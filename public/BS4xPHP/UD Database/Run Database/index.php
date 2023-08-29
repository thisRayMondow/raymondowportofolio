<?php 
$url = "localhost";
$name = "root";
$pass = "";

// Create connection
$conn = new mysqli($url, $name, $pass);

// Check connection
if ($conn->connect_error) {
    $msg = "Connection failed: " . $conn->connect_error;
}
$msg = "Connected successfully";

// Create database
$dbName = "SimpleDatabase";
$sqlDB = "CREATE DATABASE IF NOT EXISTS $dbName";

if ($conn->query($sqlDB) === TRUE) {
    $db = "Database created successfully";
} else {
    $db =  "Error creating database: " . $conn->error;
}

$conn->close();

// sql to create table
$connTable = new mysqli($url, $name, $pass, $dbName);
$sqlTable = "CREATE TABLE IF NOT EXISTS User (
ID INT(6) Unique KEY,
NamaPengguna VARCHAR(30) NOT NULL,
KataSandi VARCHAR(30) NOT NULL,
HakAkses VARCHAR(10) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($connTable->query($sqlTable) === TRUE) {
    $tbl =  "Table User created successfully";
} else {
   $tbl = "Error creating table: " . $connTable->error;
}

$connTable->close();
?>
<div style ="background-color:#000; padding: 10px;">
	<div style ="color:#0f0">=== <?php echo $msg;?> ===</div>
	<div style ="color:#0f0">=== <?php echo $db;?> ===</div>
	<div style ="color:#0f0">=== <?php echo $tbl;?> ===</div>
</div>