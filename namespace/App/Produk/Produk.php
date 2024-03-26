<?php
abstract class Produk
{
    protected $nama,
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


    abstract public function getInfo();
}
