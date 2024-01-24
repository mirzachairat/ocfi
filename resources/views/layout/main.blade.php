<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Climate Change Financing in Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{asset('assets/img/logo_ocfi.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href={{asset('assets/vendor/aos/aos.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/glightbox/css/glightbox.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/swiper/swiper-bundle.min.css')}} rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="https://mail.hostinger.com">admin@ocfi.or.id</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>021-021-8308181</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://twitter.com/AwasiDanaIklim_" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.tiktok.com/@awasidanaiklim_" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/awasidanaiklim_/" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </section>
    @include('component.header')
    @yield('content')
    @include('component.footer')    
     <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>   
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @yield ('footer_scripts')
</body>
</html>