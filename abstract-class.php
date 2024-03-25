<!-- overriding adalah menimpa class parent ke class child -->
<?php

// jualan produk
// manga
// game

abstract class Produk
{
    private $nama,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;


    //visibility protected sehingga hanya bisa di akses oleh kelas tersebut dan turunan nya
    //visibility private sehingga hanya bisa di akses hanya oleh kelas tersebut


    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) //constructor
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100); //untuk menghitung diskon
    }

    public function getLabel() //method
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo()
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
        $str = "Komik :" . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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


    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . "~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() //supaya fungsi cetak hanya menerima parameter dari class produk
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Boku no hero", "mashashi kishinomoto", "shonen jump", 20000, 200);
$produk2 = new Game("Atelier Ryza", "Capcom", "Bandai Namco", 480000, 10);


// komik : Boku no hero | Mashashi kishinomoto, shonen jump (Rp. 30000) - 100 Halaman
// game : Atelier Ryza | capcom, Bandai namco (Rp. 20000) ~ 20 jam

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
