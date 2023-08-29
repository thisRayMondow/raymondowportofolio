<?php
class nav {
    public function sendNav() {
       $sendNav = $this->setNav();
       return $sendNav;
    }
    
    private function setNav() {
        $navItem[] = 'beranda';
        $navItem[] = 'tentang';
        $navItem[] = 'info';
        $navItem[] = 'proyek';
        
        return $navItem;
    }
}