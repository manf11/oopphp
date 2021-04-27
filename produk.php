<?php

//sk produk
//komik dan game

class Produk{
    public $judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga =0;

    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLable(){
        return "$this->penulis,$this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "logitech";
// $produk2->tambahProperty ="haha";
// var_dump($produk2);

$produk3 =new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "ahlis";
$produk3->penerbit = "gramed";
$produk3->harga = 10000;


$produk4 = new Produk();
$produk4->judul = "blade";
$produk4->penulis = "sahal";
$produk4->penerbit = "sony computer";
$produk4->harga = 20000;

echo "komik :" . $produk3->getLable();
echo "<br>";
echo "game:" . $produk4->getLable();