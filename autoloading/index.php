<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 500000, 120);

$produk2 = new Game("AoV", "Tencent", "Garena", 1000000, 1000);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();





