<?php
$mahasiswa = [
                ["Aldenta Dhiwangga", "085213059868", "Teknik Informatika", "dentailham06@gmail.com"],
                ["Aldenta Dhiwangga", "085213059868", "Teknik Informatika", "dentailham06@gmail.com"],
                ["Aldenta Dhiwangga", "085213059868", "Teknik Informatika", "dentailham06@gmail.com"]
                
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
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>No.HP :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email<?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>