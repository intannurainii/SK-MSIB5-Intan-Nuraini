<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
            position: fixed;
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

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT m.*, dp.jumlah, dp.total FROM menu AS m LEFT JOIN detail_pemesanan AS dp ON m.menu_id = dp.menu_id;");
                ?>
                <div class="text-center">
                    <h1><b>Menu Makanan Kurma Resto:</b></h1>
                </div>
                <a class="btn btn-info" style="margin-bottom:5px" href="create.php" onclick="myFunction()"> Tambah Produk </a>
                <table id="dataTable" class="display">
                    <thead>
                        <tr>
                            <th>Menu ID</th>
                            <th>Gambar</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Jumlah Pesanan</th>
                            <th>Total Pesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be dynamically loaded here -->
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                // Calculate total for each row
                                $total = $data["jumlah"] * $data["harga"];
                        ?>
                                <tr>
                                    <td><?php echo $data["menu_id"] ?></td>
                                    <td><img src="<?php echo $data['gambar'] ?>" width=100px></td>
                                    <td><?php echo $data["nama_menu"] ?></td>
                                    <td><?php echo $data["harga"] ?></td>
                                    <td><?php echo $data["jumlah"] ?></td>
                                    <td><?php echo $total ?></td>
                                    <td>
                                        <a href="proses_delete.php?menu_id=<?php echo $data["menu_id"] ?>" class="label label-danger">Delete</a>
                                        &nbsp;
                                        <a href="edit.php?menu_id=<?php echo $data["menu_id"] ?>" class="label label-warning">Ubah</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>
