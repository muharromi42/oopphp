<?php

// jualan produk
// manga
// game

class Produk
{
    public $nama = "Nama", //property
        $harga = 0,
        $jumlah = 0;

    public function getLabel() //method
    {
        return "$this->nama, $this->harga";
    }
}

// $produk1 = new Produk();
// $produk1->nama = "naruto";


// $produk2 = new Produk();
// $produk2->nama = "ryza";
// $produk2->tambahProperty = "tambah hehe";

// var_dump($produk1);
// var_dump($produk2);

$produk3 = new Produk();
$produk3->nama = "boku no hero";
$produk3->harga = 20000;
$produk3->jumlah = 2;

echo "komik : $produk3->nama , Harga : $produk3->harga";
echo "<br>";
echo $produk3->getLabel();
echo "<hr>";

$produk4 = new Produk();
$produk4->nama = "atelier ryza";
$produk4->harga = 480000;
$produk4->jumlah = 10;

echo "manga : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();
