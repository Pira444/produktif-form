<h2>Peminjaman buku</h2>
<form action="perpus.php" method="post">
    <label>NISN</label>
    <input type="text" name="nisn" required><br>
    <label>Nama:</label>
    <input type="text" name="nama" required><br>
    <label>Kelas:</label>
    <input type="text" name="kelas" required><br>
    <label>Alamat:</label>
    <input type="text" name="alamat" required><br>
    <label>Judul Buku:</label>
    <input type="text" name="judulbuku" required><br>
    <label>Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" required><br>
    <input type="submit" value="Kirim">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nisn = $_POST["nisn"];
   $nama = $_POST["nama"];
   $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];
    $judul_buku = $_POST["judulbuku"];
   $tanggal_peminjaman = $_POST["tanggal_peminjaman"];

   echo "<h2>Peminjaman Buku Anda Berhasil:</h2>";
    echo "NISN: $nisn<br>";
   echo "Nama: $nama<br>";
   echo "Kelas: $kelas<br>";
   echo "Alamat: $alamat<br>";
   echo "Judul Buku: $judul_buku<br>";
   echo "Tanggal Peminjaman: $tanggal_peminjaman<br>";
}
?>