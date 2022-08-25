<!-- Variabel super global di PHP adalah variabel bawaan yang bersifat global.
Variabel bawaan yang dimaksud adalah: variabel yang sudah otomatis ada tanpa 
perlu kita definisikan sendiri. Dan ia bersifat global dalam artian bisa kita
akses dari mana pun dan kapan pun. -->
<!-- 
Variabel Superglobals yang dimiliki PHP:
 1. $_GET
 2. $_POST
 3. $_REQUEST
 4. $_REQUEST
 5. $_SESSION
 6. $_COOKIE
 7. $_SERVER
 8. $_ENV
-->

<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Aldenta Dhiwangga", 
        "nrp" => " 0843274808",
        "email" => "kjedjbdi.com",
        "jurusan" => "Tani",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Lukman", 
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>

            <li><img src ="img/<?= $mhs["gambar"]; ?>"></li>
            <li> <a href="latihan2get&post.php?nama=<?= $mhs["nama"];?>&nrp=
            <?= $mhs["nrp"]; ?>&email= <?= $mhs["email"]; ?>$jurusan=
            <?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>  
    </ul>    
</body>
</html>      