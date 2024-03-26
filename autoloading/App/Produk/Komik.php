<?php
class Komik extends Produk implements InfoProduk //child class
{
    public $jmlHalaman;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga})";


        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik :" . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
