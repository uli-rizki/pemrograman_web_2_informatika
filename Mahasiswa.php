<?php 

class Mahasiswa {
    var $nim = "123";
    var $nama = "Andin";
    var $umur = 20;

    function perkenalan()
    {
        echo "Halo nama saya ".$this->nama." Umur saya ".$this->umur;
    }

    function ipk()
    {
        echo "IPK : 3.75";
    }

    function tambah_umur($tambahan) {
        return $this->umur + $tambahan;
    }
}

$mahasiswa = new Mahasiswa;
echo $mahasiswa->perkenalan()."<br/><br/>";

$akbar = new Mahasiswa;
$akbar->nama = "Akbar";
$akbar->umur = 21;
echo $akbar->perkenalan()."<br/>";

$akbar->tambah_umur(10);

?>