<?php
//fungsi dengan nilai balik
// pembuatan fungsi
function perkalian($a,$b){
    $hasil = $a * $b;
    return $hasil;
}
// pemnaggilan fungsi
$hasil = perkalian(4,5);
echo "perkalian 4 x 5 adalah $hasil";
echo "<br>";
echo "perkalian 7 x7 adalah ".perkalian(7,7);

?>