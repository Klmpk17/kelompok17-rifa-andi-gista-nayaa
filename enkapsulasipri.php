<?php 
  class rumah{
    private $warna = "putih";
    public function tampilkan_warna(){
        return "warna rumah saya" .$this->warna;
        }
  }
  $rumah = new rumah();
  echo $rumah->tampilkan_warna();
  ?>
