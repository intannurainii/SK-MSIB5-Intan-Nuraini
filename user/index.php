<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page user</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Tambahkan beberapa tag meta untuk menyertakan informasi warna tema -->
<meta name="theme-color" content="#ffc107">
<meta name="msapplication-navbutton-color" content="#ffc107">
<meta name="apple-mobile-web-app-status-bar-style" content="#ffc107">

<!-- Tambahkan favicon untuk memberikan icon pada tab browser -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- Tambahkan font Google untuk gaya teks yang menarik -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

<!-- Tambahkan beberapa perubahan pada HTML dan CSS -->

</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="gambar/bihun.jpeg" alt="Restaurant Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="reservation-button">
                <a href="reservation.php">Make a Reservation</a>
            </div>
        </div>
    </header>

    <section class="menu">
        <h2>Menu</h2>
        <?php
            include 'koneksi.php';
            
            $query = mysqli_query($conn, "SELECT * FROM `menu`");

            if (mysqli_num_rows($query) > 0) {
                // Menampilkan menu
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '<div class="menu_id">';
                    echo '<h3>' . $row['nama_menu'] . '</h3>';
                    echo '<img src="gambar/' . $row['gambar'] . '" alt="' . $row['nama_menu'] . '" width="15">';                    echo '<p>harga: $' . $row['harga'] . '</p>';
                    echo '<button onclick="addToCart(' . $row['menu_id'] . ')">Add to Cart</button>';
                    echo '</div>';
                }
            } else {
                echo "No menu items found.";
            }

            // Tutup koneksi
            mysqli_close($conn);
        ?>
    </section>

    <section class="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
            <!-- Daftar item belanja akan ditambahkan di sini menggunakan JavaScript -->
        </ul>
        <p>Total: $<span id="total-price">0.00</span></p>
        <button onclick="checkout()">Checkout</button>
    </section>

    <script src="script.js" defer></script>
</body>
</html>
