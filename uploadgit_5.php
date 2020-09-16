<?php
class Produk{

    //ini property
    public $namaBarang,
            $merk,
            $ukuran,
            $kapasitas,
            $harga;

    //ini constructor dengan parameter yang memiliki nilai default
    public function __construct($namaBarang="nama_barang",$merk="merk",$harga=0,$ukuran="0 CM",$kapasitas="-"){
        $this->namaBarang = $namaBarang;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->ukuran = $ukuran;
        $this->kapasitas = $kapasitas;
    }

    //ini method
    public function getCetak()
    {
        return "$this->merk | $this->harga | $this->ukuran";
    }

    // mencetak lebih lengkap
    public function cetakInfo(){
        $str = " {$this->namaBarang} : {$this->getCetak()}";
        return $str;
    }
}

class Laptop extends Produk{
    public function cetakInfo(){
        $str = "Info Pemesanan {$this->namaBarang} : {$this->getCetak()} | KAPASITAS : $this->kapasitas <hr>";
        return "<h1>Jenis Laptop</h1> <br> 
                $str";
    }
}

class Aksesoris extends Produk{
    public function cetakInfo(){
        $str = "Info Pemesanan {$this->namaBarang} : {$this->getCetak()} <hr>";
        return "<h1>Jenis Aksesoris</h1> <br> 
                $str";
    }
}


//ini object
//mengisi parameter constructor
$produk1 = new Aksesoris("Earphone", "Samsung", 50000, "45 CM");
$produk2 = new Laptop("Laptop", "Dell", 4000000, "40 x 60 CM", "4GB");
$produk3 = new Aksesoris("Tas Laptop", "Dell", 35000, "40 x 60 CM", "-");

echo $produk1->cetakInfo() . "<br>";
echo $produk2->cetakInfo() . "<br>";
echo $produk3->cetakInfo() . "<br>";

?>
