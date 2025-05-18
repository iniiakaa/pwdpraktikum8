<?php
require_once 'BukuDatabase.php';
$db = new BukuDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->tambahBuku($_POST['judul'], $_POST['penulis'], $_POST['tahun_terbit'], $_POST['harga']);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Tambah Buku</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h1>Tambah Buku</h1>
    <form method="post">
        <label>Judul: <input type="text" name="judul" required></label><br>
        <label>Penulis: <input type="text" name="penulis" required></label><br>
        <label>Tahun Terbit: <input type="number" name="tahun_terbit" required></label><br>
        <label>Harga: <input type="number" name="harga" required></label><br>
        <button type="submit" class="tombol tambah">Simpan</button>
    </form>
</div>
</body>
</html>
