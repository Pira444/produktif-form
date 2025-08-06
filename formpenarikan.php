<!DOCTYPE html>
<html>
<head>
    <title>Form Penarikan - Bank Mini SMKN 1 SUBANG</title>
</head>
<body>
    <h2>Form Penarikan Uang - Bank Mini</h2>
    <form action="prosespenarikan.php" method="post">
        <label for="nama">Nama Pemilik Rekening:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="rekening">Nomor Rekening:</label><br>
        <input type="text" id="rekening" name="rekening" required><br><br>

        <label for="kelompok">Kelompok Nasabah:</label><br>
        <select name="kelompok" required>
            <option value="">Pilih</option>
            <option value="Guru">Guru</option>
            <option value="Siswa">Siswa</option>
            <option value="Umum">Umum</option>
        </select><br><br>

        <label for="jumlah">Jumlah Penarikan (Rp):</label><br>
        <input type="number" id="jumlah" name="jumlah" min="2000" step="1000" required><br><br>

        <input type="submit" value="Tarik Dana">
    </form>
</body>
</html>
