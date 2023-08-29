<?php
class proyek {
    public function sendProyek() {
        $sendProyek = $this->setProyek();
        return $sendProyek;
    }
    
    private function setProyek() {
        
        $proyek1Title = "Bootstrap - 3";
        $proyek1Data1 = ["BS3 - Login Form", "/public/BS-3/Login Form/", "#linkFile", "#linkChannel"];
        $proyek1Data2 = ["BS3 - Validasi", "/public/BS-3/Login Validasi/", "#linkFile", "#linkChannel"];
        $proyek1Data3 = ["BS3 - Nav Bar", "/public/BS-3/Nav Bar/", "#linkFile", "#linkChannel"];
        $proyek1Data4 = ["BS3 - Side Bar", "/public/BS-3/Side Bar/", "#linkFile", "#linkChannel"];
        $proyek1Data5 = ["BS3 - Form Modal", "/public/BS-3/Form Modal/", "#linkFile", "#linkChannel"];
        $proyek1Data6 = ["BS3 - Table", "/public/BS-3/Tabel/", "#linkFile", "#linkChannel"];
        $proyek1 ["title"] = $proyek1Title;
        $proyek1 ["data"] = [$proyek1Data1, $proyek1Data2, $proyek1Data3, $proyek1Data4, $proyek1Data5, $proyek1Data6];
        
        $proyek2Title = "AI - Artificial Intelligence";
        $proyek2Data1 = ["AI - PHP Kohonen", "/public/undercontstructpage.html", "#linkFile", "#linkChannel"];
        $proyek2 ["title"] = $proyek2Title;
        $proyek2 ["data"] = [$proyek2Data1];

        $proyek3Title = "Native - HTML, CSS, JavaScript";
        $proyek3Data1 = ["Native - Login Form Sederhana", "/public/Native/Login Form/", "#linkFile", "#linkChannel"];
        $proyek3Data2 = ["Native - Validasi Sederhana", "/public/Native/Login Validasi/", "#linkFile", "#linkChannel"];
        $proyek3Data3 = ["Native - Nav Bar Sederhana", "/public/Native/Nav Bar/", "#linkFile", "#linkChannel"];
        $proyek3Data4 = ["Native - Side Bar Sederhana", "/public/Native/Side Bar/", "#linkFile", "#linkChannel"];
        $proyek3 ["title"] = $proyek3Title;
        $proyek3 ["data"] = [$proyek3Data1, $proyek3Data2, $proyek3Data3, $proyek3Data4];

        $proyek4Title = "BS4 x PHP Native";
        $proyek4Data1 = ["BS4 x PHP Native - Login Form BS4", "/public/BS4xPHP/Login Form/", "#", "#"];
        $proyek4Data2 = ["BS4 x PHP Native - Login Validate", "/public/BS4xPHP/Login Validate/", "#", "#"];
        $proyek4Data3 = ["BS4 x PHP Native - Nav Bar", "/public/BS4xPHP/Nav Bar/", "#", "#"];
        $proyek4Data4 = ["BS4 x PHP Native - Side Nav", "/public/BS4xPHP/Side Bar/", "#", "#"];        
        $proyek4Data5 = ["BS4 x PHP Native - Form Modal", "/public/BS4xPHP/Form Modal/", "#", "#"];
        $proyek4Data6 = ["BS4 x PHP Native - MVC Sederhana", "/public/BS4xPHP/MVC Sederhana/", "#", "#"];
        $proyek4Data7 = ["BS4 x PHP Native - Tabel non database php", "/public/BS4xPHP/Table/", "#", "#"];
        $proyek4Data8 = ["BS4 x PHP Native - Session Login non database php", "/public/BS4xPHP/Session Login/", "#", "#"];
        $proyek4Data9 = ["BS4 x PHP Native - Session Logout non database php", "/public/BS4xPHP/Session Logout/", "#", "#"];
        $proyek4Data10 = ["BS4 x PHP Native - Post dan Get Database", "/public/BS4xPHP/GetPost Database/", "#", "#"];
        $proyek4Data11 = ["BS4 x PHP Native - Create dan Read Database", "/public/BS4xPHP/CR Database/", "#", "#"];
        $proyek4Data12 = ["BS4 x PHP Native - Update dan Delete Database", "/public/BS4xPHP/UD Database/", "#", "#"];
        $proyek4Data13 = ["BS4 x PHP Native - Client & Admin Page", "/public/BS4xPHP/Client Page/", "#", "#"];

        $proyek4Data14 = ["BS4 x PHP Native - Log Activity Database", "/public/undercontstructpage.html", "#", "#"];
        $proyek4Data15 = ["BS4 x PHP Native - Membuat Portofolio Pribadi", "/public/undercontstructpage.html", "#", "#"];
        $proyek4["title"] = $proyek4Title;
        $proyek4["data"] = [
            $proyek4Data1, $proyek4Data2,
            $proyek4Data3, $proyek4Data4,
            $proyek4Data5, $proyek4Data6,
            $proyek4Data7, $proyek4Data8,
            $proyek4Data9, $proyek4Data10,
            $proyek4Data11, $proyek4Data12,
            $proyek4Data13, $proyek4Data14,
            $proyek4Data15
        ];

        
        $setProyek = [$proyek3, $proyek1, $proyek4, $proyek2];
        
        return $setProyek;        
    }
}