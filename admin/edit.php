<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <script>
        function submitForm() {
            alert('Yeay successfully changed products !');
            window.location.href = 'admin.php'; // Ganti dengan URL tujuan yang sesuai
        }
    </script>
</head>

<body>
    <?php
    include 'koneksi.php';
    $menu_id = $_GET['menu_id'];
    $menu = mysqli_query($conn, "SELECT * FROM menu WHERE menu_id = $menu_id");

    while ($m = mysqli_fetch_array($menu)) {
        $menu_id = $m["menu_id"];
        $gambar = $m["gambar"];
        $nama_menu = $m["nama_menu"];
        $harga = $m["harga"];
    }
    ?>
    <form action="proses_edit.php?menu_id=<?php echo $menu_id ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Menu ID</td>
                <td>:</td>
                <td><input type="number" name="menu_id" disabled value="<?php echo $menu_id ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <!-- Display the current image -->
                    <!-- <img src="<?php echo $gambar; ?>" width="100"> -->
                </td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td>:</td>
                <td><input type="text" name="nama_menu" value="<?php echo $nama_menu ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" value="<?php echo $harga ?>"></td>
            </tr>
            <!-- File input for editing the image -->

        </table>
        <input type="submit" name="Submit" value="Simpan" onclick="submitForm()">
    </form>
</body>

</html>
