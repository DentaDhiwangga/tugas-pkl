<?php
// koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud2022";

// buat koneksi
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

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
    <h3 class="text-center">SMK Penerbangan</h3>
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
                        <input type="text" name="tkode" class="form-control" placeholder="Masukan Kode Guru">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Guru</label>
                        <input type="text" name="tnama" class="form-control" placeholder="Masukan Nama Guru">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asal Guru</label>
                        <select class="form-select" name="tasal">
                            <option>- Pilih -</option>
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
                                <label class="form-label">Umur</label>
                                <input type="number" name="tumur" class="form-control" placeholder="Masukan Umur Anda">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                            <label class="form-label">Bidang</label>    
                            <select class="form-select" name="tbidang">
                                <option>- Pilih -</option>
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
                                <input type="date" name="ttanggal_lahir" class="form-control" placeholder="Masukan Umur Anda">
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
                                <input type="text" name="tcari" class="form-control" placeholder="Masukan kata kunci">
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
                            <th>Umur</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        // persiapan menampilkan data
                        $tampil = mysqli_query($koneksi, "SELECT * FROM tguru order by id_guru desc");
                        while ($data = mysqli_fetch_array($tampil)) :
                        ?>

                        <tr>
                            <td>1</td>
                            <td>001.25a</td>
                            <td>Sugeng</td>
                            <td>Pacitan</td>
                            <td>25</td>
                            <td>1990-08-07</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
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