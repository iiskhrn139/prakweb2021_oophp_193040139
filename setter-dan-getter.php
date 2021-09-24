<?php

//jualan produk
//komik
//game

class Produk {
    private $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0; 

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbt($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
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
        public $jmlHalaman;
        public __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
        $harga = 0, $jmlHalaman= 0){
            parent ::__construct($judul, $penulis, $penerbit,$harga);
            $this->jmlHalaman = $jmlHalaman;

        };
        public function getInfoKomik(){
            $str = " Komik : " . parent::getInfoProduk() . "- {$this->jmlHalaman} halaman.";
            return $str;
        }

    }
    class Game extends Produk {
        public $waktuMain;
        public __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
        $harga = 0, $waktuMain= 0){
            parent ::__construct($judul, $penulis, $penerbit, 
            $harga);
            $this->waktuMain = $jwaktuMain;

        };
        public function gerInfoProduk(){
            $str = " Game : " . parent::getInfoProduk() . "~ {$this->waktuMain} jam.";
            return $str;
        }
    }

class CetakInfoProduk {
    public function cetak($produk){
        $str = "($produk->judul) | ($produk->getLabel()),(Rp.($produk->harga))";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto ","Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Judul Baru");
echo $produk1->getJudul();

























?>