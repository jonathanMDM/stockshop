<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SoftInver</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>html/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo URL; ?>html/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo URL; ?>html/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
            SoftInver
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo URL;?>userController/login">
                    <img src="<?php echo URL;?>html/images/login.png" alt="" />
                    <span >Iniciar</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">
                    <img src="<?php echo URL; ?>html/images/signup.png" alt="" />
                    <span>Sign Up</span>
                  </a>
                </li>
              </ul>
              <form class="form-inline my-2 mb-3 mb-lg-0 mr-5">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Inicio</a>
                <a href="team.html">Equipo</a>
                <a href="portfolio.html">Portafolio</a>

                <a href="contact.html">Contacto</a>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>
                    Optimiza tu
                    <span>
                    Inventario Ahora
                    </span>
                  </h1>
                  <p>
                  ¿Cansado de perder tiempo y dinero en la gestión de tu inventario? ¡Tenemos la solución perfecta para ti! Descubre nuestro Sistema de Inventario Inteligente, diseñado para transformar la manera en que administras tus productos.
                  </p>
                  <div>
                    <a href="">
                    leer más
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="<?php echo URL; ?>html/images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>
                    Gestiona tu Inventario
                    <span>
                    con Eficiencia
                    </span>
                  </h1>
                  <p>
                  Descubre nuestro Sistema de Inventario Inteligente y transforma tu negocio. Monitoreo en tiempo real, automatización de procesos y acceso desde cualquier dispositivo. ¡Empieza hoy y optimiza tu inventario!
                  </p>
                  <div>
                    <a href="">
                      leer más
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="<?php echo URL; ?>html/images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>

    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <h2>
        SOFTINVER
      </h2>
      <p>
      Bienvenido a nuestro Sistema de Inventario Inteligente, la solución perfecta para gestionar tus productos de manera eficiente y efectiva
      </p>
    </div>

    <div class="container">
      <div class="about_card-container">
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="<?php echo URL; ?>html/images/card-img-1.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                10 AÑOS DE EXPERIENCIA
              </h4>
              <p>
              En la industria del inventario de productos, comprendemos las complejidades y desafíos que enfrentan las empresas día a día.
              </p>
            </div>
          </div>
          <div>
            <a href="" class="about_btn">
              leer más
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="<?php echo URL; ?>html/images/card-img-2.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                ARQUITECTURA
              </h4>
              <p>
              Nuestra arquitectura de inventario es modular y escalable, garantizando una interfaz intuitiva y una gestión segura de datos.
              </p>
            </div>
          </div>
          <div>
            <a href="" class="about_btn">
              leer más
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="<?php echo URL; ?>html/images/card-img-3.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                +1000 CLIENTES FELICES
              </h4>
              <p>
              ¡Únete a más de 1000 clientes satisfechos que confían en nuestra eficiente gestión de inventarios. Descubre cómo podemos marcar la diferencia en tu negocio.
              </p>
            </div>
          </div>
          <div>
            <a href="" class="about_btn">
              leer más
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->



  <!-- portfolio section -->
  <section class="portfolio_section layout_padding2">
    <div class="container">
      <h2>
        NUESTRO PORTAFOLIO
      </h2>
      <p>
      Descubre en nuestro portafolio la diversidad de proyectos exitosos que hemos realizado, desde desarrollos web innovadores hasta soluciones personalizadas de software. Confía en nuestra experiencia para llevar tu proyecto al siguiente nivel.
      </p>
    </div>
    <div class="container layout_padding2-top ">
      <div class="row">
        <div class="col-md-8">
          <div class="portfolio_img-box">
            <img src="<?php echo URL; ?>html/images/portfolio-img-1.png" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio_img-box">
            <img src="<?php echo URL; ?>html/images/portfolio-img-2.jpg" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio_img-box">
            <img src="<?php echo URL; ?>html/images/portfolio-img-3.png" alt="">
          </div>
        </div>
        <div class="col-md-8">
          <div class="portfolio_img-box">
            <img src="<?php echo URL; ?>html/images/portfolio-img-4.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end portfolio section -->


  <!-- team section  -->
  <section class="team_section layout_padding">
    <div class="container">
      <h2>
        NUESTRO EQUIPO
      </h2>
      <p>
      Nuestro equipo de expertos está comprometido a impulsar el éxito de tu proyecto, enfrentando desafíos con habilidades variadas y un compromiso inquebrantable
      </p>
    </div>
    <div class="container">
      <div class="team_card-container layout_padding2">
        <div class="team_card">
          <div class="team_img-box">
            <img src="<?php echo URL; ?>html/images/team-1.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              JOHN DOE
            </h5>
            <p>
              CEO - DESIGNER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="team_card">
          <div class="team_img-box">
            <img src="<?php echo URL; ?>html/images/team-2.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              sandy DOE
            </h5>
            <p>
              CEO - DESIGNER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="team_card">
          <div class="team_img-box">
            <img src="<?php echo URL; ?>html/images/team-3.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              Alexi DOE
            </h5>
            <p>
              CEO - DESIGNER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/ images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="team_card">
          <div class="team_img-box">
            <img src="<?php echo URL; ?>html/images/team-4.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              JOHN DOE
            </h5>
            <p>
              CEO - DESIGNER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src=" <?php echo URL; ?>html/images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="<?php echo URL; ?>html/images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- end team section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <p>
      No dudes en preguntar
      </p>
      <h2 class="">
      CONSULTA GRATIS
      </h2>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-6 ">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <label>
                    Nombre
                    <input type="text" />
                  </label>
                </div>
                <div>
                  <label>
                    Correo
                    <input type="email" />
                  </label>
                </div>

                <div>
                  <label>
                    Telefono
                    <input type="text" />
                  </label>
                </div>

                <div>
                  <label>
                    Mensaje
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                  </label>
                </div>
                <div class="mt-5">
                  <button type="submit">
                    Enviar
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="<?php echo URL; ?>html/images/form-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- why section -->
  <section class="Why_section layout_padding">
    <div class="container">
      <h2>¿POR QUÉ ELEGIRNOS?</h2>
      <p>
      Elige nuestra experiencia probada y dedicación para impulsar el éxito de tu proyecto. Ofrecemos soluciones innovadoras y un compromiso inquebrantable con la excelencia.
      </p>
    </div>
  </section>



  <!-- end why section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container info_content">
      <div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h5>
                Sobre nosotros
                </h5>
                <ul>
                  <li>
                    <a href="">
                      It is a long established
                    </a>
                  </li>
                  <li>
                    <a href="">
                      fact that a reader will be
                    </a>
                  </li>
                  <li>
                    <a href="">
                      distracted by the read
                    </a>
                  </li>
                  <li>
                    <a href="">
                      able LoremIt is a long es
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tablished fact that a
                    </a>
                  </li>
                  <li>
                    <a href="">
                      reader will be distracted
                    </a>
                  </li>

                </ul>
              </div>
              <div class="col-md-6">
                <h5>
                Contacta con nosotros
                </h5>
                <ul>
                  <li>
                    <a href="">
                      It is a long established
                    </a>
                  </li>
                  <li>
                    <a href="">
                      fact that a reader will be
                    </a>
                  </li>
                  <li>
                    <a href="">
                      distracted by the read
                    </a>
                  </li>
                  <li>
                    <a href="">
                      able LoremIt is a long es
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tablished fact that a
                    </a>
                  </li>
                  <li>
                    <a href="">
                      reader will be distracted
                    </a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="form_container mt-5">
              <form action="">
                <input type="email" placeholder="Introduce tu correo electrónico" />
                <button type="submit">
                  Suscribirse
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info_img-box">
              <img src="<?php echo URL; ?>html/images/map.png" alt="">
            </div>
            <div class="d-flex justify-content-end pr-5">
              <div class="social-box">
                <a href="">
                  <img src="<?php echo URL; ?>html/images/fb.png" alt="" />
                </a>

                <a href="">
                  <img src="<?php echo URL; ?>html/images/twitter.png" alt="" />
                </a>
                <a href="">
                  <img src="<?php echo URL; ?>html/images/linkedin1.png" alt="" />
                </a>
                <a href="">
                  <img src="<?php echo URL; ?>html/images/instagram1.png" alt="" />
                </a>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->
  <hr class="footer_hr">
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy;
      2024 All Rights Reserved. Design by
      <a href="https://github.com/jonathanMDM">JonathanMDM</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="<?php echo URL; ?>html/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>html/js/bootstrap.js"></script>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>


</body>

</html>