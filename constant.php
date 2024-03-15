<?php

define("NAMA", "Muharromi"); //define tidak bisa di simpan didalam class
echo NAMA;

echo "<br>";

const UMUR = 21; //bisa dimasukkan kedalam class
echo UMUR;


echo "<hr>";

class Coba
{
    const KELAS = "6IF";
}

echo Coba::KELAS;

// magic const
echo "<br>";
echo __LINE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __CLASS__;


function magic()
{
    return __FUNCTION__;
}

echo magic();
