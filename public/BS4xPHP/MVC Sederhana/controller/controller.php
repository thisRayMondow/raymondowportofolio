<?php
include_once './model/model.php';

class get {
    public function getNav() {
        $nav = new data();
        return $nav->sendNav();
    }
    
    public function getArticle() {
        $article = new data();
        $cArticle = $article->sendArticle();
        for ($a = 0; $a < count($cArticle); $a++) {
            $data[] = $this->objectArticle($cArticle[$a][0], $cArticle[$a][1], $cArticle[$a][2], $cArticle[$a][3]);
        }
        return $data;
    }
    private function objectArticle($title, $auth, $body, $tag) {
        $data = [
            "title"=>$title,
            "auth"=>$auth,
            "body"=>$body,
            "tag"=>$tag
        ];
        
        return $data;
    }
}
?>