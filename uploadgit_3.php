<?php
class Produk{

    //ini property
    public $namaBarang,
            $merk,
            $harga;

    //ini constructor dengan parameter yang memiliki nilai default
    public function __construct($namaBarang="nama_barang",$merk="merk",$harga=0){
        $this->namaBarang = $namaBarang;
        $this->merk = $merk;
        $this->harga = $harga;
    }

    //ini method
    public function getCetak()
    {
        return "$this->namaBarang | $this->merk | $this->harga";
    }

}

//ini object
//mengisi parameter constructor
$produk1 = new Produk("Earphone", "Samsung", 50000);
$produk2 = new Produk("Laptop", "Dell", 4000000);
$produk3 = new Produk("Tas Laptop", "Dell", 35000);

//menampilkan object
echo "Pesanan 1 : " . $produk1->getCetak();
echo "<br>";
echo "Pesanan 2 : " . $produk2->getCetak();
echo "<br>";
echo "Pesanan 2 : " . $produk3->getCetak();

?>