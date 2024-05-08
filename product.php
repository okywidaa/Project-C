<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <style>
    /* CSS Anda */
  </style>
</head>
<body>
  <header>
    <!-- Header Anda -->
  </header>

  <section class="product">
    <div id="product1">
      <h2>Bluder Single</h2>
      <img src="product1.jpg" alt="Product 1">
      <p>Puaskan hasrat bludermu dengan Bluder Single yang legendaris! Ukurannya yang pas untuk dinikmati sendiri dan cocok untuk parcel oleh-oleh. Menghadirkan kelembutan dalam setiap gigitan. Bluder Single, camilan istimewa untuk menemani momen spesialmu.</p>
      <p>Price: Rp 35.000,-</p>
      <button onclick="addToCart('Bluder Single', 35000)">Add to Cart</button>
    </div>

    <div id="product2">
      <h2>Bluder Mini</h2>
      <img src="product2.jpg" alt="Product 2">
      <p>Kecil mungil, penuh rasa! Bluder Mini hadir untuk memuaskan keinginan bludermu dalam porsi mungil yang menggemaskan. Sempurna untuk dinikmati bersama keluarga dan teman. Rasakan sensasi bluder yang lembut dan manis dalam setiap gigitan Bluder Mini.</p>
      <p>Price: Rp 25.000,-</p>
      <button onclick="addToCart('Bluder Mini', 25000)">Add to Cart</button>
    </div>
    <!-- Tambahkan detail produk lain di sini -->
  </section>

  <footer>
    <!-- Footer Anda -->
  </footer>

  <script>
    function addToCart(productName, price) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      let existingItem = cart.find(item => item.name === productName);
      if (existingItem) {
        existingItem.quantity++;
      } else {
        cart.push({ name: productName, price: price, quantity: 1 });
      }
      localStorage.setItem('cart', JSON.stringify(cart));
      alert(productName + ' telah ditambahkan ke keranjang belanja.');
      window.location.href = 'cart.php'; // Arahkan ke halaman keranjang belanja
    }
  </script>
</body>
</html>
