<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GFood</title>
   

    <!-- Bootstrap -->
    <link rel="stylesheet" href="gfood/assets/bootstrap-5/-dist/css/bootstrap.min.css"/>

    <!-- Font Google -->
    <link rel="stylesheet" href="assets/Google-Font/stylesheet.css"/>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="assets/Font-Awesome-6.x/css/all.min.css"/>

    <!-- Style -->
    <link rel="gfood/assets/style.css"/>
    
  </head>

  <body>
    <!-- navbar -->
    <section id="navbar">
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">GFood</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse justify-content-end"id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutus">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#promo">Promo</a>
              </li>
              <li class="nav-item">
                <a class="btn button" href="#contact">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- jumbotron -->
    <section id="jumbotron">
     <div class="jumbotron bg-body-tertiary rounded-3">
      <div class="container py-5">
        <h1 class="display-5">Rasakan kelezatan  <span>daging premium</span><br>dalam citarasa yang berbeda</h1>
        <button class="button" type="button"> <i class="fa-solid fa-cart-shopping"></i> Order Now</button>
      </div>
     </div>
    </section>

    <!-- about us -->
    <section id="aboutus">
     <div class="container-fluid bg-light p-5">
     <div class="row text-center">
     <div class="col-12 p-5">
      <h2 class="display-4">Mengapa Memilih Kami</h2>
     </div>
    
    
     <div class="col-12 col-sm-6 col-lg-3">
      <span class="fa-stack fa-2x">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-plate-wheat fa-stack-1x fa-inverse"></i>
      </span>
        <h3 class="mt-4">Bahan Premium</h3>
        <p>Kami menggunakan bahan kualitas terbaik yang dihasilkan oleh petani lokal</p>
     </div>

     <div class="col-12 col-sm-6 col-lg-3">
      <span class="fa-stack fa-2x">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
        </span>
        <h3 class="mt-4">Chef Profesional</h3>
        <p>Rasakan sensasi tak tertandingi dari koki Master Chef Indonesia</p>
     </div>

     <div class="col-12 col-sm-6 col-lg-3">
      <span class="fa-stack fa-2x">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
      </span>
        <h3 class="mt-4">Harga Terjangkau</h3>
        <p>Pengalaman tak terlupakan dengan harga yang affordable sesuai kualitas premium</p>
     </div>

     <div class="col-12 col-sm-6 col-lg-3">
      <span class="fa-stack fa-2x">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-solid fa-recycle fa-stack-1x fa-inverse"></i>
      </span>
        <h3 class="mt-4">Ramah Lingkungan</h3>
        <p>Bukan hanya enak dan terjangkau,kamu juga ikut menjaga bumi bersama kami</p>
     </div>
    </section>

  <!-- menu -->
    <section id="menu">
     <div class="container p-5">
     <div class="row text-center">
     <div class="col-12 p-5">
      <h2 class="display-4">Menu Kami</h2>
     </div>

     <div class="col-12 col-lg-4 mb-4">
     <div class="card">
      <img src="assets/img/menu/bakso.webp" class="card-img-top" alt="bakso">
      <div class="card-body">
        <h5 class="card-title">Bakso Joss</h5>
        <p class="card-text">Rp.18.000,-</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn button"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
      </div>
     </div>

     </div>
     <div class="col-12 col-lg-4 mb-4">
     <div class="card">
      <img src="assets/img/menu/somay.webp" class="card-img-top" alt="bakso">
      <div class="card-body">
        <h5 class="card-title">Somay</h5>
        <p class="card-text">Rp.15.000,-</p>
        
      </div>
      <div class="card-footer">
        <a href="#" class="btn button"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
      </div>
      </div>
      </div>

     <div class="col-12 col-lg-4 mb-4">
     <div class="card">
      <img src="assets/img/menu/tahu.webp" class="card-img-top" alt="bakso">
      <div class="card-body">
        <h5 class="card-title">Tahu Bakso</h5>
        <p class="card-text">Rp.10.000,-</p>
        
      </div>
      <div class="card-footer">
        <a href="#" class="btn button"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
      </div>
      </div>
      </div>

     <div class="col-12 col-lg-4 mb-4">
      <div class="card">
      <img src="assets/img/menu/tea.webp" class="card-img-top" alt="bakso">
       <div class="card-body">
        <h5 class="card-title">Es Teh Ebak</h5>
        <p class="card-text">Rp.5000,-</p> 
       </div>
       <div class="card-footer">
        <a href="#" class="btn button"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
       </div>
       </div>
       </div>

      <div class="col-12 col-lg-4 mb-4">
      <div class="card">
      <img src="assets/img/menu/jus.webp" class="card-img-top" alt="bakso">
      <div class="card-body">
        <h5 class="card-title">Jas Jeruk</h5>
        <p class="card-text">Rp.8000,-</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn button"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
      </div>
      </div>
      </div>

      <div class="col-12 col-lg-4 mb-4">
      <div class="card">
      <img src="assets/img/menu/coffee.webp" class="card-img-top" alt="bakso">
      <div class="card-body">
        <h5 class="card-title">Es Kopi</h5>
        <p class="card-text">Rp.8000,-</p>
        
      </div>
      <div class="card-footer">
        <a href="#" class="btn button"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
      </div>
      </div>
      </div>
    </section>

    <!-- promo -->
    <section id="promo">
      <div class="container-fluid bg-light p-5">
      <div class="row text-center">
      <div class="col-12 p-3">
        <h2 class="display-6">Promo Terbaru</h2>
      </div>

      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <img src="assets/img/promo/1.webp" alt="promo1">
        </div>
      </div>

      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <img src="assets/img/promo/2.webp" alt="promo2">
        </div>
      </div>
    
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <img src="assets/img/promo/3.webp" alt="promo3">
        </div>
     </div>
    
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <img src="assets/img/promo/4.webp" alt="promo4">
        </div>
      </div>
    </section>

    <!-- contact -->
    <section id="contact">
      <div class="container p-5">
      <div class="row justify-content-center">
      <div class="col-12 p-5">
        <h2 class="display-4 text-center">Hubungi Kami</h2>
      </div>

      <div class="col-10 col-md-6">
        <form action="kirim.php" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan Nama">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email Address</label>
          <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Masukkan Email">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
          <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn button" type="submit"><i class="fas fa-envelope"></i> Kirim Saran </button>
        </form>
      </div>

      <div class="col-10 col-md-4">
        <h2 class="mb-3">Alamat</h2>
        <p> <i class="fa-solid fa-location-dot"></i> Perum PWS </p>
        <h2 class="mb-3">Contact</h2>
        <p><i class="fa-solid fa-user"></i> Gustian Yusuf Prayoga</p>
        <h2 class="mb-3">Telp</h2>
        <p><i class="fa-brands fa-square-whatsapp"></i> 085775134440</p>
        <h2 class="mb-3">Email</h2>
        <p><i class="fa-solid fa-envelope"></i> gustianyusupprayoga@gmail.com</p>

      </div>
      </div>
      </div>

    </section>

    <!-- footer -->
    <div class="container">
      <footer class="py-3 my-4">
        
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <a class="footer-brand" href="#">GFood</a>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#aboutus" class="nav-link px-2 text-body-secondary">About Us</a></li>
          <li class="nav-item"><a href="#menu" class="nav-link px-2 text-body-secondary">Menu</a></li>
          <li class="nav-item"><a href="#promo" class="nav-link px-2 text-body-secondary">Promo</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link px-2 text-body-secondary">Contact Us</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; Global Food 2024</p>
      </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>