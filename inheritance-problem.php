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
        $waktuMain,
        $tipe;


    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) //constructor
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() //method
    {
        return "$this->nama, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->nama} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

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

$produk1 = new Produk("Boku no hero", "mashashi kishinomoto", "shonen jump", 20000, 200, 0, "Komik");
$produk2 = new Produk("Atelier Ryza", "Capcom", "Bandai Namco", 480000, 0, 10, "Game");


// komik : Boku no hero | Mashashi kishinomoto, shonen jump (Rp. 30000) - 100 Halaman
// game : Atelier Ryza | capcom, Bandai namco (Rp. 20000) ~ 20 jam


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
