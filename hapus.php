<?php
require_once 'BukuDatabase.php';
$db = new BukuDatabase();
$id = $_GET['id'];
$db->hapusBuku($id);
header("Location: index.php");
exit;
