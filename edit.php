<?php
require_once 'BukuDatabase.php';
$db = new BukuDatabase();
$id = $_GET['id'];
$buku = $db->ambilBuku($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->ubahBuku($id, $_POST['judul'], $_POST['penulis'], $_POST['tahun_terbit'], $_POST['harga']);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Edit Buku</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h1>Edit Buku</h1>
    <form method="post">
        <label>Judul: <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required></label><br>
        <label>Penulis: <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required></label><br>
        <label>Tahun Terbit: <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" required></label><br>
        <label>Harga: <input type="number" name="harga" value="<?= $buku['harga'] ?>" required></label><br>
        <button type="submit" class="tombol edit">Update</button>
    </form>
</div>
</body>
</html>
