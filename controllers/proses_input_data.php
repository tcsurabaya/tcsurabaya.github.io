<?php


$nik                = $_POST['nik'];
$nama               = $_POST['nama'];
$nomor_isaku        = $_POST['nomor_isaku'];
$nomor_whatsapp     = $_POST['nomor_whatsapp'];



require_once '../koneksi.php';

$query = mysqli_query($koneksi, "INSERT INTO pengkinian_data VALUE ('', '$nik', '$nama', '$nomor_isaku', '$nomor_whatsapp')");

if($query) {
    echo "<script>alert('Data Berhasil Di Input'); window.location.href = '../index.html';</script>";
}else{
    echo "<script>alert('Data Gagal Di Input'); window.location.href = '../index.html';</script>";
}

?>