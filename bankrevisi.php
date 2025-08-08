<?php
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $rekening = $_POST["rekening"];
    $kelompok = $_POST["kelompok"];
    $tipe = $_POST["tipe"];
    $jumlah = (int) $_POST["jumlah"];

    // saldo awal 
    $saldo = 500000; // Rp 500.000

    if ($tipe == "setor") {
        $saldo_akhir = $saldo + $jumlah;
    } else {
        $saldo_akhir = $saldo - $jumlah;
    }

    // hasil tabel
    $hasil = "
    <h3>Hasil Transaksi</h3>
    <table border='1' cellpadding='5'>
        <tr>
            <th>Nama</th>
            <th>Rekening</th>
            <th>Kelompok Nasabah</th>
            <th>Jenis Transaksi</th>
            <th>Jumlah</th>
            <th>Saldo Awal</th>
            <th>Saldo Akhir</th>
        </tr>
        <tr>
            <td>$nama</td>
            <td>$rekening</td>
            <td>$kelompok</td>
            <td>$tipe</td>
            <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
            <td>Rp " . number_format($saldo, 0, ',', '.') . "</td>
            <td>Rp " . number_format($saldo_akhir, 0, ',', '.') . "</td>
        </tr>
    </table>
    ";
}
?>

<h2>Form Bank Mini SMKN 1 SUBANG</h2>
<form method="post">
    Nama: <input type="text" name="nama" required><br><br>
    No Rekening: <input type="text" name="rekening" required><br><br>
    Kelompok: 
    <select name="kelompok" required>
        <option value="guru">Guru</option>
        <option value="siswa">Siswa</option>
        <option value="umum">Umum</option>
    </select><br><br>
    Jenis Transaksi: 
    <select name="tipe" required>
        <option value="setor">Penyetoran</option>
        <option value="tarik">Penarikan</option>
    </select><br><br>
    Jumlah: <input type="number" name="jumlah" required><br><br>
    <input type="submit" value="Proses">
</form>

<?php

if ($hasil) {
    echo $hasil;
}
?>