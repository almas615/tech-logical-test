<?php

function pembagian($pembilang, $penyebut)
{
    $hasil = $pembilang;
    $totalBagi = 0;
    while ($hasil >= $penyebut) {
        $hasil = $hasil - $penyebut;
        echo $hasil;
        $totalBagi++;
        echo $totalBagi;
        echo "=====================\n";
    }
    echo $totalBagi;
}

pembagian(7, 3);
