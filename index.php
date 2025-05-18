<?php
require_once 'BukuDatabase.php';
$db = new BukuDatabase();
$dataBuku = $db->tampilkanBuku();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Daftar Buku</h1>
    <a href="tambah.php" class="tombol tambah">+ Tambah Buku</a>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($dataBuku as $buku): ?>
            <tr>
                <td><?= htmlspecialchars($buku['judul']) ?></td>
                <td><?= htmlspecialchars($buku['penulis']) ?></td>
                <td><?= $buku['tahun_terbit'] ?></td>
                <td>Rp<?= number_format($buku['harga'], 2, ',', '.') ?></td>
                <td>
                    <a href="edit.php?id=<?= $buku['id'] ?>" class="tombol edit">Edit</a>
                    <a href="hapus.php?id=<?= $buku['id'] ?>" onclick="return confirmHapus()" class="tombol hapus">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="script.js"></script>
</body>
</html>
