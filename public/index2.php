<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Lloguer d'immobles</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DAW SL</a>
           
              <a class="nav-link js-scroll-trigger" href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a>
            

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">


            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Venta</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio2">Alquiler</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>


                    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="close.php">Desconectar</a>
              
             <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
              
              
              
            </li>
            

            
            
          </ul>
        </div>
      </div>
    </nav>


   
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
         

         
          <div class="intro-lead-in">Encuentra tu hogar</div>
          <div class="intro-heading text-uppercase">Encuentra pisos y casas en venta y alquiler </div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">INICIO</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sobre DAW</h2>
            <h3 class="section-subheading text-muted">Nuestra misión es de ayudarte a elegir el hogar que mejor puede satisfecer tus necesidades.<br>Tenemos pisos y casas en venta o alquiler que quieren ser un hogar. ¿Quieres uno? <br>¿Buscas pisos o casas en venta o alquiler a buen precio, con las características que necesitas y en tu sitio preferido para vivir? Déjanos ayudarte: en DAW Inmuebles tenemos una cuidadosa oferta de alquiler de pisos de todo tipo repartidos por toda España, especialmente en Madrid y Barcelona.</h3>
          </div>
        </div>
        <div class="row text-center">
         
            <p class="text-muted">El portal inmobiliario profesional de confianza: pisos y casas, alquiler y venta, situada en Gavà, c/Apel·les Mestres, 52 08850. <br>  Disponemos de una gran selección de pisos que se adaptan a todo tipo de necesidades.  </p>
          </div>
         
          </div>
        
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Inmuebles</h2>
            <h3 class="section-subheading text-muted">Seleccionamos los inmuebles más interesantes de todos nuestros activos para ofrecerlos con unas condiciones muy atractivas. </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4> Casa en venda en c. Londres, 35, bcn-eixample, Barcelona </h4>
              <p class="text-muted">381.000 €</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>
Piso en venda en Avda. Meridiana, 482, Bcn-Sant Andreu, Barcelona </h4>
              <p class="text-muted">195.520 €</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Piso en venda en Avda. Castelldefels, 150, Castelldefels, Barcelona</h4>
              <p class="text-muted">255.000 €</p>
            </div>
          </div>
          
          
          <div class="col-md-4 col-sm-6 portfolio-item" id="portfolio2">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            
            <div class="portfolio-caption">
              <h4>Casa adosada en alquiler en Carrer Tamarit, Gavà Mar</h4>
              <p class="text-muted">3000 €/mes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Apartamento en alquiler en Gavà Mar</h4>
              <p class="text-muted">750 €/mes</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Piso en alquiler en Els Canyars - El Castell - Vista Alegre, Castelldefels</h4>
              <p class="text-muted">900 €/mes</p>
            </div>
            </div>
          </div>
        </div>
    
    </section>

   
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contacto</h2>
            <h3 class="section-subheading text-muted"><b>Estamos a tu disposición, ponte en contacto con nosotros.</b></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre Apellido *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                </div>
                  
                            

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> Casa en venda en c. Londres, 35, Bcn-eixample, Barcelona </h2>
                  <p class="item-intro text-muted">bcn-eixample, Barcelona </p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Característiques:<br>
                      120m² superfície<br>
                      Última reforma el 1985<br>
                      2 banys<br>
                      Construït el 1962<br>
                      Per reformar<br>
                      4 habitacions<br>
                       Descripció:Casa distribuït en saló-menjador, cuina, 4 habitacions, 2 banys, safareig i terrassa. Situat en zona consolidada de la ciutat, amb superfícies d'alimentació, centres de salut i d'oci voltant. Bona comunicació per transport públic.<br>

                        </p>
                  <ul class="list-inline">
                    <li>Date: September 2019</li>
                   
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">
Piso en venda en Avda. Meridiana, 482, Bcn-Sant Andreu, Barcelona </h2>
                  <p class="item-intro text-muted">Bcn-Sant Andreu, Barcelona</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Característiques:<br>
                      65m² superfície<br>
                      Per reformar<br>
                      3 habitacions<br>
                      Construït el 1965<br>
                      2 banys<br>
                      Descripció: Pis de 3 dormitoris i 1 bany. Excel·lent ubicació, proper al Mercat de Sant Andreu i el Parc Esportiu de Can Dragó, a uns 10 minuts de distància caminant de les estacions de tren i metro, pròxim al CAP i Corte Inglés.

                    </p>
                  <ul class="list-inline">
                    <li>Date: August 2019</li>
                    
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Piso en venda en Avda. Castelldefels, 150, Castelldefels, Barcelona</h2>
                  <p class="item-intro text-muted">Castelldefels, Barcelona</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>
                   Característiques:<br>
                      96m² superfície<br>
                      Última reforma el 1979<br>
                      2 banys<br>
                      Terrassa<br>
                      Construït el 1979<br>
                      4 habitacions<br>
                      Exterior<br>
                      Descripció:Piso que consta de saló-menjador, cuina, 4 habitacions, 2 banys i terrassa exterior. Situat molt a prop de la platja i ben comunicat amb el nucli de la població per vies d'accés principals, on es troben els serveis bàsics.<br>

                      </p>
                  <ul class="list-inline">
                    <li>Date: January 2019</li>
                    
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Casa adosada en alquiler en Carrer Tamarit, Gavà Mar</h2>
                  <p class="item-intro text-muted">Carrer Tamarit, Gavà Mar</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Característiques:<br>
                      4 habitaciones<br>
                      3 baños completos<br>
                       2 terrazas<br>
                      Descripción:Casa equipada con 4 habitaciones y 3 baños completos, 2 de las cuales son suite, una con solárium que se encuentra en la buhardilla, dispone de 2 plazas de garaje totalmente privado con puerta automática, cocina equipada y 2 terrazas (una delante y otra detrás con salida desde el comedor y acceso a piscina). Cerca de servicios (a 5 minutos caminando de farmacia, restaurantes, supermercado, playa, etc) y transporte. No pierda esta oportunidad de vivir cerca de la playa en familia y en una comunidad muy tranquila. Incluye Impuestos y gastos comunitarios.<br>
                      </p>
                  <ul class="list-inline">
                    <li>Date: January 2019</li>
                    
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Apartamento en alquiler en Gavà Mar </h2>
                  <p class="item-intro text-muted">Gavà Mar </p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Descripción:<br>
                      1 habitacion<br>
                      1 baño<br>
                      50m² superfície<br>
                      7ª Planta<br>
                      Apartamento de 50 m2 situado en la zona de Gavà Mar,cerca de supermercados, transporte publico, tiene piscina comunitaria apartamento con ascensor y parking , trastero dispone de 1 habitación doble y un baño completo aire acondicionado con bomba de calor semi-amueblado 
                    </p>
                  <ul class="list-inline">
                    <li>Date: January 2019</li>
                   
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Piso en alquiler en Els Canyars - El Castell - Vista Alegre, Castelldefels</h2>
                  <p class="item-intro text-muted">Castelldefels</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Descripción:<br>
                      3 habitaciones<br>
                      1 baño<br>
                      75 m² superficie<br>
                      3ª Planta<br>
                      Piso céntrico en alquiler. Dispone de 75m² distribuidos en salón comedor con salida a balcón, 3 habitaciones (una doble y dos sencillas), baño completo de cuatro piezas con bañera. Se entrega totalmente amueblado. Finca con ascensor. SE REQUIERE CONTRATO LABORAL Y TRES ÚLTIMAS NÓMINAS.
                      </p>
                  <ul class="list-inline">
                    <li>Date: August 2019</li>
                   
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
      
     


  </body>

</html>
