<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script> -->
    
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

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * from `menu`;");
                ?>
               <center><h1><b>Menu Makanan Kurma Resto:</b></h1> </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="create.php" onclick="myFunction()"> tambah produk </a> 
                <table id="dataTable" class="display">
                    <thead><tr>
                        <th>Menu ID</th>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr></thead>
                    <tbody>
        <!-- Data will be dynamically loaded here -->
    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "ajax": {
                "url": "get_data.php", // File PHP untuk mengambil data dari database
                "type": "POST"
                
            },
            "columns": [
              { "data": "menu_id" },
                {
                    "data": "gambar",
                    "render": function (data, type, row) {
                        // Display the image using an img tag
                        return '<img src="' + data + '" alt="' + row.nama_menu + '" width="50">';
                    }
                },
                { "data": "nama_menu" },
                { "data": "harga" },
                { "data": "actions" }
            ]
        });
    });
</script>

</body>
</html>