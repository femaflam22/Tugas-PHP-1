<?php
    class Tes{
        //ini property
        public $nama;

        //ini method
        function cobaTes(){
            return "Nama : Fema Flamelina Putri <br> NIS : 11907154 <br> Rombel : RPL XI-2 <br> Rayon : Cicurug 3 <br>";
        }
    }

    //ini object
    $panggil = new Tes();
    echo $panggil -> cobaTes(). "<br>". "<br>";
    echo var_dump($panggil);

?>