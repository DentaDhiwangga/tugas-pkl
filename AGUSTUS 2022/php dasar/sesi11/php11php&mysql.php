<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fecth) mahasiswa dafi objetc result
// mysqli_fecth_row() // mengembalikan array numerik
// mysqli_fecth_assoc() // mengembalikan array associative
// mysqli_fecth_arrray() // mengembalikan keduanya
// mysqli_fecth_objetc()
// wile ( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs[1]);
// }

?>


   