<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('H');
$menit = date('i');

if ($jam > 19 && $jam <= 5) {
    echo "Selamat Malam, {$nama}, sekarang pukul {$jam}:{$menit}\n";
} elseif ($jam > 15 ){
    echo "Selamat Sore, {$nama}, sekarang pukul {$jam}:{$menit}\n";
} elseif ($jam > 11) {
    echo "Selamat Siang, {$nama}, sekarang pukul {$jam}:{$menit}\n";
} elseif ($jam > 5) {
    echo "Selamat Pagi, {$nama}, sekarang pukul {$jam}:{$menit}\n";
}

