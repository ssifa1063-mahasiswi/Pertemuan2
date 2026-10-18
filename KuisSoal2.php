<?php

function hitungNilaiAkhir($tugas, $uts, $uas){
    $nilai_akhir = ($tugas * 0.30)+
                ($uts * 0.30)+
                ($uas * 0.30);

    return $nilai_akhir;
}

$tugas = 85;
$uts = 80;
$uas = 80;

$nilaiAkhir= hitungNilaiAkhir($tugas, $uts, $uas);

if ($nilaiAkhir>= 70){
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "Nilai Akhir:" . number_format($nilaiAkhir. 0). "<br>";
echo "Status: $status";