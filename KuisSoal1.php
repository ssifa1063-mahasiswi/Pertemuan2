<?php

$angka = range(1, 20); // bikin array 1-20 otomatis

foreach ($angka as $n) {
    if ($n % 3 == 0) {
        echo "$n <br>";
    }
}