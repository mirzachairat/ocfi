<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Open Climate Changen in Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/logo_ocfi.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/main.css')}}" rel="stylesheet">

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">

   <!-- CSS -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('component.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
 @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container" style="margin-top:0">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <img src="{{asset('/img/logo_ocfi.png')}}" alt="ocfi_logo">
            <p>
              Jl. Tebet Timur Dalam 8V No. 21 Tebet
              Jakarta Indonesia 12820
              <br>
            </p>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="520" height="260" id="gmap_canvas" src="https://maps.google.com/maps?q=+Jl.+Tebet+Timur+Dalam+8V+No.+21+Tebet+++++++++++++++Jakarta+Indonesia+12820&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.analarmclock.com/">online alarm clock</a><br><a href="https://online.stopwatch-timer.net/"></a><br><style>.mapouter{position: relative;text-align: right;height: 260px;width: 520px;}</style><a href="https://www.mapembed.net">map box</a><style>.gmap_canvas{overflow: hidden;background: none !important;height: 260px;width: 520px;}</style></div></div>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/AwasiDanaIklim_" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/awasidanaiklim_/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@awasidanaiklim_" class="tiktok"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-end">
          <h4>Contact Us</h4>
          <p>
            <strong>Phone:</strong>021-8308181<br>
            <strong>Email:</strong> admin@ocfi.or.id<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>OCFI.or.id</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Mirza Chairat</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
    <!-- Swiper JS -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

    <!-- JavaScript -->
    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>