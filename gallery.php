<?php $page='photo'; require './components/head.php' ?>
  <title>Gallery </title>
  
<style>
  .swiper-pagination-bullet{
    width:25px !important;
    height:25px !important;
  }
  .swiper {
      width: 100%;
      height: 100%;
      margin:40px 0;
      box-shadow:5px 5px 20px -15px; 
      border:2px solid rgb(245,245,245);
    }
    body{
      background:url('./image/gallery_bg.webp');
      background-attachment:fixed;
      background-size:cover;
    }
    .swiper h5{
      background: #e8fffe;
      margin:0 !important;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    .swiper {
      width: 100%;
      height: 650px;
      margin: 20px 0;
      border-radius: 15px;
    }
</style>
</head>

<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

  <!-- ======= Header ======= -->
  <?php require './components/header.php'?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div id="hero" class="breadcrumbs d-flex align-items-center" style="background-image: url('./imgmus/10778.webp');">
      <div class="container position-relative d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade">

        <h2>Gallery</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Gallery</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    
    <section id="gallery">
      <div class="container">
    <div class="swiper mySwiper">
      <h5 class="p-3">[July | 2021] Inauguration </h5>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img1.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img2.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img3.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img4.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img5.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img6.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img7.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img8.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./image/gelley/ino_img9.webp" alt="">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper mySwiper2">
  <h5 class="p-3">[September | 2022] JIStech22k Inauguration</h5>
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper mySwiper3">
  <h5 class="p-3">[September | 2022] JIStech22k Price Distribution</h5>
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>JISCE IDEA-Lab</h3>
              <p>
              Block A, Phase III,
                Kalyani, Nadia - 741235 West Bengal<br>
                <strong>Phone:</strong> 033 2582 2138<br>
                <strong>Admission:</strong>033 2580 8640 / 033 2580 8560 / 9432011490 / 8697743363<br>
                <strong>Email:</strong>info.jiscollege@jisgroup.org<br>
                <strong>Website:</strong> www.jiscollege.ac.in<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Project Gallery</a></li>
              <li><a href="#">Patient Projects</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div><!-- End footer links column-->

       
          <div class="col-lg-2 col-md-3 footer-links">
           
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          © Copyright <strong><span>JISCE IDEA-LAb</span></strong>. All Rights Reserved
        </div>
       
      </div>
    </div>

  </footer>  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  <!-- Vendor JS Files -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    var swiper3 = new Swiper(".mySwiper3", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

</body></html>