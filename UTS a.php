<?php
// Array multidimensi yang berisi data produk
$data_produk = [
    ["ID" => 1, "Produk" => "Pepsodent", "Stok" => 30, "Harga" => 11980],
    ["ID" => 2, "Produk" => "Sunlight", "Stok" => 15, "Harga" => 12880],
    ["ID" => 3, "Produk" => "Baygon", "Stok" => 10, "Harga" => 16779],
    ["ID" => 4, "Produk" => "Dove", "Stok" => 20, "Harga" => 22688],
    ["ID" => 5, "Produk" => "Rinso", "Stok" => 20, "Harga" => 20769],
    ["ID" => 6, "Produk" => "Downy", "Stok" => 15, "Harga" => 12880],
    ["ID" => 7, "Produk" => "Le Mineral", "Stok" => 25, "Harga" => 5650]
];

// Menampilkan tabel dengan garis pembatas
echo "<table style='border-collapse: collapse; width: 100%;' border='1'>";
echo "<tr>
        <th style='padding: 8px; text-align: left;'>ID</th>
        <th style='padding: 8px; text-align: left;'>Produk</th>
        <th style='padding: 8px; text-align: left;'>Stok</th>
        <th style='padding: 8px; text-align: left;'>Harga</th>
        <th style='padding: 8px; text-align: left;'>Jumlah</th>
      </tr>";

foreach ($data_produk as $produk) {
    // Menghitung jumlah (Harga x Stok)
    $jumlah = $produk["Harga"] * $produk["Stok"];
    
    echo "<tr>";
    echo "<td style='padding: 8px;'>" . $produk["ID"] . "</td>";
    echo "<td style='padding: 8px;'>" . $produk["Produk"] . "</td>";
    echo "<td style='padding: 8px;'>" . $produk["Stok"] . "</td>";
    echo "<td style='padding: 8px;'>" . number_format($produk["Harga"], 0, ",", ".") . "</td>";
    echo "<td style='padding: 8px;'>" . number_format($jumlah, 0, ",", ".") . "</td>";
    echo "</tr>";
}

echo "</table>";
?>