<?php

include "tugas.php";

class buah
{
    var $ttlMangga, $ttlJambu, $ttlSalak;
   
    public function getMangga(){
        $this->ttlMangga = $this->mangga * 15000;
        echo '<h5 style="text-align: center; font-family : calibri"">Harga Mangga : '.$this->ttlMangga.'</h5>';
    }

    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getSalak(){
        $this->ttlSalak = $this->salak * 10000;
        echo '<h5 style="text-align: center; font-family : calibri">Harga Salak : '.$this->ttlSalak.'</h5>';
    }

    public function getJambu(){
        $this->ttlJambu = $this->jambu * 13000;
        echo '<h5 style="text-align: center; font-family : calibri"">Harga Jambu : '.$this->ttlJambu.'</h5>';
    }

    public function total(){
        $total = $this->ttlMangga + $this->ttlJambu + $this->ttlSalak;
        echo '<h5 style="text-align: center; font-family : calibri"">Total : '.$total.'</h5>';
    }
}

$mangga = $_POST["mangga"];
$salak = $_POST["salak"];
$jambu = $_POST["jambu"];
$transaksi = new buah($mangga, $salak, $jambu);
$transaksi->getMangga();
$transaksi->getSalak();
$transaksi->getJambu();
$transaksi->total();
?>