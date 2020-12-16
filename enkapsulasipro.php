<?php 
  class rumah{
    protected $warna = "putih";
    protected function warna(){
        return "warna rumah saya" .$this->warna;
        }
    public function tampilkan_warna(){
        return $this->tampilkan_warna;
        }
  }
  $rumah = new rumah();
  echo $rumah->tampilkan_warna();
  ?>
