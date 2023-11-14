<?php
include '../templates/header.php';
include '../includes/db.php';
?>

<section class="menu">


    <?php
    $query = mysqli_query($conn, "SELECT * FROM `menu`");

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<div class="menu-item">';
            echo '<h3>' . $row['nama_menu'] . '</h3>';
            echo '<img src="' . $row['gambar'] . '" alt="' . $row['nama_menu'] . '" width="150">';
            echo '<p>Price: $' . $row['harga'] . '</p>';
            echo '<button onclick="addToCart(' . $row['menu_id'] . ')">Add to Cart</button>';
            echo '</div>';
        }
    } else {
        echo "No menu items found.";
    }
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

<?php
include '../templates/footer.php';
?>
