<?php

$barang = array(
    array("ID" => 1, "PRODUK" => "Pepsodent", "STOK" => 30, "HARGA" => 11980),
    array("ID" => 2, "PRODUK" => "Dove", "STOK" => 20, "HARGA" => 22688),
    array("ID" => 3, "PRODUK" => "Sunlight", "STOK" => 15, "HARGA" => 12880),
    array("ID" => 4, "PRODUK" => "Baygon", "STOK" => 10, "HARGA" => 16779),
    array("ID" => 5, "PRODUK" => "Rinso", "STOK" => 20, "HARGA" => 20769),
    array("ID" => 6, "PRODUK" => "Downy", "STOK" => 15, "HARGA" => 12400),
    array("ID" => 7, "PRODUK" => "Le Mineral", "STOK" => 25, "HARGA" => 5650)
);

echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 60%; text-align: center; margin: auto;'>";
echo "<tr><th colspan='5'>Tabel Harga Barang</th></tr>";
echo "<tr><th>ID</th><th>PRODUK</th><th>STOK</th><th>HARGA</th><th>JUMLAH</th></tr>";

foreach ($barang as $item) {
    $jumlah = $item["STOK"] * $item["HARGA"];
    echo "<tr>";
    echo "<td>{$item["ID"]}</td>";
    echo "<td>{$item["PRODUK"]}</td>";
    echo "<td>{$item["STOK"]}</td>";
    echo "<td>" . number_format($item["HARGA"], 0, ',', '.') . "</td>";
    echo "<td>" . number_format($jumlah, 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>