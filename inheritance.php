<?php

//jualan produk
//komik
//game

class Produk {
    public  $judul, 
            $penulis,
            $penerbit, 
            $harga,
            $jmlHalaman, 
            $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman  = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalamam = $jmlHalaman;
        $this -> waktuMain = $waktuMain;

    }


    public function getLabel (){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        // Komik : Naruto | Mashashi Kishimoto, Shanon Jump (30000) - 100 halaman
        $str = "Komik: {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }

}

    class Komik extends produk {
        public function getInfoKomik(){
            $str = " Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} halaman.";
            return $str;
        }

    }
    class Game extend Produk {
        public function gerInfoProduk(){
            $str = " Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ~ {$this->waktuMain} jam.";
            return $str;
        }
    }

class CetakInfoProduk {
    public function cetak($produk){
        $str = "($produk->judul) | ($produk->getLabel()),(Rp.($produk->harga))";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto ","Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted","Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// Komik : Naruto | Mashashi Kishimoto, Shanon Jump (30000) - 100 halaman
//Game : Uncharted |  Neil Druncmann, Sony Compuer ~ 50 jam

?>