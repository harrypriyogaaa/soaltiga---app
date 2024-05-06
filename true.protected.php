<?php
// Kelas induk
class Pegawai {
    protected $nama = "Harry Priyoga";
    // Metode protected untuk mengakses properti protected
    protected function getNama() {
        return $this->nama;
    }
}
// Kelas turunan
class Manajer extends Pegawai {
    public function tampilkanNama() {
        // Memanggil metode protected untuk mengakses properti protected
        return $this->getNama();
    }
}
// Penggunaan kelas turunan
$manajer = new Manajer();
echo $manajer->tampilkanNama(); // Output: Harry Priyoga
?>