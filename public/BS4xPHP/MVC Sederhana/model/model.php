<?php 
    class data {
        private function setNav() {
            $nav = ["Beranda", "Penulis", "Kontak"];            
            return $nav;
        }
        public function sendNav() {
            return $this->setNav();
        }
        
        private function setArticle() {
            $aTitle1 = "Pemrograman Web Dasar";
            $aAuth1 = "Ray M.S";
            $aBody1 ="Pemrograman web adalah proses pengembangan aplikasi website dengan menggunakan bahasa pemrograman khusus. Proses pembuatan program dibantu dengan software khusus.";
            $aTags1 = "Pemrograman, Pemrograman Web, Web Dasar, Pemrograman Dasar.";
            $Article1 = [$aTitle1, $aAuth1, $aBody1, $aTags1];
            
            $aTitle2 = "Jaringan Komputer";
            $aAuth2 = "Alfonso Lian";
            $aBody2 ="Jaringan komputer adalah sekumpulan komputer yang berbagi sumber daya yang terletak di atau disediakan oleh node jaringan. Komputer menggunakan protokol komunikasi umum melalui interkoneksi digital untuk berkomunikasi satu sama lain.";
            $aTags2 = "Komputer, Jaringan, Jaringan Komputer.";
            $Article2 = [$aTitle2, $aAuth2, $aBody2, $aTags2];
            
            $aTitle3 = "Komputer Personal";
            $aAuth3 = "Ronald P";
            $aBody3 ="Komputer pribadi (PC) adalah komputer mikro multiguna yang ukuran, kemampuan, dan harganya membuatnya layak untuk penggunaan individu. Komputer pribadi dimaksudkan untuk dioperasikan secara langsung oleh pengguna akhir, bukan oleh ahli komputer atau teknisi.";
            $aTags3 = "Komputer, Komputer Personal, PC, Personal Computer.";
            $Article3 = [$aTitle3, $aAuth3, $aBody3, $aTags3];
            
            $aTitle4 = "Fisika Dasar";
            $aAuth4 = "Ray M.S";
            $aBody4 ="Fisika adalah sains atau ilmu alam yang mempelajari materi beserta gerak dan perilakunya dalam lingkup ruang dan waktu, bersamaan dengan konsep yang berkaitan seperti energi dan gaya. Sebagai salah satu ilmu sains paling dasar, tujuan utama fisika adalah memahami bagaimana alam semesta berkerja.";
            $aTags4 = "Fisika, Pengertian Fisika, Fisika Dasar.";
            $Article4 = [$aTitle4, $aAuth4, $aBody4, $aTags4];
            
            $aTitle5 = "Teknologi";
            $aAuth5 = "Ronald P";
            $aBody5 ="Teknologi adalah keseluruhan sarana untuk menyediakan barang-barang yang diperlukan bagi kelangsungan dan kenyamanan hidup manusia. Penggunaan teknologi oleh manusia dimulai dengan pengubahan sumber daya alam menjadi alat-alat sederhana.";
            $aTags5 = "Teknologi, Pengertian Teknologi, Teknologi Dasar.";
            $Article5 = [$aTitle5, $aAuth5, $aBody5, $aTags5];
            
            
            $Article = [$Article1, $Article2, $Article3, $Article4, $Article5];
            
            return $Article;
        }
        public function sendArticle() {
            return $this->setArticle();
        }
    }
?>