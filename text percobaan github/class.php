<?php
// Mendefinisikan class "Mobil"
class Mobil {
    // Properti untuk menyimpan merk mobil
    public $merk;

    // Constructor untuk mengatur nilai awal dari properti
    public function __construct($merk) {
        $this->merk = $merk;
    }

    // Method untuk menampilkan pesan tentang mobil
    public function tampilkanInfo() {
        echo "Mobil ini adalah merk " . $this->merk . ".";
    }
}

// Membuat objek dari class "Mobil" dengan merk sebagai parameter
$mobil1 = new Mobil("Toyota");

// Memanggil method tampilkanInfo pada objek
$mobil1->tampilkanInfo();
?>
