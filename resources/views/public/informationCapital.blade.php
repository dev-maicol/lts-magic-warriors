<!DOCTYPE html>
<html lang="en" translate="no">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Latín Community Magic Warriors</title>
  <meta name="google" content="notranslate" />
  {{-- <meta content="" name="description"> --}}
  {{-- <meta content="" name="keywords"> --}}
  {{-- <title>Ing. Maicol German Condori Adrian - Portafolio </title> --}}
  <meta content="Latín Community Magic Warriors - Clash of Clans - developed by Ing. Maicol German Condori Adrian"
    name="description">
  <meta content="Latín Community Magic Warriors, clash of clans, resistencia coc, maicol german condori adrian, Ing. Maicol German Condori Adrian,ingeniero informático" name="keywords">
  <meta name="author" content="Maicol German Condori Adrian">

  {{-- <meta property="og:image" content="https://magic-warriors.maivisoft.com/assets_public/img/magic-warriors.webp" /> --}}
  <meta property="og:image" content="https://scontent.flpb1-2.fna.fbcdn.net/v/t39.30808-6/401708113_10161602675301079_8692765667288386892_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=dd477f&_nc_ohc=Frkyg904YqYAX8FE_MQ&_nc_ht=scontent.flpb1-2.fna&oh=00_AfChUzegCzbZmjF0ltFu37qKPAt4cl5q950PZ2_GGUpQ-Q&oe=6599D1D9" />
  

  <!-- Favicons -->
  <link href="{{ asset('assets_public')}}/img/favicon.png" rel="icon">
  <link href="{{ asset('assets_public')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets_public')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets_public')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets_public')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style>
    .rotate-icon {
    display: inline-block;
    animation: rotate 1.5s infinite linear; /* 2s es la duración, infinite es para repetir indefinidamente, linear es la función de temporización */
  }

  @keyframes rotate {
    0% {
      transform: rotate(0deg) scale(1);
    }
    50% {
      transform: rotate(180deg) scale(1.2);
    }
    100% {
      transform: rotate(360deg) scale(1);
    }
  }
  </style>
</head>

<body>
  @php
      $dateNow = \Carbon\Carbon::now()->format('d-m-Y');
      $requestsValue = $totalDay . "/" . $limit;
  @endphp
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> {{ $dateNow}}
        
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-list-ol"></i> Remaining queries {{ $requestsValue}}

      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <a href="index.html" class="logo me-auto">
        <img src="{{ asset('assets_public')}}/img/logo.png" alt="">
      </a> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo me-auto"><a href="/">Magic Warriors</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#departments">Departments</a></li> --}}
          <li><a class="nav-link scrollto" href="#pricing">Services</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> --}}

    </div>
  </header><!-- End Header -->

  

  <main id="main">

    <!-- ======= Departments Section ======= -->

    <section id="departments" class="departments">
      
    </section>
    <!-- End Departments Section -->
    {{-- <div class="alert-container" id="alertContainer">
      <div id="copyAlert" class="alert alert-primary alert-dismissible fade" role="alert">
        <i class="bi bi-patch-check"></i><strong> Good!</strong> Text copied successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div> --}}
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials pt-1">
      @isset($error)

      <div class="section-title">
        <h2>Ups! 😢</h2>
        <p>
          <i class="bi bi-shield-x text-danger"></i> <span class="h4"> {{ $error[0]}}</span> <br>
          <i class="bi bi-search text-danger"></i> <span class="h4"> {{ $error[1]}}</span> <br>
          <i class="bi bi-person-lines-fill"></i><span class="h4"> Contact your system administrator</span> <br>
          <div class="d-grid gap-2 col-4 mx-auto mt-3">
            <a class="btn btn-success" href="/#services">
              <i class="bi bi-box-arrow-left"></i>
               Back
            </a>

          </div>
        </p>
      </div>

      @else
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clan Capital</h2>
          <p>
            Clan <i class="bi bi-arrow-right"></i> <span class="h4"> {{ $clan->name}}</span>
          </p>
        </div>

        

        <div class="row">
          <div class="col-lg-3 col-md-2">

          </div>
          <div class="col-lg-6 col-md-8 col-sm-12">
            
            <div class="testimonial-item">
              <p id="information">
                {{-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> --}}
                @php
                    $endTime = \Carbon\Carbon::createFromFormat('Ymd\THis.uP', $capital['endTime']);
                    $endTimeFormat = $endTime->format('d/m/Y');
                @endphp
                ```Clan Capital``` <br>
                Clan-> *{{ $clan->name}}* <br>
                EndTime-> *{{ $endTimeFormat}}* <br>
                _________________________________ <br>
                CapitalTotalLoot-> *{{ number_format($capital['capitalTotalLoot'], 0, ',', '.')}}* <br>
                TotalAttacks-> *{{ $capital['totalAttacks']}}* <br>
                {{-- RaidsCompleted->{{ $capital['raidsCompleted']}} <br> --}}
                EnemyDistrictsDestroyed-> *{{ $capital['enemyDistrictsDestroyed']}}* <br>
                _________________________________ <br>
                Pos. | Member | Attacks | Loot <br>
                _________________________________ <br>
                @php
                    $count = 1;
                @endphp
                @foreach ($sortedMembers as $member)
                {{ $count}}. *{{ $member['name'] }}* | {{ $member['attacks']}}/{{ $member['attackLimit'] + $member['bonusAttackLimit']}} | {{ number_format($member['capitalResourcesLooted'], 0, ',', '.')}} <br>
                @php
                    $count++;
                @endphp
                @endforeach


                {{-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> --}}
              </p>
              <img src="{{ asset('assets_public')}}/img/capital.webp" class="testimonial-img" alt="">
              {{-- <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4> --}}
              
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3">
              <button id="buttonCopy" type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="bi bi-clipboard-check"></i>
                 Copy
              </button>
              <a class="btn btn-success btn-lg" href="/#services">
                <i class="bi bi-box-arrow-left"></i>
                 Back
              </a>
            </div>

          </div>
        </div>

        {{-- <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets_public')}}/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>
            

          </div>
          <div class="swiper-pagination"></div>
        </div> --}}

      </div>

      @endisset
    </section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          {{-- <div class="modal-header"> --}}
            {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
          {{-- </div> --}}
          <div class="modal-body alert alert-info mb-auto">
            <i class="bi bi-patch-check rotate-icon"></i><strong> Good!</strong> Text copied successfully.
          </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->

    <!-- ======= Doctors/Services Section ======= -->
    {{-- <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>
            
          </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('assets_public')}}/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  
                </div>
              </div>
              <div class="member-info">
                <h4>War</h4>
                <span>Consult information on the current war.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('assets_public')}}/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('assets_public')}}/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('assets_public')}}/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    {{-- <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-1.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-2.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-3.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-4.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-5.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-6.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-7.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('assets_public')}}/img/gallery/gallery-8.jpg"><img src="{{ asset('assets_public')}}/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Gallery Section -->

    

    <!-- ======= Frequently Asked Questioins Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> --}}
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    {{-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>
            These are our social networks.
          </p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Social networks</h3>
              {{-- <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p> --}}
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
              </div>
            </div>
          </div>

          {{-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> --}}

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MAGIC WARRIORS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Developed by <a href="https://maicol.maivisoft.com/" target="_blank">Maicol Condori</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets_public')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('assets_public')}}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets_public')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets_public')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets_public')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets_public')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets_public')}}/js/main.js"></script>

  <script>
    let button = document.getElementById('buttonCopy');
    let mi_modal = new bootstrap.Modal(document.getElementById('myModal'));

    if(button){
      document.getElementById('buttonCopy').addEventListener('click', function() {
        // Obtener el contenido del elemento con el id 'information'
        let textToCopy = document.getElementById('information').innerText;
  
        // Crear un elemento de texto temporal
        let tempTextArea = document.createElement('textarea');
        tempTextArea.value = textToCopy;
  
        // Añadir el elemento temporal al DOM
        document.body.appendChild(tempTextArea);
  
        // Seleccionar y copiar el contenido del elemento temporal
        tempTextArea.select();
        document.execCommand('copy');
  
        // Eliminar el elemento temporal
        document.body.removeChild(tempTextArea);

        // Ocultar el alerta después de 2 segundos
        setTimeout(function() {
          mi_modal.hide();
        }, 2000);
  
        // alert('Texto copiado al portapapeles: ' + textToCopy);
      });

    }

    
  </script>

</body>

</html>