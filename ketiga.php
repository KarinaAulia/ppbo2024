<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    } 

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    } 

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    } 

    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    } 

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


$kue = new Lingkaran(15);
echo "Luas lingkaran berjari-jari 15 cm adalah {$kue->luas()} cm^2" . PHP_EOL;
echo "Keliling lingkaran berjari-jari 15 cm adalah {$kue->keliling()} cm" . PHP_EOL;

$bola = new Bola(21);
echo "Volume bola berjari-jari 21 cm adalah {$bola->volume()} cm^3" . PHP_EOL;

$gelas = new Tabung(3, 10);
echo "Volume gelas berjari-jari 3 cm dan tinggi 10 cm adalah {$gelas->volume()} cm^3" . PHP_EOL;

$tumpeng = new Kerucut(7, 20);
echo "Volume tumpeng dengan jari-jari 7 cm dan tinggi 20 cm adalah {$tumpeng->volume()} cm^3" . PHP_EOL;

