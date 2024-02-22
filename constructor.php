<?php

// jualan produk
// manga
// game

class Produk
{
    public $nama, //property
        $harga,
        $jumlah;


    public function __construct($nama = "nama", $harga = 0, $jumlah = 0) //constructor
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
    }

    public function getLabel() //method
    {
        return "$this->nama, $this->harga";
    }
}

$produk1 = new Produk("Boku no hero", 20000, 2);
$produk2 = new Produk("Atelier Ryza", 480000, 10);
$produk3 = new Produk("metal slug", 20000);


echo "manga : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
