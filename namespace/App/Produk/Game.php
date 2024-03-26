<?php
class Game extends Produk implements InfoProduk
{
    public $waktuMain;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga})";


        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . "~ {$this->waktuMain} Jam.";
        return $str;
    }
}
