<?php


function kelilingLingkaran($jari) : float {
    $keliling_lingkaran = 2*3.14*$jari;
    return $keliling_lingkaran;
}

function volumeBola($jari) : float {
    $volume_bola = 4/3*3.14*$jari**3;
    return $volume_bola;

}

function volumeTabung($jari, $tinggi) : float {
    $volume_tabung = 3.14*$jari**2*$tinggi;
    return $volume_tabung;

}

function volumeKerucut($jari, $tinggi) : float {
    $volume_kerucut = 1/3*3.14*$jari**2*$tinggi;
    return $volume_kerucut;

}


$keliling_circle = kelilingLingkaran(21);
echo "Keliling lingkkaran dengan jari-jari 21 cm adalah {$keliling_circle}" . PHP_EOL;

$volume_ball = volumeBola(7);
echo "Volume bola budi yang berjari-jari 7 cm adalah {$volume_ball}" . PHP_EOL;

$volume_gelas = volumeTabung(3, 15);
echo "Volume gelas yang berjari-jari 3 cm dan tinggi 15 cm adalah {$volume_gelas}" . PHP_EOL;

$volume_topi = volumeKerucut(21, 30);
echo "Volume topi kerucut yang berjari-jari 21 cm dan tinggi 30 cm adalah {$volume_topi}" . PHP_EOL;