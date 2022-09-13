<?php
// koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud2022";

// buat koneksi
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));


// jika tombol simpan diklik
if(isset($_POST['bsimpan'])){

    // pengujian apakah data akan diedit atau disimpan baru
    if(isset($_GET['hal']) == "edit") {
        // data akan diedit
        $edit = mysqli_query($koneksi, "UPDATE tabelguru SET
                                               kode = '$_POST[tkode]',
                                               nama = '$_POST[tnama]',
                                               asal = '$_POST[tasal]',
                                               usia = '$_POST[tusia]',
                                               bidang = '$_POST[tbidang]',
                                               tanggal_lahir = '$_POST[ttanggal_lahir]'
                                        WHERE id_guru = '$_GET[id]'       
                                       ");

 //uji jika edit data sukses
 if($edit){
    echo "<script>
           alert('edit data Sukses!');
           document.location='index.php';
        </script>";
}else{
    echo "<script>
            alert('edit data Gagal!');
             document.location='index.php';
         </script>";
}

    }else{
         // data akan disimpan baru
    $simpan = mysqli_query($koneksi, " INSERT INTO tabelguru (kode, nama, asal, usia, bidang, tanggal_lahir)
                                        VALUE ( '$_POST[tkode]',
                                                '$_POST[tnama]',
                                                '$_POST[tasal]',
                                                '$_POST[tusia]',
                                                '$_POST[tbidang]',
                                                '$_POST[ttanggal_lahir]' )
                                                ");
        //uji jika simpan data sukses
            if($simpan){
                echo "<script>
                alert('Simpan data Sukses!');
                document.location='index.php';
                </script>";
            }else{
                echo "<script>
                alert('Simpan data Gagal!');
                document.location='index.php';
                </script>";
            }
    }
}

// deklarasi variabel untuk menampung data yang akan diedit
$vkode = "";
$vnama = "";
$vasal = "";
$vusia = "";
$vbidang = "";
$vtanggal_lahir = "";





// pengujian jika tombol edit / hapus diklik
if (isset($_GET['hal'])) {

    // pengujian jika edit data
    if($_GET['hal'] == "edit") {

        // tampilkan data yang akan diedit
        $tampil = mysqli_query($koneksi, "SELECT * FROM tabelguru WHERE id_guru = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if($data){
            // jika data ditemukan maka, data ditampung ke dalam divariabel
            $vkode = $data['kode'];
            $vnama = $data['nama'];
            $vasal = $data['asal'];
            $vusia = $data['usia'];
            $vbidang = $data['bidang'];
            $vtanggal_lahir = $data['tanggal_lahir'];

        }
    } else if ($_GET['hal'] == "hapus") {
        // persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM tabelguru WHERE id_guru = '$_GET[id]' ");
        //uji jika hapus data sukses
        if($hapus){
            echo "<script>
            alert('Hapus data Sukses!');
            document.location='index.php';
            </script>";
        }else{
            echo "<script>
            alert('Hapus data Gagal!');
            document.location='index.php';
            </script>";
        }
    }
}



?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
<!-- awal container -->
<div class="container">
    <h3 class="text-center">Data Guru</h3>
    <h3 class="text-center">SMK Penerbangan Lahud Iswahjudi</h3>
<!-- awal row -->
    <div class="row">
<!-- awal col -->
        <div class="col-md-8 mx-auto">
<!-- awal card -->
            <div class="card">
                <div class="card-header bg-info text-light">
                    Form Input Data Guru
                </div>
                <div class="card-body">
                   <!-- awal form -->
                   <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Kode Guru</label>
                        <input type="text" name="tkode" value="<?= $vkode ?>" class="form-control" placeholder="Masukan Kode Guru">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Guru</label>
                        <input type="text" name="tnama" value="<?= $vnama ?>" class="form-control" placeholder="Masukan Nama Guru">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asal Guru</label>
                        <select class="form-select" name="tasal">
                            <option value="<?= $vasal ?>"><?= $vasal ?></option>
                            <option value="Madiun">Madiun</option>
                            <option value="Magetan">Magetan</option>
                            <option value="Ngawi">Ngawi</option>
                            <option value="Pacitan">Pacitan</option>
                            <option value="Ponorogo">Ponorogo</option>
                        </select>                   
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Usia</label>
                                <input type="number" name="tusia" value="<?= $vusia ?>" class="form-control" placeholder="Masukan Usia Anda">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                            <label class="form-label">Bidang</label>    
                            <select class="form-select" name="tbidang">
                                <option value="<?= $vbidang ?>"><?= $vbidang ?></option>
                                <option value="Airframe Power Plant">Airframe Power Plant</option>
                                <option value="Aircraft Machining">Aircraft Machining</option>
                                <option value="Aircraft Sheet Metal Forming">Aircraft Sheet Metal Forming</option>
                                <option value="Airframe Mechanic">Airframe Mechanic</option>
                                <option value="Aircraft Electricity">Aircraft Electricity</option>
                                <option value="Aviation Electronics">Aviation Electronics</option>
                            </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="ttanggal_lahir"  value="<?= $vtanggal_lahir ?>" class="form-control" placeholder="Masukan Umur Anda">
                            </div>
                        </div>

                        <div class="text-center">
                            <hr>
                            <button class="btn btn-primary" name="bsimpan" type="submit">Simpan</button>
                            <button class="btn btn-danger" name="bkosongkan" type="reset">Kosongkan</button>
                        </div>

                    </div>

                   </form>
                   <!-- akhir form -->
                </div>
                <div class="card-footer bg-info">
                
                </div>
            </div>
<!-- akhir card -->
        </div>
<!-- akhir col -->
    </div>
<!-- akhir row -->

    <!-- awal card -->
    <div class="card mt-3">
                <div class="card-header bg-info text-light">
                    Data Guru
                </div>
                <div class="card-body">
                    <div class="col-md-6 mx-auto">
                        <form method="POST">
                            <div class="input-group mb-3">
                                <input type="text" name="tcari" class="form-control" 
                                placeholder="Masukan kata kunci">
                                <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                                <button class="btn btn-danger" name="breset"type="submit">Reset</button>
                            </div>
                        </form>

                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Kode guru</th>
                            <th>Nama Guru</th>
                            <th>Asal Guru</th>
                            <th>Usia</th>
                            <th>Bidang</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        // persiapan menampilkan data
                        $no = 1;
                        // untuk pencarian data
                        // jika tombol cari diklik
                        if(isset($_POST['bcari'])) {
                            // tampilkan data yang dicari
                            $keyword = $_POST['tcari'];
                            $q = "SELECT  * FROM tabelguru WHERE kode like '%$keyword%' or nama like '%$keyword%'  or asal like '%$keyword%' order by
                            id_guru desc ";
                        } else {
                            $q = "SELECT * FROM tabelguru order by id_guru desc";
                        }

                        $tampil = mysqli_query($koneksi, $q);
                        while ($data = mysqli_fetch_array($tampil)) :
                        ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['kode']?></td>
                            <td><?= $data['nama']?></td>
                            <td><?= $data['asal']?></td>
                            <td><?= $data['usia']?></td>
                            <td><?= $data['bidang']?></td>
                            <td><?= $data['tanggal_lahir']?></td>
                            <td>
                                <a href="index.php?hal=edit&id=<?= $data['id_guru'] ?>" class="btn btn-warning">Edit</a>

                                <a href="index.php?hal=hapus&id=<?= $data['id_guru'] ?>" 
                                class="btn btn-danger" onclick="return confirm('Apakah anda Yakin akan Hapus Data ini?')">Hapus</a>
                            </td>
                        </tr>

                        <?php endwhile; ?>

                    </table>
                   
                </div>
                <div class="card-footer bg-info">
                
                </div>
            </div>
<!-- akhir card -->






</div>    
<!-- akhir container -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>s