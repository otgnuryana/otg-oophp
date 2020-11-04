<?php

class Produk{
    public $judul,  
           $penulis,
           $penerbit,
           $harga;
    public function __construct( $judul = "judul", 
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }    
    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 500000);

$produk2 = new Produk("AoV", "Tencent", "Garena", 1999000);
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
$produk3 = new Produk("Blend S");
