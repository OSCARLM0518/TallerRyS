<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Lujos La Pava</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
      <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center h-100">
          <a class="text-body mr-3" href="screens/contacto.php">Contacto</a>
          <a class="text-body mr-3" href="screens/ayuda.php">Ayuda</a>
          <a class="text-body mr-3" href="screens/Preguntas.php">Preguntas Frecuentes</a>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <div class="btn-group">
            <button
              type="button"
              class="btn btn-sm btn-light dropdown-toggle"
              data-toggle="dropdown">
              Mi cuenta
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="screens/login.php">Iniciar sesión</a>
              </button>
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="screens/Inscribirse.php">Inscribirse</a>
              </button>
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="php/perfil_usuario.php">Cuenta</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
      <div class="col-lg-4">
        <a href="index.php" class="text-decoration-none">
          <span class="h1 text-uppercase text-primary bg-dark px-2">Lujos</span>
          <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">LaPava</span>
        </a>
      </div>
      <div class="col-lg-4 col-6 text-left">
        <form action="">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Buscar producto" />
            <div class="input-group-append">
              <span class="input-group-text bg-transparent text-primary">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 col-6 text-right">
        <p class="m-0">Servicio al Cliente</p>
        <h5 class="m-0">+57 320 598 8335</h5>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
        <a
          class="btn d-flex align-items-center justify-content-between bg-primary w-100"
          data-toggle="collapse"
          href="#navbar-vertical"
          style="height: 65px; padding: 0 30px">
          <h6 class="text-dark m-0">
            <i class="fa fa-bars mr-2"></i>Categorias
          </h6>
          <i class="fa fa-angle-down text-dark"></i>
        </a>
        <nav
          class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
          id="navbar-vertical"
          style="width: calc(100% - 30px); z-index: 999">
          <div class="navbar-nav w-100">
            <div class="nav-item dropdown dropright">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown">Información de servicios
                <i class="fa fa-angle-right float-right mt-1"></i></a>
              <div
                class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                <a href="screens/servicosMacanicos.php" class="dropdown-item">Servicios mecanicos</a>
                <a href="screens/ProductosyRepuestos.php" class="dropdown-item">Venta de productos y repuestos</a>
              </div>
            </div>
            <a href="screens/Informaciónmecanicos.php" class="nav-item nav-link">Información de mecanicos</a>
            <a href="screens/Consejos.php" class="nav-item nav-link">Consejos</a>
            <a href="screens/trabajosRealizados.php" class="nav-item nav-link">trabajos realizados</a>
          </div>
        </nav>
      </div>
      <div class="col-lg-9">
        <nav
          class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
          <a href="index.php" class="text-decoration-none d-block d-lg-none">
            <span class="h1 text-uppercase text-dark bg-light px-2">Lujos</span>
            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">LaPava</span>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-between"
            id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <a href="index.php" class="nav-item nav-link active">Inicio</a>
              <a href="screens/ProductosyRepuestos.php" class="nav-item nav-link">Productos y repuestos</a>
              <a href="screens/AgendarCitas.php" class="nav-item nav-link">Agenda tu cita</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown">Paginas <i class="fa fa-angle-down mt-1"></i></a>
                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                  <a href="/carrito" class="dropdown-item">Carrito de compra</a>

                </div>
              </div>
              <a href="screens/contacto.php" class="nav-item nav-link">Contactos</a>
            </div>
            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
              <a href="screens/Carrito.php" class="btn px-0 ml-3">
                <i class="fas fa-shopping-cart text-primary"></i>

              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid mb-3">
    <div class="row px-xl-5">
      <div class="col-lg-8">
        <div
          id="header-carousel"
          class="carousel slide carousel-fade mb-30 mb-lg-0"
          data-ride="carousel">
          <ol class="carousel-indicators">
            <li
              data-target="#header-carousel"
              data-slide-to="0"
              class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div
              class="carousel-item position-relative active"
              style="height: 430px">
              <img
                class="position-absolute w-100 h-100"
                src="screens/img/carousel-1.jpg"
                style="object-fit: cover" />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px">
                  <h1
                    class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                    Servicios mecanicos
                  </h1>
                  <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                    "La excelencia en cada ajuste: Servicio mecánico, tu
                    vehículo siempre en óptimas condiciones."
                  </p>
                  <a
                    class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                    href="screens/servicosMacanicos.php">Ir</a>
                </div>
              </div>
            </div>
            <div
              class="carousel-item position-relative"
              style="height: 430px">
              <img
                class="position-absolute w-100 h-100"
                src="screens/img/carousel-2.jpg"
                style="object-fit: cover" />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px">
                  <h1
                    class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                    Citas mecanicas
                  </h1>
                  <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                    "Encuentra el vínculo perfecto entre corazones y
                    engranajes con nuestras citas mecánicas: donde la
                    precisión se une con la emoción."
                  </p>
                  <a
                    class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                    href="screens/AgendarCitas.php">Ir</a>
                </div>
              </div>
            </div>
            <div
              class="carousel-item position-relative"
              style="height: 430px">
              <img
                class="position-absolute w-100 h-100"
                src="screens/img/carousel-3.jpg"
                style="object-fit: cover" />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px">
                  <h1
                    class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                    Consejos
                  </h1>
                  <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                    "Domina el camino con conocimientos sólidos: Nuestros
                    consejos de mecánica de motos te guían hacia un viaje sin
                    contratiempos."
                  </p>
                  <a
                    class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                    href="screens/Consejos.php">Ir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="product-offer mb-30" style="height: 200px">
          <img class="img-fluid" src="screens/img/ven-1.jpg" alt="" />
          <div class="offer-text">
            <h6 class="text-white text-uppercase">Mejor calidad</h6>
            <h3 class="text-white mb-3">Productos</h3>
            <a href="screens/ProductosyRepuestos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
        <div class="product-offer mb-30" style="height: 200px">
          <img class="img-fluid" src="screens/img/ven-2.jpg" alt="" />
          <div class="offer-text">
            <h6 class="text-white text-uppercase">Mejor calidad</h6>
            <h3 class="text-white mb-3">Repuestos</h3>
            <a href="screens/ProductosyRepuestos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Featured Start -->
  <div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div
          class="d-flex align-items-center bg-light mb-4"
          style="padding: 30px">
          <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
          <h5 class="font-weight-semi-bold m-0">Productos de calidad</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div
          class="d-flex align-items-center bg-light mb-4"
          style="padding: 30px">
          <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
          <h5 class="font-weight-semi-bold m-0">Envio Gratis en Zarzal</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div
          class="d-flex align-items-center bg-light mb-4"
          style="padding: 30px">
          <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
          <h5 class="font-weight-semi-bold m-0">
            Devoluciones habiles a 14 dias
          </h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div
          class="d-flex align-items-center bg-light mb-4"
          style="padding: 30px">
          <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
          <h5 class="font-weight-semi-bold m-0">
            Soporte 24 horas al día, 7 días a la semana
          </h5>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured End -->

  <!-- Vendor Start -->
  <div class="container-fluid py-5">
    <div class="row px-xl-5">
      <div class="col">
        <div class="owl-carousel vendor-carousel">
          <div class="bg-light p-4">
            <img src="screens/img/vendor-1.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-2.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-3.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-4.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-5.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-6.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-7.jpg" alt="" />
          </div>
          <div class="bg-light p-4">
            <img src="screens/img/vendor-8.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Vendor End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
      <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
        <h5 class="text-secondary text-uppercase mb-4">Lujos La Pava</h5>
        <p class="text-secondary mb-2">
          <i class="fa fa-map-marker-alt text-primary mr-3"></i>carrera 11
          #748, Zarzal, Valle del Cauca, Colombia
        </p>
        <p class="text-secondary mb-2">
          <i class="fa fa-envelope text-primary mr-3"></i>info@example.com
        </p>
        <p class="text-secondary mb-2">
          <i class="fa fa-phone-alt text-primary mr-3"></i>++57 320 598 8335
        </p>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="row">
          <div class="col-md-4 mb-5">
            <h5 class="text-secondary text-uppercase mb-4">Atajos</h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
              <a class="text-secondary mb-2" href="screens/ProductosyRepuestos.php"><i class="fa fa-angle-right mr-2"></i>Productos y
                Repuestos</a>
              <a class="text-secondary mb-2" href="screens/Carrito.php"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>

              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Agenda tu cita</a>
              <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contactos</a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <h5 class="text-secondary text-uppercase mb-4">Mi cuenta</h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
              <a class="text-secondary mb-2" href="screens/login.php"><i class="fa fa-angle-right mr-2"></i>Iniciar sesión</a>
              <a class="text-secondary mb-2" href="screens/Inscribirse.php"><i class="fa fa-angle-right mr-2"></i>Inscribirse</a>
              <a class="text-secondary mb-2" href="screens/servicosMacanicos.php"><i class="fa fa-angle-right mr-2"></i>Información de
                servicios</a>
              <a class="text-secondary mb-2" href="screens/Informaciónmecanicos.php"><i class="fa fa-angle-right mr-2"></i>Información de
                mecanicos</a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <h6 class="text-secondary text-uppercase mt-4 mb-3">SÍGANOS</h6>
            <div class="d-flex">
              <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="row border-top mx-xl-5 py-4"
      style="border-color: rgba(256, 256, 256, 0.1) !important">
      <div class="col-md-6 px-xl-0">
        <p class="mb-md-0 text-center text-md-left text-secondary">
          &copy; <a class="text-primary" href="#">Univalle</a>. Desarrollado
          con fines educativos por estudiantes de
          <a class="text-primary" href="#">Tecnologia en desarrollo de software</a>
        </p>
      </div>
      <div class="col-md-6 px-xl-0 text-center text-md-right">
        <img class="img-fluid-univalle" src="screens/img/uni.jpg" alt="" />
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>



</body>

</html>