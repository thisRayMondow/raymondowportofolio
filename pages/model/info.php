<?php
class info {
    
    public function sendDataInfo() {
        $sendData = $this->setData();
        return $sendData;
    }
    
    private function setData() {
        
        $info1title = "Kemampuan Pemrograman Web";
        $info1D1 = ["<div>PHP</div>","4","1 Tahun Pengalaman Kerja"];
        $info1D2 = ["<div>HTML</div>","4","1 Tahun Pengalaman Kerja"];
        $info1D3 = ["<div>CSS</div>","4","1 Tahun Pengalaman Kerja"];
        $info1D4 = ["<div>Bootstrap</div>","3","1 Tahun Pengalaman Kerja"];
        $info1D5 = ["<div>Laravel</div>","3","6 Bulan Pengalaman Kerja"];
        $info1D6 = ["<div>JavaScript</div>","2","1 Tahun Pengalaman Kerja"];
        $info1D7 = ["<div>ReactJs</div>","2","3 Bulan Pengalaman Belajar"];        
        $inputInfoData1['title'] = $info1title;
        $inputInfoData1['data'] = [$info1D1, $info1D2, $info1D3, $info1D4, $info1D5, $info1D6, $info1D7];
        
        $info2title = "Kemampuan Lainnya";
        $info2D1 = ["<div>Microsoft Office</div>","4","1,5 Tahun Pengalaman Kerja"];
        $info2D2 = ["<div>JarKomp Dasar</div>","3","1,5 Tahun Pengalaman Kerja"];
        $info2D3 = ["<div>Multimedia (OBS, Video Editor)</div>","3","6 Bulan Pengalaman Kerja"];
        $inputInfoData2['title'] = $info2title;
        $inputInfoData2['data'] = [$info2D1, $info2D2, $info2D3];
        
        $info3title = "Kemampuan Bahasa";
        $info3D1 = ["<div>Bahasa Indonesia</div>","6","Aktif"];
        $info3D2 = ["<div>Bahasa Inggris</div>","3","Pasif"];
        $inputInfoData3['title'] = $info3title;
        $inputInfoData3['data'] = [$info3D1, $info3D2];
        
        $setData = [$inputInfoData1, $inputInfoData2, $inputInfoData3];
        
        
        return $setData;
    }
}



