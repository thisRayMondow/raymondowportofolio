<?php
include_once './controller/controller.php';

$get = new get();

$titleT = $get->titleTable();
$penulis = $get->getTableBody();
?>

<thead class="text-center" style="font-size: 16px;">
    <tr>
        <?php
            for ($t = 0; $t < count($titleT); $t++) {
                if ($t == 1) {
                    echo '<th style="width: 200px;">'.$titleT[$t].'</th>';
                }else {
                    echo '<th>'.$titleT[$t].'</th>';
                }
            }
        ?>
    </tr>
</thead>
<tbody style="font-size: 14px;">
		<?php
            for ($d = 0; $d < count($penulis); $d++) {
                $no = $d+1;
                echo "<tr>";
                echo  '<td class="text-center"><b>'.$no.'</b></td>';
                for ($p = 0; $p < count($penulis[$d]); $p++) {
                    if ($p == 0) {
                        echo  '<td scope="row">'.$penulis[$d][$p].'</td>';
                    }else if ($p == 3) {
                        echo  '<td>'.$penulis[$d][$p].', <a href="#">lihat lainnya...</a></td>';
                    }else {
                        echo  '<td class="text-center">'.$penulis[$d][$p].'</td>';
                    }
                }
                echo "</tr>";
            }
        ?>
</tbody>