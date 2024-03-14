<!-- overriding adalah menimpa class parent ke class child -->
<?php

// jualan produk
// manga
// game

class Produk
{
    public $nama, //property
        $penulis,
        $penerbit;

    protected $diskon = 0;

    private $harga; //visibility protected sehingga hanya bisa di akses oleh kelas tersebut dan turunan nya
    //visibility private sehingga hanya bisa di akses hanya oleh kelas tersebut


    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) //constructor
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100); //untuk menghitung diskon
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
    public $jmlHalaman;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik :" . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk
{
    public $waktuMain;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . "~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik("Boku no hero", "mashashi kishinomoto", "shonen jump", 20000, 200);
$produk2 = new Game("Atelier Ryza", "Capcom", "Bandai Namco", 480000, 10);


// komik : Boku no hero | Mashashi kishinomoto, shonen jump (Rp. 30000) - 100 Halaman
// game : Atelier Ryza | capcom, Bandai namco (Rp. 20000) ~ 20 jam


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
