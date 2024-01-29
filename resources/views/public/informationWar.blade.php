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
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo me-auto"><a href="/">Magic Warriors</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li><a class="nav-link scrollto" href="#pricing">Services</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  

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
          <h2>War of Clans</h2>
          <p>
            Clan <i class="bi bi-arrow-right"></i> <span class="h4"> {{ $clan->name}}</span>
          </p>
        </div>
        @php
            $clanYou = []; 
            $clanOpponent = [];
            if($clan->tag == substr($data['clan']['tag'], 1)){
              $clanYou = $data['clan'];
              $clanOpponent = $data['opponent'];
            }else{
              $clanYou = $data['opponent'];
              $clanOpponent = $data['clan'];
            }
        @endphp

        <div class="row">
          <div class="col-lg-4 col-md-2">
            
          </div>
          <div class="col-lg-4 col-md-8 col-sm-12">
            <div class="testimonial-item">

              
              <p id="information">
                {{-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> --}}
                @php
                    // $endTime = \Carbon\Carbon::createFromFormat('Ymd\THis.uP', $capital['endTime']);
                    // $endTimeFormat = $endTime->format('d/m/Y');
                    // var_dump($clanYou);
                    $time_left = "";
                    $time_now = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
                    
                    if($data['state'] == 'inWar'){
                      $time_final = \Carbon\Carbon::createFromFormat('Ymd\THis.uP', $data['endTime'])->subHours(4);
                      $time_left = $time_final->diff($time_now);
                    }
                    if($data['state'] == 'preparation'){
                      $time_final = \Carbon\Carbon::createFromFormat('Ymd\THis.uP', $data['startTime'])->subHours(4);
                      $time_left = $time_final->diff($time_now);
                    }
                    if($data['state'] == 'warEnded'){
                      $time_left = 'War Ended';
                    }
                    $stateWar = $data['state'];
                @endphp
                ```War of Clans``` <br>
                State -> *{{ $data['state']}}* <br>
                _________________________________ <br>
                *{{ $clanYou['name']}}* <br>
                @if ( $stateWar != 'preparation')
                  Attacks -> *{{ $clanYou['attacks']}}/{{ $data['teamSize'] * $data['attacksPerMember']}}* <br>
                  Stars -> *{{ $clanYou['stars']}}* <br>
                  Percentage -> *{{ round($clanYou['destructionPercentage'], 2)}}%* <br>
                @endif
                
                _________________________________ <br>
                *{{ $clanOpponent['name']}}* <br>
                @if ( $stateWar != 'preparation')
                  Attacks -> *{{ $clanOpponent['attacks']}}/{{ $data['teamSize'] * $data['attacksPerMember']}}* <br>
                  Stars -> *{{ $clanOpponent['stars']}}* <br>
                  Percentage -> *{{ round($clanOpponent['destructionPercentage'], 2)}}%* <br>
                    
                @endif
                _________________________________ <br>
                @php
                    // if ($stateWar == 'inWar' || $stateWar == 'preparation') {
                    //   echo "Time left -> *{{ $time_left->h}}Hrs. {{ $time_left->i}}Min* <br>";
                    // }else{
                    //   echo "Time left -> *$time_left*";
                    // }
                @endphp
                @if ($stateWar == 'inWar' || $stateWar == 'preparation')
                  Time left -> *{{ $time_left->h}}Hrs. {{ $time_left->i}}Min* <br>
                @else
                  Time left -> *{{ $time_left}}* <br>
                @endif
                {{-- Time left -> *{{ $time_left->h}}Hrs. {{ $time_left->i}}Min* <br> --}}
                _________________________________ <br>
                @if ( $stateWar == 'inWar')
                  Remaining attacks -> <br>
                @endif
                @if ( $stateWar == 'preparation')
                  Villages for war -> <br>
                @endif
                @if ( $stateWar == 'warEnded')
                  They did *NOT* attack -> <br>
                @endif
                @php
                    $members = $clanYou['members'];
                    $membersSorted = collect($members)->sortBy('mapPosition')->toArray();
                    
                @endphp
                _________________________________ <br>
                Pos. | Member (TH) 
                @if ( $stateWar != 'preparation')
                 | Attacks 
                @endif
                <br>
                _________________________________ <br>
                @foreach ($membersSorted as $member)
                  @php
                    $keyFind = array_key_exists('attacks', $member) ;
                  @endphp
                  @if ($keyFind)
                    @if ( count($member['attacks']) != $data['attacksPerMember'] )
                        @if ( $stateWar == 'inWar')
                            *{{ $member['mapPosition']}}*.- *{{ $member['name']}}* (*{{ $member['townhallLevel']}}*) *{{ count($member['attacks']) }}/{{ $data['attacksPerMember']}}* <br>
                        @endif
                        @if ( $stateWar == 'preparation')
                            *{{ $member['mapPosition']}}*.- *{{ $member['name']}}* (*{{ $member['townhallLevel']}}*)  <br>
                        @endif
                    @endif
                        
                  @else
                  *{{ $member['mapPosition']}}*.- *{{ $member['name']}}* (*{{ $member['townhallLevel']}}*) 
                  @if ( $stateWar != 'preparation')
                    *0/{{ $data['attacksPerMember']}}* 
                  @endif
                   <br>
                  @endif
                    
                @endforeach
                {{-- Remaining attacks -> <br>
                Villages for war -> <br> --}}
                
                  
                


                {{-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> --}}
              </p>
              <img src="{{ asset('assets_public')}}/img/war.webp" class="testimonial-img" alt="">
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


      </div>

      @endisset
    </section>
    <!-- End Testimonials Section -->


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

  </main>
  <!-- End #main -->

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