<?php

require_once 'App/init.php';

$produk1 = new Komik("Boku no hero", "mashashi kishinomoto", "shonen jump", 20000, 200);
$produk2 = new Game("Atelier Ryza", "Capcom", "Bandai Namco", 480000, 10);


// komik : Boku no hero | Mashashi kishinomoto, shonen jump (Rp. 30000) - 100 Halaman
// game : Atelier Ryza | capcom, Bandai namco (Rp. 20000) ~ 20 jam

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
