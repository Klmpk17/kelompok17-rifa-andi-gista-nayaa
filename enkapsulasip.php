<?php 
  class rumah{
    public $warna;
    public $ukuran;
    
    function tampilkan_warna(){
        return "warna rumah saya adalah putih <br/>";
        }
  }
  $rumah = new rumah();
  echo $rumah->tampilkan_warna();
  ?>
