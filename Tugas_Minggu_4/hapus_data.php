<?php
session_start();
include 'connected.php';
include 'security.php';

$id = $_POST['id'];

$query = "DELETE FROM Data_Mahasiswa WHERE id=?";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param("i", $id);
$dewan1->execute();

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>