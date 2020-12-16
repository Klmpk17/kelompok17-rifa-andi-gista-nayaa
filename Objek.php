<?php
class rumah{
var $warna;
var $ukuran;
   function tampilkan_warna(){
      return "warna rumah saya putih<br>";
   }
   function ukuran_rumah(){
      return "ukuran rumah saya 20M<br>";
   }
}
$rumah = new rumah();
echo $rumah->tampilkan_warna();
echo $rumah->ukuran_rumah();
?>
