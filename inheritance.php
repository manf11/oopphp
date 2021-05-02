<?php

//sk produk
//komik dan game

class Produk{
    public $judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga =0,$jmlHalaman = 0 ,$waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
    public function getInfoProduk(){
        $str= "{$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public function getInfoProduk()
    {
        $str= "Komik : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga}) - {$this->jmlHalaman}Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk()
    {
        $str= "Game : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga}) ~ {$this->waktuMain}Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul}|{$produk->getLabel()} (Rp.   {$produk->harga})";
        return $str;
    }
}


$produk1 =new Komik("naruto","ahlis","gramed",1000,100,0);
$produk2 =new Game("blade","sahal","sony computer",20000,0,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// echo "komik :" . $produk1->getLabel();
// echo "<br>";
// echo "game :" . $produk2->getLabel();

// $infoProduk1 = new CetakInfoProduk();
// $infoProduk1->cetak($produk1);