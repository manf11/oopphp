<?php

//sk produk
//komik dan game

class Produk{
    public $judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain,$tipe;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga =0,$jmlHalaman = 0 ,$waktuMain = 0,$tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
    public function getinfoLengkap(){
        $str= "{$this->tipe} : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";

        if($this->tipe =="komik"){
            $str .= "-{$this->jmlHalaman}Halaman.";
        }else if ($this->tipe== "game"){
            $str .= "~{$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul}|{$produk->getLabel()} (Rp.   {$produk->harga})";
        return $str;
    }
}


$produk1 =new Produk("naruto","ahlis","gramed",1000,100,0,"komik");
$produk2 =new Produk("blade","sahal","sony computer",20000,0,50,"game");


echo $produk1->getinfoLengkap();
echo "<br>";
echo $produk2->getinfoLengkap();
// echo "komik :" . $produk1->getLabel();
// echo "<br>";
// echo "game :" . $produk2->getLabel();

// $infoProduk1 = new CetakInfoProduk();
// $infoProduk1->cetak($produk1);