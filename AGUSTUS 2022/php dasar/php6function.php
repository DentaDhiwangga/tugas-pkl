<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    echo date ("l,d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH Time
    // Detik yang sudah berlalu sejak 1 januari 1970
    echo "<br>" . time ();

    echo "<br>" . date ("d M-Y", time()+60*60*60*24*34);

    // mktime
    // membuat sendiri detik
    // mktime (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    echo "<br>" . date ("l", mktime (0,0,11,24,2005));

?>



<?php
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>  
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Dentaaa"); ?></h1>
</body>
</html>    



<!-- MATERI FUNCTION

Fungsi (atau Function) di bahasa pemograman adalah kode program yang dirancang untuk menyelesaikan sebuah tugas tertentu,
dan merupakan bagian dari program utama. Kita dapat membuat fungsi sendiri, atau menggunakan fungsi yang dibuat oleh programmer lain.

Function atau fungsi pada PHP mirip dengan bahasa pemrograman lainnya. Function adalah bagian dari kode yang mengambil satu input lagi
dalam bentuk parameter dan melakukan beberapa pemrosesan dan mengembalikan nilai.

  
Aturan-aturan dalam pembuatan function adalah :
1. Aturan penamaan function mirip dengan penamaan variable. Terdiri dari huruf, angka dan underscore ( _ ). Nama function hanya boleh dimulai dengan huruf atau dengan underscore.</p>
2. Parameter sifatnya tambahan


yang ada hubunganya dengan function

Date-time
time()
date()
mktime()
strtotime()

String
strlen()
strcmp()
explode()
htmlspecialchars()

Utility
var-dump()
isset()
empty(</>
die()
sleep()


User-defined function yaitu fungsi yang kita buat sendiri. -->







