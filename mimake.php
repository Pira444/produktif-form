<h2>Pemasukan Barang ke Gudang</h2>
<form action="mimake.php" method="post">
<label>Tanggal masuk:</label><br>
<input type="date" name="tanggal_masuk" required><br>
<label>Nama Barang:</label><br>
<input type="text" name="nama_barang" required><br>
<label>Jumlah Masuk:</label><br>
<input type="number" name="jumlah" required><br>
<input type="submit" name="submit" value="Simpan">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal_masuk = $_POST["tanggal_masuk"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah = $_POST["jumlah"];
    $jumlahmasuk = $_POST["jumlah"];

    echo "<h2>Data Pemasukan Barang Tersimpan:</h2>";
    echo "Tanggal masuk: $tanggal_masuk<br>";
    echo "Nama Barang: $nama_barang<br>";
    echo "Jumlah Masuk: $jumlah<br>";
}