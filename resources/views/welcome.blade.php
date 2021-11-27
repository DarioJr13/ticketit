<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/service-icon-01.png" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Incio</a></li>
              <li class="scroll-to-section"><a href="#services">Soportes Integrados</a></li>
              <li class="scroll-to-section"><a href="#about">Como trabajamos</a></li>
              <li class="scroll-to-section"><a href="#pricing">Niveles de Soporte</a></li>
              <li class="scroll-to-section"><a href="#newsletter"></a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Iniciar Sesion Ya</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Iniciar Sesión</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
            <div class="centeredText">
                <span>Utilice su Email y Contraseña entregados</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="{{ route('login') }}"  class="btn">Iniciar Sesión</a></div>
                <div class="one_half last"><a href="{{ route('register') }}"  class="btn">Registrarse</a></div>
            </div>
        </div>

    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Service Help Desk</h2>
                    <p>Es una plataforma mesa de ayuda para nuestros clientes, con rapido soporte, integral y escalamiento de soluciones.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#contact">Facil y Rapida de Utilizar<i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Atendemos de inmediato <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80 --}}
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img class="rounded" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Los Mejores <em>Escalando &amp; Resolviendo</em> tus soluciones</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Gracias a nuestro Equipo de Engineer Expert puedas contar con el mejor soporte <a rel="nofollow" href="" target="_blank">Solamente</a> Este servico es para clientes que tienen soluciones de software con nosotros <a href="" target="_parent">Sientete especial</a> Y Descansa en <b><em>Service Help Desk.</em></b></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Los mejores Mantenimientos</h4>
            <p>Utilizamos ciento de algoritmos para mejorar la capaciadad de resolucion de problemas.</p>
            <div class="text-button">
              {{-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Velocidad y Calidad</h4>
            <p>Nuestro <strong><em>CORE</em></strong> es resolver con la maxima Calidad en el menor Tiempo posible.</p>
            <div class="text-button">
              {{-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Tenemos un Workflow Bien Definido</h4>
            <p>Contamos con los mejores Ingenieros(a) de Software y con un excelente Flujo interno de trabajo<a rel="nofollow" href="" target="_blank"> SERVICE HELP DESK</a>.Conocenos por dentro.</p>
            <div class="text-button">
              {{-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>8/7 Help &amp; Soporte con la mejor Calidad y Atencion</h4>
            <p>Nuestro equipo se encarga de atenderles de Lunes a viernes 8:30 am  a 5:30 pm. Sabados de 9:00 am  a 2:00 p.m.</p>
            <div class="text-button">
              {{-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Como sabemos <em>Que nuestro Software</em> Son de maxima calidad</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Necesitaras escalar la aplicacion a medidas que vaya creciendo en Usuarios, Funcionabilidades y Datos.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Nos Encargamos de Todo</a></h4>
                <p>Simplificamos el proceso</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">8/7 Soporte &amp; Ayuda de Calidad</a></h4>
                <p>Nos motiva tenerte</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Minimiza el Tiempo</a></h4>
                <p>Concentrante en Expandir tu Idea</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Expertos en lo que Hacemos</a></h4>
                <p>Poseemos el mejor equipo Multifuncional</p>
              </div>
            </div>
            <div class="col-lg-12">
              <p>Concentra y Detalla tu Idea nosotros nos encargamos de todo.</p>
              <div class="gradient-button">
                <a href="#">Service Help Deskp</a>
              </div>
              {{-- <span>*No Credit Card Required</span> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Nuestros Clientes <em>Nos Recomiendan</em> Y Expresan sus Testimonios</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>En Service Help Desk es muy importante tu opinion y la de la de tu equipo, muestras tus casos de exitos.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Monte Sinaí</h4>
                            <span class="date">15 Enero 2022</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">CRMI</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Luz y Vida</h4>
                            <span class="date">30 Enero 2022</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">CRMI</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.8</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>May Catherina</h4>
                            <span class="date">27 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Business &amp; Economics</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.7</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Random User</h4>
                            <span class="date">24 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">New App Ecosystem</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Mark Amber Do</h4>
                            <span class="date">21 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Web Development</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.7</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Excelente Aplicacion para la Gestion de Reportes y Seguimiento del disipulado.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/barbaylentetijerado.jpg" alt="">
                                <div class="right-content">
                                  <h4>Darío Esquina</h4>
                                  <span>Pastor de Monte Sinaí</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Ha sido de gran bendicion contar con semejante aplicativo para el flujo de trabajo de la iglesia en este siglo XXI.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image.jpg" alt="">
                                <div class="right-content">
                                  <h4>Lucy de Alarcon</h4>
                                  <span>Pastora de Luz y Vida</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                  lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image.jpg" alt="">
                                <div class="right-content">
                                  <h4>May C.</h4>
                                  <span>Founder of Catherina Co.</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                  lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/barbaylentetijerado.jpg" alt="">
                                <div class="right-content">
                                  <h4>Random Staff</h4>
                                  <span>Manager, Digital Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                  lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/barbaylentetijerado.jpg" alt="">
                                <div class="right-content">
                                  <h4>Mark Am</h4>
                                  <span>CTO, Amber Do Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Aprenda a <em>Escalar</em> Los Ticketes</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Es muy importante conocer que Especialista puede atender su solicitud.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">Nivel I</span>
            <h4>Engineer Support I</h4>
            <div class="icon">
              <img src="assets/images/support1.jpg" alt="">
            </div>
            <ul>
              <li>Prioridad Baja</li>
              <li>Atender errores de Escritura en la Web</li>
              <li>Imagenes que no cargar</li>
              <li class="non-function">Problemas con sus datos</li>
              <li class="non-function">Reportar error 404</li>
              <li class="non-function">Reportar error del Dominio</li>
            </ul>
            <div class="border-button">
              <a>Responsabilidades</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">Nivel II</span>
            <h4>Engineer Support II</h4>
            <div class="icon">
              <img src="assets/images/support2.jpg" alt="">
            </div>
            <ul>
              <li>Errores 500 en la página</li>
              <li>El sitio esta lento</li>
              <li>Problemas con sus datos</li>
              <li>Reportar error del Dominio</li>
              <li class="non-function">Crear Reporte Nuevo</li>
              <li class="non-function">Nueva Funcionabiliad</li>
            </ul>
            <div class="border-button">
              <a>Responsabilidades</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">Nivel III</span>
            <h4>Engineer Software</h4>
            <div class="icon">
              <img src="assets/images/engineer.jpg" alt="">
            </div>
            <ul>
              <li>Cambiar de Dominio</li>
              <li>Modificacion del Front-End</li>
              <li>Modificacion del Back-End</li>
              <li>Nuevos Reportes</li>
              <li>Reuniones Importantes</li>
              <li>Crear Nuevas funcionabilidades</li>
            </ul>
            <div class="border-button">
              <a>Responsabilidades</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Service Help Desk Esta Conectado a &amp; Service Software S.A</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              {{-- <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>--}}
              {{-- <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div> --}}
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contactanos</h4>
            <p>Panamá</p>
            <p><a href="#">vía google meat</a></p>
            <p><a href="#">ss@gmail.com</a></p>
          </div>
        </div>
        {{-- <div class="col-lg-3">
          <div class="footer-widget">
            <h4>So</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
        </div>--}}
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Lo mejores soporte de nuestras Apps</a></li>
              <li><a href="#">Development App</a></li>
              <li><a href="#">Machine Learning</a></li>
              <li><a href="#">Big Data</a></li>
              <li><a href="#">Power BI</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Sobre Service Software</h4>
            <div class="logo">
              <img src="assets/images/service-icon-01.png" alt="">
            </div>
            <p>Esta es una empresa con capital 100% Panameño hemos creado Service Help Desk para dar un soporte legítimos de nuestos desarrollos de software.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2030 Service Software. Todos los derechos Reservados.
          <br>Design: <a href="" target="_blank" title="css templates">Oderay Otero</a><br>

          Distributed By: <a href="" target="_blank" title="Bootstrap Template World">Darío Esquina</a>
        </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
