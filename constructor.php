<?php

//sk produk
//komik dan game

class Produk{
    public $judul,$penulis,$penerbit,$harga;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga =0)
    {
        $this->$judul = $judul;
        $this->$penulis = $penulis;
        $this->$penerbit = $penerbit;
        $this->$harga = $harga;
    }

    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
}


$produk1 =new Produk("naruto","ahlis","gramed",1000);
$produk2 =new Produk("blade","sahal","sony computer",20000);
$produk3 =new Produk("xiaomi");
echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "game :" . $produk2->getLabel();
var_dump($produk3);