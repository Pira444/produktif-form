<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $barang_masuk = $_POST["barang_masuk"];
    $kode_barang  = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $jenis_barang = $_POST["jenis_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga_barang = $_POST["harga_barang"];
    $barang_keluar = $_POST["barang_keluar"];

    echo "<h2>Data Pemasukan Barang Tersimpan:</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>
            <tr>
                <th>Barang Masuk</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Barang</th>
                <th>Barang Keluar</th>
            </tr>
            <tr>
                <td>$barang_masuk</td>
                <td>$kode_barang</td>
                <td>$nama_barang</td>
                <td>$jenis_barang</td>
                <td>$jumlah_barang</td>
                <td>$harga_barang</td>
                <td>$barang_keluar</td>
            </tr>
          </table>";
}

echo "<br><br>
      <button>
        <a href='mimake.php' style='text-decoration:none;color:#004030;'>Kembali ke Form pemasukan barang</a>
      </button>";
?>