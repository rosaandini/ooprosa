<?php 

class Produk{
	public $judul = "judul",
		$penulis = "penulis",
		$penerbit = "penerbit",
		$harga = "0";
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

} 

// $produk1 = new produk();
// $produk1->judul ="Naruto";
// var_dumb($produk1);

// $produk2 = new produk();
// $produk2->judul = "uncharted";
// $produk2->tambahproperty = "hahaha";
// var_dumb($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishmoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;

echo "Komik :" .$produk3->getLabel();
echo "<br>";
echo "Game :". $produk4->getLabel();
