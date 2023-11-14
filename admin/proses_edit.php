<?php
include 'koneksi.php';

$menu_id = $_GET["menu_id"];
$nama_menu = $_POST["nama_menu"];
$harga = $_POST["harga"];

// Upload Proses
if ($_FILES["fileToUpload"]["size"] != 0) {
    $target_dir = "gambar/"; // Set your target directory
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
        // If the file is uploaded successfully, update the database
        $result = mysqli_query($conn, "UPDATE `menu` SET `nama_menu` = '$nama_menu', `harga` = '$harga', `gambar` = '$target_file' WHERE `menu_id` = '$menu_id'");
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
} else {
    // If no new image is uploaded, update the database without changing the image path
    $result = mysqli_query($conn, "UPDATE `menu` SET `nama_menu` = '$nama_menu', `harga` = '$harga' WHERE `menu_id` = '$menu_id'");
}

header("Location: admin.php");
?>
