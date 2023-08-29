<?php
include_once './controller/controller.php';

$articleData = new get();
$article = $articleData->getArticle();

for ($a = 0; $a < count($article); $a++) {
    $no = $a+1;
   echo '<div class="border border-primary rounded-lg p-3 mb-1">';
   echo '<strong><h5><u id="title'.$no.'">'.$article[$a]["title"].'</u> (<small id="author'.$no.'">'.$article[$a]["auth"].'</small>)</h5></strong>';
   echo '<p class="text-justify" id="body'.$no.'">'.$article[$a]["body"].'</p>';
   echo '<small><b id="tag'.$no.'">'.$article[$a]["tag"].'</b></small>';
   echo '<div class="mt-1 text-right">
   <button class="btn btn-sm btn-danger" onclick="delNotice()">Hapus</button>
   <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#staticBackdropUpdate" onclick="updateArticle('.$no.')">Ubah</button>
   </div>';
   echo '</div>';
}