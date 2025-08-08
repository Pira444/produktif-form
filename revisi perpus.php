<h2>Peminjaman buku</h2>
<?php
$notif = "";
$disableSubmit = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nisn = $_POST["nisn"];
   $nama = $_POST["nama"];
   $kelas = $_POST["kelas"];
   $jurusan = $_POST["jurusan"];
   $judul_buku = $_POST["judulbuku"];
   $jumlah_pengambilanbuku = $_POST["jumlah_pengambilanbuku"];
   $tanggal_peminjaman = $_POST["tanggal_peminjaman"];
   $tanggal_pengembalian = $_POST["tanggal_pengembalian"];

   $awal = new DateTime($tanggal_peminjaman);
   $akhir = new DateTime($tanggal_pengembalian);
   $selisih = $awal->diff($akhir);
   $bulan = ($selisih->y * 12) + $selisih->m;

   if ($bulan > 3 || ($bulan == 3 && $selisih->d > 0)) {
       $notif = "<div style='padding:10px;background:#f8d7da;color:#721c24;
       border:1px solid #f5c6cb;margin-bottom:20px;width:fit-content;'>
       ❗ Maksimal peminjaman 3 bulan!
       </div>";
       $disableSubmit = true;
   }
}
?>
<?php if($notif) echo $notif; ?>
<form action="php.php" method="post">
    <label>NISN</label>
    <input type="text" name="nisn" required <?php if($disableSubmit) echo "readonly"; ?>><br>
    <label>Nama:</label>
    <input type="text" name="nama" required <?php if($disableSubmit) echo "readonly"; ?>><br>
    <label>Kelas:</label>
    <select name="kelas" required <?php if($disableSubmit) echo "disabled"; ?>>
        <option value="">-- Kelas --</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select><br>
    <label>Jurusan:</label>
    <select name="jurusan" required <?php if($disableSubmit) echo "disabled"; ?>>
        <option value="">-- Jurusan --</option>
        <option value="AKL">AKL</option>
        <option value="PS">PS</option>
        <option value="MPLB">MPLB</option>
        <option value="PPLG">PPLG</option>
        <option value="TJKT">TJKT</option>
        <option value="DKV">DKV</option>
        <option value="TM">TM</option>
        <option value="TO">TO</option>
        <option value="TL">TL</option>
        <option value="KL">KL</option>
    </select><br>
    <label>Judul Buku:</label>
    <select name="judulbuku" required <?php if($disableSubmit) echo "disabled"; ?>>
        <option value="">-- Pilih Buku --</option>
        <option value="misteri pintu kematian">misteri pintu kematian</option>
        <option value="337 tanya jawab piqih wanita">337 tanya jawab piqih wanita</option>
        <option value="kamus mahfudzot santri">kamus mahfudzot santri</option>
    </select><br>
    <label>jumlah pengambilan buku:</label>
    <input type="text" name="jumlah_pengambilanbuku" required <?php if($disableSubmit) echo "readonly"; ?>><br>
    <label>Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" required <?php if($disableSubmit) echo "readonly"; ?>><br>
    <label>tanggal pengembalian:</label>
    <input type="date" name="tanggal_pengembalian" required <?php if($disableSubmit) echo "readonly"; ?>><br>
    <input type="submit" value="Kirim" <?php if($disableSubmit) echo "disabled"; ?>>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$notif) {
   echo "<h2>Peminjaman Buku Anda Berhasil:</h2>";
   echo "NISN: $nisn<br>";
   echo "Nama: $nama<br>";
   echo "Kelas: $kelas<br>";
   echo "Jurusan: $jurusan<br>";
   echo "Judul Buku: $judul_buku<br>";
   echo "Jumlah Pengambilan Buku: $jumlah_pengambilanbuku<br>";
   echo "Tanggal peminjaman: $tanggal_peminjaman<br>";
   echo "Tanggal pengembalian: $tanggal_pengembalian<br>";
}
?>

<h3>Daftar Buku di Perpustakaan</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Sampul</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
    </tr>
    <tr>
        <td>1</td>
        <td><img src="http://opac.iainpalopo.ac.id:2200/lib/minigalnano/createthumb.php?filename=images/docs/cover_misteri-pintu-kematian-20230324135338.jpg&width=200" alt="ust.muhammad baidhowi as'ad" width="60"></td>
        <td>misteri pintu kematian</td>
        <td>ust.muhammad baidhowi as'ad</td>
        <td>S.L. : lumbung insani., 2008</td>
    </tr>
    <tr>
        <td>2</td>
        <td><img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/_337-Tanya-Jawab-Fiqih-Wanita.jpg" alt="337 tanya jawab piqih wanita" width="60"></td>
        <td>337 tanya jawab piqih wanita</td>
        <td>Ust.Abdullah Al-Marwi</td>
        <td>12 Jun 2019</td>
    </tr>
    <tr>
        <td>3</td>
        <td><img src="https://pustakaarafah.com/wp-content/uploads/2023/07/kamus-mahfudzat-santri-1.png" alt="kamus mahfudzot santri" width="60"></td>
        <td>kamus mahfudzot santri</td>
        <td>-</td>
        <td>-</td>
    </tr>
</table>