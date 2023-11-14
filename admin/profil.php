<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
body {
  font-size: 17px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #CCCCCC;
  /* position: -webkit-sticky; /* Safari */
  position: sticky; */
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #CCFFFF;
}

.active {
  background-color: #999999;
}
</style>
</head>

<body>
<ul>
  <li><a class="active" href="admin.php">Home</a></li>
  <li><a href="profil.php">Profil</a></li>
</ul>
    <div class="container mt-3">
        <div class="container-fluid bg-container">
        <div class="row">
            <div class="col">
                <h1><strong> Pelatihan & <br> Penyaluran Kerja. </strong></h1>
                <div class="stepper d-flex flex-column mt-5 ml-2">
                    <div class="d-flex mb-1">
                        <div class="d-flex flex-column pr-4 align-items-center">
                            <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">1</div>
                            <div class="line h-100"></div>
                        </div>
                        <div>
                            <h5 class="text-dark">Daftar, Get Free Class!</h5>
                            <p class="lead text-muted pb-1">Join komunitas belajar, dapatkan akses kelas &<br> materi
                                gratis</p>
                        </div>
                    </div>
                    <div class="d-flex mb-1">
                        <div class="d-flex flex-column pr-4 align-items-center">
                            <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">2</div>
                            <div class="line h-100"></div>
                        </div>
                        <div>
                            <h5 class="text-dark">Belajar Intensif</h5>
                            <p class="lead text-muted pb-1">Belajar didampingi virtual assistant & mentor<br> expert via
                                grup & 1-on-1 zoom mentoring</p>
                        </div>
                    </div>
                    <div class="d-flex mb-1">
                        <div class="d-flex flex-column pr-4 align-items-center">
                            <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">3</div>
                            <div class="line h-100 d-none"></div>
                        </div>
                        <div>
                            <h5 class="text-dark">Penyaluran Kerja Dijamin</h5>
                            <p class="lead text-muted">Dapatkan pekerjaan dengan gaji s.d 10jt lebih</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="container mt-2"> -->
                <!-- <div class="row"> -->
                <!-- <div class="col-md-6"> -->
                <!-- Elemen yang akan berisi kotak dan tombol -->
                <div class="box-container mt-1">
                    <div class="box" style="color: white;">Free</div>
                    <button type="button" class="btn btn-primary">Daftar Gratis</button>
                    <button type="button" class="btn btn-warning">Konsultasi Dulu</button><br><br>
                </div>
                <!-- </div> -->
                <!-- </div> -->
                <!-- </div> -->

                <p><strong>75,666</strong> Students & <strong>165</strong> Mentors has joined!</p>
            </div>


            <div class="col">
                <img src="gambar/bihun.jpeg" alt="Gambar Orang" style="width: 600px; height: 400px;">
                <div class="rounded bg-white text-black p-3 ">"Sebelumnya saya tidak punya background IT karena
                    jurusan Kimia, setelah saya belajar coding di Eduwork, Saya berhasil diterima kerja
                    di Tokopedia sebagai Programer."</div>

            </div>
        </div>
    </div>
</div>   
</div>
</body>

</html>