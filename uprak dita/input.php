<?php
require_once("config.php");
$data1 = $_POST['tgl_peminjaman'];
$data2 = $_POST['tgl_kembali'];
$data3 = $_POST['no_identitas'];
$data4 = $_POST['kode_barang'];
$data5 = $_POST['jumlah'];
$data6 = $_POST['keperluan'];
$data7 = $_POST['status'];
$data8 = '1';
$sql="INSERT INTO peminjaman VALUES('$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8')";
var_dump($sql);
$simpan=mysqli_query($koneksi,$sql);
if($simpan){
    header("location:peminjaman.php");
}
?>