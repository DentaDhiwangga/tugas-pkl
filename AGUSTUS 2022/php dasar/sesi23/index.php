<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>
<link rel="stylesheet" type="text/css" href="editindex.css">
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 123px;
            left: 280px;
            z-index: -1;
            display: none;
        }

        @media print {
            .logout, .tambah, .form-cari, .aksi {
                display: none;
            }
        }

    </style>    
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>  |

    

    <a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
    <br><br>
    <h1>Daftar Mahasiswa</h1>

    <form action="" method="post" class="form-cari">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>

        <img src="img/loader.gif" class="loader">


    </form>
    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th class="aksi">Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</thd>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?> </td>
                    <td class="aksi">
                        <a href="ubah.php?id=<?= $row["id"]; ?>"> <input type='=button' class='btn-ubah'> </a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('yakin?');"> <input type='=button' class='btn-delete'> </a>
                    </td>

                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["nrp"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
   
</body>

</html>