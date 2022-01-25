<?php

function pembagian($pembilang, $penyebut)
{
    $hasil = $pembilang;
    $totalBagi = 0;
    while ($hasil >= $penyebut) {
        $hasil = $hasil - $penyebut;

        $totalBagi++;
    }
    echo $pembilang . ":" . $penyebut . "=" . $totalBagi;
}

pembagian(7, 3);
