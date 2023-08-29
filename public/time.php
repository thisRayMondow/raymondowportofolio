<?php
echo '<div style="background-color: rgba(225, 50, 50, 0.2);color:#000; margin:5px 3px;text-align:center;padding:1%;"';
$tanggal = mktime(date('m'), date("d"), date('Y'));
echo "<b> " . date("d-m-Y", $tanggal ) . "</b>";
date_default_timezone_set("Asia/Jakarta");
$jam = date ("H:i");
echo " | Pukul : <b> " . $jam . " " ." </b> ";
$a = date ("H");
if (($a>=6) && ($a<=10)) {
    echo " <b>, Pagi </b>";
}else if(($a>=11) && ($a<=14)){
    echo " , Siang  ";
}elseif(($a>=15) && ($a<=18)){
    echo ", Sore ";
}else{
    echo ", <b> Malam </b>";
}
echo "</div>";