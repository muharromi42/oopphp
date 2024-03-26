<?php

require_once 'App/init.php';

// $produk1 = new Komik("Boku no hero", "mashashi kishinomoto", "shonen jump", 20000, 200);
// $produk2 = new Game("Atelier Ryza", "Capcom", "Bandai Namco", 480000, 10);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser; //menggunakan alias
use App\Produk\User as ProdukUser; //menggunakan alias

new ServiceUser();
echo "<hr>";
new ProdukUser();
