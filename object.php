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

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul}|{$produk->getLabel()} (Rp.   {$produk->harga})";
        return $str;
    }
}


$produk1 =new Produk("naruto","ahlis","gramed",1000);
$produk2 =new Produk("blade","sahal","sony computer",20000);

echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "game :" . $produk2->getLabel();

$infoProduk1 = new CetakInfoProduk();
$infoProduk1->cetak($produk1);