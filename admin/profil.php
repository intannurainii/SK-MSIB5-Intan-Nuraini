<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
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
            position: sticky;
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
                    <h1><center><strong> Delicious Food Kurma Resto</strong></center></h1>
                    <div class=" flex-column mt-5 ml-2">
                        <div class="d-flex mb-1">
                            <div class="d-flex flex-column pr-4 align-items-center">
                            </div>
                            <div>
                                <h5 class="text-dark">Contact</h5>
                                <p class="lead text-muted pb-1">Phone: +6282242536479 <br>Email: kurmaresto@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <div class="d-flex flex-column pr-4 align-items-center">
                            </div>
                            <div>
                                <h5 class="text-dark">Place</h5>
                                <p class="lead text-muted pb-1">Jl. A. Yani no. 2 <br>Blora, 58211 <br>Indonesia</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <div class="d-flex flex-column pr-4 align-items-center">
                            </div>
                            <div>
                                <h5 class="text-dark">Opening Hours</h5>
                                <p class="lead text-muted">Mon-Sat: 11AM - 23PM <br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <div class="box-container mt-1">
                    </div>
                    <p></p>
                </div>

                <div class="col">
                    <img src="gambar/gedung-profil.jpg" alt="kurma Cafe" style="width: 600px; height: 400px;">
                    <div class="rounded bg-white text-black p-3">"Berlokasi di pusat kota, Kurma Resto & Coffee Shop adalah gabungan cafe dan restoran yang menampilkan suasana yang tenang dan nyaman. 
                        Desain interiornya yang modern dan elegan membuat pengunjung merasa nyaman di tengah meramaikan kota. 
                        Kesan santai ditambah dengan tampilan lantai kayunya yang mengkilap, hiasan tanaman yang segar, dan penerangan yang hangat."</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
