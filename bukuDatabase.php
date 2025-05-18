<?php
class BukuDatabase {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'toko_buku';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    public function tampilkanBuku() {
        $stmt = $this->conn->prepare("SELECT * FROM buku");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tambahBuku($judul, $penulis, $tahun, $harga) {
        $stmt = $this->conn->prepare("INSERT INTO buku (judul, penulis, tahun_terbit, harga) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$judul, $penulis, $tahun, $harga]);
    }

    public function ambilBuku($id) {
        $stmt = $this->conn->prepare("SELECT * FROM buku WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function ubahBuku($id, $judul, $penulis, $tahun, $harga) {
        $stmt = $this->conn->prepare("UPDATE buku SET judul=?, penulis=?, tahun_terbit=?, harga=? WHERE id=?");
        return $stmt->execute([$judul, $penulis, $tahun, $harga, $id]);
    }

    public function hapusBuku($id) {
        $stmt = $this->conn->prepare("DELETE FROM buku WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
