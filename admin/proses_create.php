<?php 
include 'koneksi.php';

$menu_id = $_POST["menu_id"];
$nama_menu = $_POST["nama_menu"];
$harga = $_POST["harga"];
// $gambar = '';

// Upload Proses
$target_dir = "gambar/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `menu` (`menu_id`, `nama_menu`, `harga`, `gambar`) VALUES ('$menu_id', '$nama_menu', '$harga', '$target_file' );");

header("Location:admin.php");

?>