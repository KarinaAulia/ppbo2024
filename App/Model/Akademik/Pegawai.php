<?php

namespace App\Model\Akademik;
class Pegawai 
{
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() : bool
    {
        return true;
    }

    public function cekOut() : bool
    {
        return true;
    }

    protected function getNoHp()
    {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) : void {
        $this->no_hp = $no_hp;
    }

}