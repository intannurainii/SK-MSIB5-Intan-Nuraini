<?php
include '../../admin/koneksi.php';

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];
$menu_id = $_POST["menu_id"];
$jumlah = $_POST["jumlah"];
// Mulai transaksi
mysqli_begin_transaction($conn);

// Masukkan data ke tabel 'customer'
$queryCustomer = "INSERT INTO `customer` (`nama`, `alamat`, `telepon`) VALUES ('$nama', '$alamat', '$telepon')";
$resultCustomer = mysqli_query($conn, $queryCustomer);

// Periksa keberhasilan penyisipan data ke tabel 'customer'
if ($resultCustomer) {
    // Dapatkan ID terakhir yang dimasukkan ke tabel 'customer'
    $customerId = mysqli_insert_id($conn);

    // Masukkan data ke tabel 'pemesanan'
    $queryPemesanan = "INSERT INTO `pemesanan` (`customer_id`, `tanggal_pemesanan`) VALUES ('$customerId', NOW())";
    $resultPemesanan = mysqli_query($conn, $queryPemesanan);

    // Periksa keberhasilan penyisipan data ke tabel 'pemesanan'
    if ($resultPemesanan) {
        // Dapatkan ID terakhir yang dimasukkan ke tabel 'pemesanan'
        $pemesananId = mysqli_insert_id($conn);

        // Masukkan data ke tabel 'detail_pemesanan'
        $queryDetailPemesanan = "INSERT INTO `detail_pemesanan` (`pemesanan_id`, `menu_id`, `jumlah`) VALUES ('$pemesananId', '$menu_id', '$jumlah')";
        $resultDetailPemesanan = mysqli_query($conn, $queryDetailPemesanan);

        // Periksa keberhasilan penyisipan data ke tabel 'detail_pemesanan'
        if ($resultDetailPemesanan) {
            // Commit transaksi jika semuanya berhasil
            mysqli_commit($conn);
            echo "Data berhasil dimasukkan ke dalam semua tabel.";
        } else {
            // Rollback transaksi jika ada kesalahan
            mysqli_rollback($conn);
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Rollback transaksi jika ada kesalahan
        mysqli_rollback($conn);
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Rollback transaksi jika ada kesalahan
    mysqli_rollback($conn);
    echo "Error: " . mysqli_error($conn);
}

// Redirect ke halaman lain
header("Location:../index.php");
?>
