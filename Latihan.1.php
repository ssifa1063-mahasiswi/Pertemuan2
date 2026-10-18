<?php

function HitungLuasLingkaran($jari){
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari = 7;
$luas= HitungLuasLingkaran($jari);

echo "Luas lingkaran dengan jari-jari"
. $jari . "adalah"
. number_format($luas, 2, '.', '');
