<?php
// $mahasiswa = [
//     ["Aldenta Dhiwangga", "085213059868", "dntilhm@gmail.com", "Teknik Informatika"],
//     ["Aldenta Dhiwangga", "085213059868", "dntilhm@gmail.com", "Teknik Informatika"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Aldenta Dhiwangga", 
    "nrp" => " 0843274808",
    "email" => "kjedjbdi.com",
    "jurusan" => "Tani",
    "gambar" => "gambar1.jpg"
    ],
    [
    "nama" => "Aldenta", 
    "nrp" => " 0843278",
    "email" => "kjeddi.com",
    "jurusan" => "Tni",
    "gambar" => "gambar2.jpg"
    ],
];


?>

<!DOCTYPE html>
<html>
<head>  
    <title>Daftar Mahasiswa</title>
</head>
<body>      
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>    
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>Nrp :<?= $mhs["nrp"]; ?></li>
    <li>Email :.<?= $mhs["email"]; ?></li>
    <li>Jurusan<?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>