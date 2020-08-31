<!doctype html>
<html lang="en">
  <head>
    <title>smartcheetah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    @include('layouts.includes.navbar')

    <div class="site-blocks-cover overlay bg-light" style="background-image: url('images/smart_cheetah.jpg'); " id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay="">Alcanza tu meta más rapido</h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="100">Tenemos el no, nos ganamos tu Si</p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#services-section" class="btn smoothscroll btn-danger">Nuestros servicios</a></p>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>



    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title text-center mb-5">Nosotros</h2>
          </div>
          <div class="col-lg-4">
            <p style="font-size: 1.5rem;">Somos un equipo enfocado a la transformación digital por medio de herramientas y estrategias a la medida
              para ti, con la velocidad que tu buscas.
            </p>

<!--             <p>Buscamos que tengas presencia en internet y si ya existe mejorarla. </p> -->
          </div>
          <div class="col-lg-4">
            <div class="embed-responsive embed-responsive-1by1">
              <video autoplay loop>
                <source src="images/SmartCheetah.mp4" type="video/mp4">
                <source src="images/SmartCheetah.mp4" type="video/ogg">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="col-lg-4">
            <p style="font-size: 1.5rem;">Optimiza tus procesos y ten posicionamiento en internet. Necesitas ser más competitivo en la actualidad.</p>
          </div>


        </div>
      </div>
    </div>


    <div class="site-section section-cheetah" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Servicios</h2>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/img-marketing.png" alt="Image" class="img-fluid" style="border-radius: 50%">
              </div>
              <div class="service-about">
                <h3>Marketing Digital</h3>
                <ul>
                    <li>Estrategias digitales a la medidia</li>
                    <li>Facebook Ads</li>
                    <li>Google Ads</li>
                    <li>Atrae más clientes</li>
                    <li>Solo pagas por resultados</li>
                </ul>
              </div>
            </div>
          </div>



          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/img-web.png" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Desarrollo Web</h3>
                <ul>
                    <li>CRM’s avanzados</li>
                    <li>E-Commerce seguros</li>
                    <li>Desarrollo a la medida</li>
                    <li>Todos los presupuestos</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <section class="site-section block__62272" id="projects-section">


      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">Proyectos</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade">
          <div id="filters" class="filters text-center button-group col-md-7">
            <!-- <button class="btn btn-primary active" data-filter="*">Todos</button> -->
            <button class="btn btn-primary" data-filter=".web">Web</button>
            <!-- <button class="btn btn-primary" data-filter=".design">Diseño</button>
            <button class="btn btn-primary" data-filter=".brand">Marca</button> -->
          </div>
        </div>

        <div id="posts" class="row no-gutter">
          <!-- <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
          </div> -->

          <!-- <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_6.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_6.jpg">
            </a>
          </div> -->

          <!-- <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_7.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_7.jpg">
            </a>
          </div> -->

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="https://thecleanfactory.com.mx" target="_blank" class="item-wrap">

              <img class="img-fluid" src="images/logo-free.png">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/shuler.png" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/shuler.png">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/comictlan.png" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/comictlan.png">
            </a>
          </div>
          <!-- <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div> -->

          <!-- <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_3.jpg">
            </a>
          </div> -->

          <!-- <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

            <a href="images/img_4.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_4.jpg">
            </a>

          </div> -->

          <!-- <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_8.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_8.jpg">
            </a>
          </div> -->

          <!-- <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_9.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_9.jpg">
            </a>
          </div> -->

          <!-- <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div> -->

          <!-- <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div> -->

        </div>
      </div>

    </section>


    <!-- <section class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white">What Client Are Sayings</h2>
          </div>
        </div>
        <div class="owl-carousel slide-one-item">
          <div class="slide">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><cite>&mdash; Jean Smith</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><cite>&mdash; Carl Spencer</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><cite>&mdash; Ryan Peters</cite></p>
            </blockquote>
          </div>
        </div>
      </div>
    </section> -->


    <!-- <section class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">

          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog Posts</h2>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


   @include('contact')

   @include('layouts.includes.footer')

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>
  </body>
</html>
