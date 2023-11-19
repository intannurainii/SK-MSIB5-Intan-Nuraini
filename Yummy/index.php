      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Kurma Resto</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/kurmaicon.jpg" rel="icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function () {
      // Menangani peristiwa klik pada setiap menu item
      $('.menu-item').on('click', function () {
        // Menghapus kelas 'active' dari semua menu item
        $('.menu-item').removeClass('active');
        // Menambahkan kelas 'active' ke menu item yang diklik
        $(this).addClass('active');
      });
    });
  </script>

<style>
  .menu-item {
    border: 1px solid #ddd;
    border-radius: 20px;
    padding: 15px;
    margin-bottom: 20px;
    transition: all 0.5s; /* Animasi perubahan properti */
  }

  .menu-item.active {
    transform: scale(1.1); /* Mengubah ukuran menu item saat aktif */
    border-color: #ff5733; /* Warna border saat aktif */
  }
</style>


      </head>

      <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
          <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
              <h1>Kurma<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
              <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </nav><!-- .navbar -->

            <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

          </div>
        </header><!-- End Header -->

        <main id="main">

        <?php
      include '../admin/koneksi.php';
      ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">You may explore the information about the menu and check prices for Kurma Resto</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero.jpeg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+6282242536479</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              <p>Kurma Resto & Coffee Shop adalah jenis tempat makan dan kafe yang menawarkan suasana yang unik dan menarik.
              Tempat ini cocok untuk Anda yang ingin menikmati hidangan lezat sambil menikmati secangkir kopi yang segar.</p>              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Masakan lokal: Kurma Resto & Coffee Shop menyajikan berbagai hidangan lokal yang lezat dan autentik.</li>
                <li><i class="bi bi-check2-all"></i> Kurma Resto & Coffee Shop juga menawarkan berbagai hidangan Barat yang lezat seperti spaghetti.</li>
                <li><i class="bi bi-check2-all"></i> Anda juga dapat menikmati berbagai makanan ringan.</li>
              </ul>
              <p>
              Pelayanan di Kurma Resto & Coffee Shop juga sangat baik. 
              Para staf yang ramah dan profesional akan dengan senang hati membantu Anda dalam memilih hidangan dan minuman yang sesuai dengan selera Anda.
              Jadi, jika Anda mencari tempat yang menyajikan makanan lezat dan kualitas kopi yang tinggi, Kurma Resto & Coffee Shop adalah pilihan yang tepat. 
              Nikmati hidangan lezat dan suasana yang menyenangkan di tempat ini.
              </p>
              <div class="position-relative mt-4">
                <img src="assets/img/kurma-about2.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
          <div class="container" data-aos="fade-up">
              <div class="section-header">
                  <h2>Our Menu</h2>
                  <p>Check Our <span>Yummy Menu</span></p>
              </div>

              <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200"></ul>
              <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                  <div class="tab-pane fade active show" id="menu-starters">
                      <div class="tab-header text-center">
                          <p>Menu</p>
                          <h3>Paket Keluarga</h3><br>
                      </div>
                      <div class="row gy-5">

                       <?php
                      $query = mysqli_query($conn, "SELECT * FROM `menu`");
                      if (mysqli_num_rows($query) > 0) {
                          echo '<div class="row">';
                          while ($row = mysqli_fetch_assoc($query)) {
                              echo '<div class="col-lg-4">';
                              echo '<div class="menu-item">';
                              echo '<h3>' . $row['nama_menu'] . '</h3>';
                              echo '<img src="' . $row['gambar'] . '" alt="' . $row['nama_menu'] . '" width="200">';
                              echo '<p>Price: $' . $row['harga'] . '</p>';
                              echo '</div>';
                              echo '</div>';
                          }
                          echo '</div>';
                      } else {
                          echo "No menu items found.";
                      }
                      ?>
                    </div>    
                  </div>
              </div>
      </section><!-- End Menu Section -->

      <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Table</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
              <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Telephon</td>
            <td>:</td>
            <td><input type="number" name="telepon" ></td>
        </tr>
        <tr>
    <td>Menu</td>
    <td>:</td>
    <td>
        <select name="menu_id">
            <?php
            // Ambil data menu dari database
            include '../admin/koneksi.php';
            $queryMenu = mysqli_query($conn, "SELECT * FROM menu");
            while ($rowMenu = mysqli_fetch_assoc($queryMenu)) {
                echo '<option value="' . $rowMenu['menu_id'] . '">' . $rowMenu['menu_id'] . ' - ' . $rowMenu['nama_menu'] . '</option>';
            }
            ?>
        </select>
   </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="number" name="jumlah"></td>
        </tr>
            </table>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an telp to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Book a Table</button></div>
            </form>
          </div><!-- End Reservation Form -->
        </div>
      </div>
    </section><!-- End Book A Table Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>
        <div class="mb-3">
        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Jl. A. Yani no. 2 <br>Blora, 58211 <br>Indonesia</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p> kurmaresto@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p> +6282242536479</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->
        </div>
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
          <div class="container">
            <div class="row gy-3">
              <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div>
                  <h4>Address</h4>
                  <p>
                  Jl. A. Yani no. 2 <br>Blora, 58211 <br>Indonesia
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 footer-links d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                  <h4>Reservations</h4>
                  <p>
                    <strong>Phone:</strong> +6282242536479<br>
                    <strong>Email:</strong> kurmaresto@gmail.com<br>
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 footer-links d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                  <h4>Opening Hours</h4>
                  <p>
                    <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                    Sunday: Closed
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>KurmaResto</span></strong>. All Rights Reserved
            </div>
          </div>
        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

      </body>

      </html>