<?php

//include koneksi database
include('koneksi.php');

// Sanitasi input
$id_siswa     = mysqli_real_escape_string($connection, $_POST['id_siswa']);
$nisn         = mysqli_real_escape_string($connection, $_POST['nisn']);
$nama_lengkap = mysqli_real_escape_string($connection, $_POST['nama_lengkap']);
$alamat       = mysqli_real_escape_string($connection, $_POST['alamat']);

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

?>