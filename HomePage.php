<?php
namespace App\Guest;
class HomePage
{
    function tampil() : void {
        echo "Halaman depan guest";
    }
}

namespace App\Admin;
class HomePage
{
    function tampil() : void {
        echo "Halaman depan admin";
    }
}

namespace App\Admin;
class ManajemenArtikel
{
    public function tambah() : void
    {
        echo "Artikel berhasil ditambahkan";
    }
}


$hp = new \App\Guest\HomePage();
$hp->tampil();