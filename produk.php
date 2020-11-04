<?php

class Produk{
    // property
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";

    //method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->produkBaru = "Naruto";
// var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Naruto";
$produk2->penulis = "Masashi Kishimoto";
$produk2->penerbit = "Erlangga";
$produk2->harga = 50000;

$produk3 = new Produk();
$produk3->judul = "Valorant";
$produk3->penulis = "Patrick Star";
$produk3->penerbit = "Tencent";
$produk3->harga = 499000;
echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();