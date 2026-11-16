
<?php

$nama = "Aditya Rayyan Heristyanto"; // String
$kota = "Bogor";                     // String
$tanggal_lahir = "11 July 2010";      // String
$hobi1 = "Coding";                  // String
$hobi2 = "Bermain Basket";             // String
$alamat = "Ciomas, Bogor";           // String

echo "<h2>BIODATA</h2>";

echo "Halo, nama saya $nama. Saya lahir di kota $kota pada tanggal $tanggal_lahir. Saya mempunyai hobi $hobi1 dan $hobi2. Saya tinggal bersama keluarga di $alamat.";

echo "<hr>";


$barang = [
    "Indomie" => 5000,
    "Air Mineral" => 4000,
    "Roti" => 10000,
    "Keju" => 20000
];

$total = 0;       // Integer
$diskon = 0;      // Integer
$persentase = 0;  // Integer

echo "<h2>DAFTAR BELANJA</h2>";

foreach ($barang as $nama_barang => $harga) {
    echo "$nama_barang = Rp " . number_format($harga, 0, ',', '.') . "<br>";

    $total = $total + $harga;
}

echo "<hr>";

echo "Total Belanja: Rp " . number_format($total, 0, ',', '.') . "<br>";

if ($total >= 20000) {
    $persentase = 20;
} elseif ($total >= 10000) {
    $persentase = 10;
} else {
    $persentase = 0;
}

$diskon = $total * $persentase / 100;


$bayar = $total - $diskon;

echo "Diskon: $persentase% <br>";
echo "Potongan Harga: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Pembayaran: Rp " . number_format($bayar, 0, ',', '.') . "<br>";

?>
