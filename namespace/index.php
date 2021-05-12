<?php

require_once 'App/init.php';

// $produk1 =new Komik("naruto","ahlis","gramed",1000,100);
// $produk2 =new Game("blade","sahal","sony computer",20000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();