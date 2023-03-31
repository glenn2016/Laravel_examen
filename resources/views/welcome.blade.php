<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NaTa</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <!-- Favicons -->
    <link href="img/Captur22e-removebg-preview.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/aos/aos.css" rel="stylesheet">
    <link href="assets/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        @if (Route::has('login'))
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="http://127.0.0.1:8000/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>NaTa<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="http://127.0.0.1:8000/about">A propos</a></li>
                    <li class="dropdown"><a href="http://127.0.0.1:8000/passager">Passager</a>
                        <ul>
                            <li><a href="http://127.0.0.1:8000/passager">Comment ça marche</a></li> 
                        </ul>
                    </li>

                    <li class="dropdown"><a href="blog.html">Chauffeur</a>

                        <ul>
                            <li><a href="#">Comment ça marche</a></li>
                        </ul>
                    </li>

                    @auth
                    <li><a class="btn btn-primary" href="{{url('/redirects')}}" role="button">Dasbord </a></li>
                    @else
                    <li><a class="btn btn-primary" href="{{route('login')}}" role="button">Se connecter</a></li>

                    @if (Route::has('register'))
                    <li class="dropdown"><button type="button" class="btn btn-warning">INSCRIPTION</button>
                        <ul>
                            <li><a href="{{ route('register') }}">Compte</a></li>
                        </ul>
                    </li>
                    @endif
                    @endauth
                </ul>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    @endif

    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Bienvenue chez<span> NaTa</span></h2>
                        <p data-aos="fade-up">La vie local qui vous accompagne en toute securité dans tous vos projets.
                            NaTa s'engage pour une mobilité plus justeqvec les frais de service deles plus bqs du marché
                            ; seulment 10%.</p>
                        <a href="http://127.0.0.1:8000/register" data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">
                            Commencer</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(/img/hero-carousel/pexels-cottonbro-studio-4606342.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(/img/hero-carousel/pexels-anna-shvets-3987034.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(/img/hero-carousel/pexels-pixabay-33488.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url(/img/hero-carousel/pexels-cottonbro-studio-4606338.jpg)"></div>
            <div class="carousel-item" style="background-image: url(/img/hero-carousel/pexels-jeshootscom-13861.jpg
            )"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>


        </div>

    </section>
    <!-- End Hero Section -->

    <main id="main">



        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Services</h2>
                    <p>Comment ça marche ?
                    </p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-mobile"></i>
                            </div>
                            <h3>Application</h3>
                            <p>Activez l’application NaTa.
                                Saisissez votre destination
                                via géolocalisation puis
                                validez le montant estimé
                                de votre trajet. </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <h3>Voiture</h3>
                            <p>Votre chauffeur Faster,
                                vous récupère et vous
                                dépose en toute sécurité à
                                la destination indiquée</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-star"></i>

                            </div>
                            <h3>Notation</h3>
                            <p>Recevez votre facture et
                                noter votre trajet ainsi que
                                votre chauffeur.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->









        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>A propos de NaTa</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                        quis dolorem dolore earum</p>
                </div>

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(/img/pexels-josh-hild-2422588.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Le meilleur choix de transport
                            pour une agréable journée. </h3>
                        <p>NaTa est le service VTC à la demande qui
                            vous accompagnera en toute sécurité dans
                            tous vos déplacements.</p>


                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque</p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut
                                    deserunt minus aut eligendi omnis</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Alt Services Section -->




        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">


            <div class="container" data-aos="fade-up">


                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>NaTa Business</h4>
                        </a>
                    </li>
                    <!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Passagers</h4>
                        </a>
                        <!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Chauffeurs</h4>
                        </a>
                    </li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Simplifiez vos déplacements professionnels
                                    ainsi que ceux de vos collaborateurs.</h3>
                                <p class="fst-italic">
                                    Nos solutions Faster Business
                                    répondent à toutes vos problématiques
                                    de mobilité.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco lxaboris nisi ut aliquip ex ea
                                        commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="/img/pexels-fauxels-3182812.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>


                    <!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>NaTa prend soin de ses passagers</h3>
                                <p class="fst-italic">
                                    NaTA est le service VTC à la demande qui
                                    vous accompagnera en toute sécurité dans
                                    tous vos déplacements locaux
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="/img/pexels-ketut-subiyanto-4429503.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->



                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Bienvenue sur le réseau NaTa</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Rejoignez-nous et augmentez
                                    vos revenus tout en gérant votre
                                    emploi du temps simplement.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="/img/pexels-tobi-620332.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </section>
        <!-- End Features Section -->




        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nos colaborateurs</h2>
                    <p>
                        Le collaborateur libéral exerce son activité en toute indépendance, sans lien de subordination
                        tandis que le collaborateur salarié est sous la hiérarchie administrative</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>Un directeur général, chef de la
                                        direction ou administrateur délégué, voire parfois, en anglais, chief executive
                                        officer, est le salarié qui occupe le rang le plus élevé dans la direction d'une
                                        organisation
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>Un designer, parfois francisé en
                                        designeur, est un professionnel qui conçoit un produit en harmonisant les
                                        critères esthétiques et fonctionnels de celui-ci.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Le terme « entrepreneur » recouvre des acceptions connexes mais distinctes
                                        l'usage courant l'assimile à un chef d'entreprise, tantôt porteur d'un projet
                                        d'entreprise en phase de démarrage, tantôt dirigeant
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up" ">

    
    
  <div class=" section-header ">
        <h2>Nos équipes techniques</h2>
        <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
      </div>

      <div class=" row gy-5 ">

        <div class=" col-xl-4 col-md-6 " data-aos=" fade-up " data-aos-delay=" 100 ">
          <div class=" post-item position-relative h-100 ">

            <div class=" post-img position-relative overflow-hidden ">
              <img src=" /img/blog/blog-1.jpg " class=" img-fluid " alt=" ">
              <span class=" post-date ">December 12</span>
            </div>

            <div class=" post-content d-flex flex-column ">

              <h3 class=" post-title ">Eum ad dolor et. Autem aut fugiat debitis</h3>

              <div class=" meta d-flex align-items-center ">
                <div class=" d-flex align-items-center ">
                  <i class=" bi bi-person "></i> <span class=" ps-2 ">Julia Parker</span>
                </div>
                <span class=" px-3 text-black-50 ">/</span>
                <div class=" d-flex align-items-center ">
                  <i class=" bi bi-folder2 "></i> <span class=" ps-2 ">Politics</span>
                </div>
              </div>

              <hr>

              <a href=" blog-details.html " class=" readmore stretched-link "><span>Read More</span><i
                  class=" bi bi-arrow-right "></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class=" col-xl-4 col-md-6 " data-aos=" fade-up " data-aos-delay=" 200 ">
          <div class=" post-item position-relative h-100 ">

            <div class=" post-img position-relative overflow-hidden ">
              <img src=" /img/blog/blog-2.jpg " class=" img-fluid " alt=" ">
              <span class=" post-date ">July 17</span>
            </div>

            <div class=" post-content d-flex flex-column ">

              <h3 class=" post-title ">Et repellendus molestiae qui est sed omnis</h3>

              <div class=" meta d-flex align-items-center ">
                <div class=" d-flex align-items-center ">
                  <i class=" bi bi-person "></i> <span class=" ps-2 ">Mario Douglas</span>
                </div>
                <span class=" px-3 text-black-50 ">/</span>
                <div class=" d-flex align-items-center ">
                  <i class=" bi bi-folder2 "></i> <span class=" ps-2 ">Sports</span>
                </div>
              </div>

              <hr>

              <a href=" blog-details.html " class=" readmore stretched-link "><span>Read More</span><i
                  class=" bi bi-arrow-right "></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class=" col-xl-4 col-md-6 ">
          <div class=" post-item position-relative h-100 " data-aos=" fade-up " data-aos-delay=" 300 ">

            <div class=" post-img position-relative overflow-hidden ">
              <img src=" /img/blog/blog-3.jpg " class=" img-fluid " alt=" ">
              <span class=" post-date ">September 05</span>
            </div>

            <div class=" post-content d-flex flex-column ">

              <h3 class=" post-title ">Quia assumenda est et veritati tirana ploder</h3>

              <div class=" meta d-flex align-items-center ">
                <div class=" d-flex align-items-center ">
                  <i class=" bi bi-person "></i> <span class=" ps-2 ">Lisa Hunter</span>
                </div>
                <span class=" px-3 text-black-50 ">/</span>
                <div class=" d-flex align-items-center ">
                  <i class=" bi bi-folder2 "></i> <span class=" ps-2 ">Economics</span>
                </div>
              </div>

              <hr>

              <a href=" blog-details.html " class=" readmore stretched-link "><span>Read More</span><i
                  class=" bi bi-arrow-right "></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=" footer " class=" footer ">

    <div class=" footer-content position-relative ">
      <div class=" container ">
        <div class=" row ">

          <div class=" col-lg-4 col-md-6 ">
            <div class=" footer-info ">
              <h3>NaTa</h3>
              <p>
                Ouakam cité Avion<br>
                NY 535022, DAKAR<br><br>
                <strong>Phone:</strong> +77 226 64 20<br>
                <strong>Email:</strong>nata-services21@gmail.com<br>
              </p>
              <div class=" social-links d-flex mt-3 ">
                <a href=" # " class=" d-flex align-items-center justify-content-center "><i class=" bi bi-twitter "></i></a>
                <a href=" # " class=" d-flex align-items-center justify-content-center "><i class=" bi bi-facebook "></i></a>
                <a href=" # " class=" d-flex align-items-center justify-content-center "><i class=" bi bi-instagram "></i></a>
                <a href=" # " class=" d-flex align-items-center justify-content-center "><i class=" bi bi-linkedin "></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class=" col-lg-2 col-md-3 footer-links ">
            <h4>Useful Links</h4>
            <ul>
              <li><a href=" # ">Home</a></li>
              <li><a href=" # ">About us</a></li>
              <li><a href=" # ">Services</a></li>
              <li><a href=" # ">Terms of service</a></li>
              <li><a href=" # ">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class=" col-lg-2 col-md-3 footer-links ">
            <h4>Our Services</h4>
            <ul>
              <li><a href=" # ">Web Design</a></li>
              <li><a href=" # ">Web Development</a></li>
              <li><a href=" # ">Product Management</a></li>
              <li><a href=" # ">Marketing</a></li>
              <li><a href=" # ">Graphic Design</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class=" col-lg-2 col-md-3 footer-links ">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href=" # ">Molestiae accusamus iure</a></li>
              <li><a href=" # ">Excepturi dignissimos</a></li>
              <li><a href=" # ">Suscipit distinctio</a></li>
              <li><a href=" # ">Dilecta</a></li>
              <li><a href=" # ">Sit quas consectetur</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class=" col-lg-2 col-md-3 footer-links ">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href=" # ">Ipsam</a></li>
              <li><a href=" # ">Laudantium dolorum</a></li>
              <li><a href=" # ">Dinera</a></li>
              <li><a href=" # ">Trodelas</a></li>
              <li><a href=" # ">Flexo</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class=" footer-legal text-center position-relative ">
      <div class=" container ">
        <div class=" copyright ">
          &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
        </div>
        <div class=" credits ">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href=" https://bootstrapmade.com/ ">BootstrapMade</a> Distributed by <a
            href=" https://themewagon.com ">ThemeWagon</a><br>
            <a href="http://127.0.0.1:8000/inscriptionAdmin">nimdA</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href=" # " class=" scroll-top d-flex align-items-center justify-content-center "><i
      class=" bi bi-arrow-up-short "></i></a>

  <div id=" preloader "></div>

  <!-- Vendor JS Files -->
  <script src=" assets/bootstrap/js/bootstrap.bundle.min.js "></script>
  <script src=" assets/aos/aos.js "></script>
  <script src=" assets/glightbox/js/glightbox.min.js "></script>
  <script src=" assets/isotope-layout/isotope.pkgd.min.js "></script>
  <script src=" assets/swiper/swiper-bundle.min.js "></script>
  <script src=" assets/purecounter/purecounter_vanilla.js "></script>
  <script src=" assets/php-email-form/validate.js "></script>

  <!-- Template Main JS File -->
  <script src=" js/main.js "></script>

</body>

</html> 