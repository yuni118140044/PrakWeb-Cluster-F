<?php
function harga($x){
    $z=strlen($x);

    if($z<=10){
        $harga = $z * 300;
        $y = "merah";
    }
    else if($z<=20){
        $harga = $z * 500;
        $y = "biru";
    }
    else{
        $harga = $z * 700;
        $y = "hijau";
    }

    echo  "<br><h3> Bet dengan nama ".$x.", dengan harga : Rp.".$harga. " warna yang dihasilkan pada Bet : ".$y;
}
echo harga("test");
echo harga("Yuni Nurdiyanti");
?>