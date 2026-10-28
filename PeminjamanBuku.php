<?php

class Buku {
    public $judul;
    public $penulis;
    public $stok;

    public function __construct($judul, $penulis, $stok) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->stok = $stok;
    }

    public function tampilkanInfo() {
        echo "Buku<br>";
        echo "Judul: $this->judul<br>";
        echo "Penulis: $this->penulis<br>";
        echo "Stok: $this->stok<br>";
    }
}

class Anggota {
    public $nama;
    public $nim;

    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampilkanInfo() {
        echo "Anggota<br>";
        echo "Nama: $this->nama<br>";
        echo "NIM: $this->nim<br>";
    }
}

class Peminjaman {
    public $buku;
    public $anggota;
    public $tanggal;

    public function __construct($buku, $anggota, $tanggal) {
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->tanggal = $tanggal;
    }

    public function tampilkanInfo() {
        echo "Peminjaman<br>";
        echo "Anggota: " . $this->anggota->nama . "<br>";
        echo "Buku: " . $this->buku->judul . "<br>";
        echo "Tanggal Pinjam: $this->tanggal<br>";
        echo "Sisa Stok: " . ($this->buku->stok - 1) . "<br>";
    }
}

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 10);
$anggota1 = new Anggota("Dwipayani", "250030478");

$peminjaman1 = new Peminjaman(
    $buku1,
    $anggota1,
    "28-10-2026"
);

$buku1->tampilkanInfo();
echo "<br>";

$anggota1->tampilkanInfo();
echo "<br>";

$peminjaman1->tampilkanInfo();

?>