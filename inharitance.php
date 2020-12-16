<?php
class rumah{
    
    public $warna_saya;
    
    function beriwarna($saya){
    $this->warna_saya=$saya;
    }
}    

class tetangga extends rumah{
    public $warna_tetangga;
    function beriwarnatetangga($tetangga){
    $this->wrana_tetangga=$tetangga;
    }
}
$malasngoding = new tetangga;
$malasngoding->beriwarna("putih");
$malasngoding->beriwarnatetangga("merah");
echo "warna rumah saya :" . $malasngoding->warna_saya . "<br>";
echo "warna rumah tetangga saya :" . $malasngoding->warna_tetangga;
?>
