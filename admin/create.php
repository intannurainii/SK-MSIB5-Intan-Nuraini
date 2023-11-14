<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
include 'koneksi.php';
?>

  <form id="myForm" action="proses_create.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Menu ID</td>
            <td>:</td>
            <td><input type="number" name="menu_id"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
        </tr>
        <tr>
            <td>Nama Menu</td>
            <td>:</td>
            <td><input type="text" name="nama_menu"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga"></td>
        </tr>
    </table>
    <input type="submit" id="submitBtn" value="Simpan" disabled>
</form>
<script>
    $(document).ready(function () {
        $('#myForm input').on('input', function () {
            var allFilled = true;
            $('#myForm input').each(function () {
                if ($(this).val() === '') {
                    allFilled = false;
                    return false; // Exit the loop if any field is empty
                }
            });

            if (allFilled) {
                $('#submitBtn').prop('disabled', false);
            } else {
                $('#submitBtn').prop('disabled', true);
            }
        });
    });
</script>

</body>
</html>