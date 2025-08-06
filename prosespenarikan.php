<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $rekening = $_POST["rekening"];
    $jumlah = $_POST["jumlah"];

    // saldo awal
    $saldo = 500000; // Rp 500.000

    echo "<h2>Hasil Penarikan</h2>";
    echo "Nama Nasabah: $nama <br>";
    echo "Nomor Rekening: $rekening <br>";
    echo "Jumlah Penarikan: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";

    // Validasi saldo cukup
    if ($jumlah > $saldo) {
        echo "<strong style='color:red;'>Saldo tidak mencukupi!</strong>";
    } else {
        $saldoAkhir = $saldo - $jumlah;
        echo "<strong style='color:green;'>Penarikan berhasil.</strong><br>";
        echo "Saldo Awal: Rp " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "Saldo Akhir: Rp " . number_format($saldoAkhir, 0, ',', '.');
    }
} else {
    echo "Akses tidak valid.";
}
?>

