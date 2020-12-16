<?php
class rumah{
  var $warna;
  var $ukuran;
  
  function __construct(){
      echo "ini adalah isi metohd consrtuct <br>";
}
  function __destruct(){
      echo "ini adalah isi metohd destruct <br>";
}
 function tampilkan_warna(){
      return "warna rumah saya adalah putih <br>";
      }
}
$rumah = new rumah();
echo $rumah->tampilkan_warna();
?>
