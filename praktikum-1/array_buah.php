<?php
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];
echo $ar_buah[2];

echo "<br/> Jumlah Buah : " . count($ar_buah);

echo "<br/>";

echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>" . $buah . "</li>";
}
echo "</ol>";

// Tambah Array
$ar_buah[] = "Durian";

// Update / Ubah 
$ar_buah[2] = "Manggis";

// Cetak Seluruh 
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
}
echo '</ul>';
