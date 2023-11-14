let cartItems = [];

function addToCart(itemId) {
    console.log('Add to Cart clicked for item ID:', itemId);

    // Dapatkan informasi item berdasarkan itemId dari server atau database
    // Di sini, kita hanya menambahkannya ke keranjang sementara
    const selectedItem = { id: itemId, name: "Nama Menu", price: 10 }; // Ganti dengan data sesungguhnya

    // Cek apakah item sudah ada di keranjang
    const existingItem = cartItems.find(item => item.id === itemId);

    if (existingItem) {
        // Jika item sudah ada, tambahkan jumlahnya
        existingItem.quantity++;
    } else {
        // Jika item belum ada, tambahkan ke keranjang
        selectedItem.quantity = 1;
        cartItems.push(selectedItem);
    }

    // Perbarui tampilan keranjang
    updateCartView();
}

function updateCartView() {
    const cartList = document.getElementById("cart-items");
    const totalPriceElement = document.getElementById("total-price");

    // Bersihkan tampilan keranjang
    cartList.innerHTML = "";

    // Tampilkan item-item di keranjang
    cartItems.forEach(item => {
        const listItem = document.createElement("li");
        listItem.textContent = `${item.name} x${item.quantity} - $${item.price * item.quantity}`;
        cartList.appendChild(listItem);
    });

    // Hitung total harga
    const totalPrice = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    totalPriceElement.textContent = totalPrice.toFixed(2);
}

function checkout() {
    // Implementasikan proses checkout sesuai kebutuhan
    alert("Checkout clicked! Implement the checkout process.");
}
