<?php

namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class TenagaKependidikan extends Pegawai
{
    public $gaji_pokok;

    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) 
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    } 

    public function cuti()
    { 
        echo "{$this->nama} sedang cuti";
    }
} 