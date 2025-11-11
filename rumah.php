<?php


class Rumah {

    public $warna;
    public $jumlahKamar;
    public $alamat;

    // --- BAGIAN CONSTRUCTOR ---
    public function __construct($warnaAwal, $kamarAwal, $alamatAwal) {
        $this->warna = $warnaAwal;
        $this->jumlahKamar = $kamarAwal;
        $this->alamat = $alamatAwal;
    }

    // --- METHOD TAMBAHAN ---
    public function kunciPintu() {
        return "Pintu di $this->alamat sudah dikunci!";
    }
}


function pasangListrik(Rumah $dataRumah) {
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna .
           " yang beralamat di " . $dataRumah->alamat;
}



// Membuat object Rumah
$rumahSaya = new Rumah("Merah", 4, "Jln. Merdeka No. 10");
$rumahTetangga = new Rumah("Kuning", 2, "Jln. Sudirman No. 20");

// --- CONTOH PEMAKAIAN PROPERTY ---
echo "Warna Rumah Saya: " . $rumahSaya->warna; 
echo "<br>";

echo "Jumlah Kamar Rumah Saya: " . $rumahSaya->jumlahKamar; 
echo "<br>";

echo "Alamat Rumah Tetangga: " . $rumahTetangga->alamat; 
echo "<br>";

// --- CONTOH PAKAI METHOD DARI CLASS ---
echo $rumahTetangga->kunciPintu(); 
echo "<br>";

// --- CONTOH PAKAI FUNGSI LUAR DENGAN OBJECT ---
echo pasangListrik($rumahSaya); 
echo "<br>";


$teksBiasa = "Ini cuma string";

?>
