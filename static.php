<?php

class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return "Halo dek " . self::$angka++ . " Kali";
    }
}



echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();


class Contoh
{
    public static $number = 1;

    public function hai()
    {
        return "Halo bang " . self::$number++ . " Kali <br>";
    }
}

echo "<hr>";

$obj = new Contoh;
echo $obj->hai();
echo $obj->hai();
echo $obj->hai();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hai();
echo $obj2->hai();
echo $obj2->hai();
