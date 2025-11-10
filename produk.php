<?php

class produk {
    // Properti umum
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    // Constructor milik Parent
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method milik Parent
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Method baru untuk mendapatkan info produk dasar (agar Komik bisa meng-override)
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends produk {

    // Properti khusus milik Komik
    public $jmlHalaman;

    // Constructor untuk Child Class
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // Set properti khusus
        $this->jmlHalaman = $jmlHalaman;
    }
    
    // Override method getInfoProduk() dari parent
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent :: __construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Override method getInfoProduk() dari parent
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


// Bagian Object
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// Menjalankan method
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// Penutup file PHP tidak wajib jika hanya berisi kode PHP, tapi tidak masalah jika ada.
// ?>