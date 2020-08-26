<?php
class Produk{

    //ini property yang telah di set nilai default nya
    public $namaBarang = "Laptop",
            $merk = "DELL",
            $harga = 5000000;

    //ini method
    public function sayHai()
    {
        return "Hallo saya Fema :)";
    }
    public function getCetak()
    {
        return "$this->namaBarang, $this->merk, $this->harga";
    }

}

//ini object
//mengubah isi nilai default pada namaBarang
//menggunakan fungsi var_dump untuk mengetahui jenis tipe datanya
$produk1 = new Produk();
$produk1->namaBarang="Earphone";
var_dump($produk1);

echo "<br>";
echo "<br>";

$produk2 = new Produk();
$produk2->namaBarang="Tas Laptop";
echo "Pesanan 1 : " . $produk2->namaBarang;

echo "<br>";
echo "<br>";

$produk3 = new Produk();
$produk3->namaBarang="Charger";
$produk3->harga=100000;
echo "Pesanan 2 : " . $produk3->getCetak();

?>