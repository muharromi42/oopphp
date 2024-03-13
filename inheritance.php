<?php

// jualan produk
// manga
// game

class Produk
{
    public $nama, //property
        $harga,
        $penulis,
        $penerbit,
        $jmlHalaman,
        $waktuMain;


    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) //constructor
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() //method
    {
        return "$this->nama, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga})";


        return $str;
    }
}

class Komik extends Produk //child class
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk) //supaya fungsi cetak hanya menerima parameter dari class produk
    {
        $str = "{$produk->nama} | {$produk->getLabel()} Rp. {$produk->harga}";
        return $str;
    }
}

$produk1 = new Komik("Boku no hero", "mashashi kishinomoto", "shonen jump", 20000, 200, 0);
$produk2 = new Game("Atelier Ryza", "Capcom", "Bandai Namco", 480000, 0, 10);


// komik : Boku no hero | Mashashi kishinomoto, shonen jump (Rp. 30000) - 100 Halaman
// game : Atelier Ryza | capcom, Bandai namco (Rp. 20000) ~ 20 jam


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
