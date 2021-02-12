<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TrackingKopid | Kasus Corona</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="{{ asset('frontend/assets/css/frontend.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex align-items-center">
            <div class="contact-info mr-auto">
                <ul>
                    <li><i class="icofont-envelope"></i><a href="r0895352557945@gmail.com">maskips69@gmail.com</a>
                    </li>
                    <li><i class="icofont-phone"></i> +62 8587 2837 823</li>
                    <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Setiap Hari </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo mr-auto"><a href="#header" class="scrollto">TrackingKopid</a></h1> --}}
            <div class="lavalite-bg" style="background-image: url('{{ asset('assets/img/auth/login-bg.jpg') }}')">
                <div class="lavalite-overlay"></div>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#header" class="logo mr-auto scrollto"><img src="{{ asset('frontend/img/logo.png') }}" alt=""
                    class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li class="drop-down"><a href="">Form Tabel</a>
                        <ul>
                            <li><a href="admin/provinsi">Provinsi</a></li>
                            <li><a href="admin/kota">Kota</a></li>
                            <li><a href="admin/kecamatan">Kecamatan</a></li>
                            <li><a href="admin/kelurahan">Kelurahan</a></li>
                            <li><a href="admin/rw">Rw</a></li>
                            <li><a href="admin/kasus2">Kasus Local</a></li>
                            <!-- <li class="drop-down"><a href="#">Deep Drop Down</a>
                              <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                              </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li><a href="login">Login</a></li>
                    <li><a href="register">Register</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active" data-aos-delay="20">
                <div class="carousel-container">
                    <a class="header-brand">
                        <div class="animate__animated animate__fadeInDown">
                          <h3>
                            </h3><img src="{{ asset('assets/src/img/brand-white.svg') }}" class="header-brand-img" alt="lavalite">
                          </h3>
                        </div>
                        <span class="animate__animated animate__fadeInDown">TrackingKopid</span>
                    </a>
                    <span class="animate__animated animate__fadeInUp"><h2>Kasus Data</h2></span>
                    <span class="animate__animated animate__fadeInUp"><h2>Corona Local & Corona Global</h2></span>
                </div>
            </div>

            <!-- Slide 2 -->
            {{-- <div class="carousel-item" data-aos-delay="20">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>KASUS POSITIF</span></h2>
                    <h2 class="animate__animated animate__fadeInUp"><span>{{ number_format($positif) }}</span>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">ORANG</p>
                </div>
            </div> --}}

            <!-- Slide 3 -->
            {{-- <div class="carousel-item" data-aos-delay="20">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>KASUS MENINGGAL</span></h2>
                    <h2 class="animate__animated animate__fadeInUp"><span>{{ number_format($meninggal) }}</span>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">ORANG</p>
                </div>
            </div>

            <div class="carousel-item" data-aos-delay="20">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>KASUS SEMBUH</span></h2>
                    <h2 class="animate__animated animate__fadeInUp"><span>{{ number_format($sembuh) }}</span></h2>
                    <p class="animate__animated animate__fadeInUp">ORANG</p>
                </div>
            </div> --}}

            <!-- <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>KASUS LOKAL</span></h2>
                    <h2 class="animate__animated animate__fadeInUp"><span><?php ?><span>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">ORANG</p>
                </div>
            </div> -->

            {{-- <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>KASUS GLOBAL</span></h2>
                    <h2 class="animate__animated animate__fadeInUp"><span><?php {{ $getglobal }} ?></span></h2>
                    </h2>
                    <p class="animate__animated animate__fadeInUp">ORANG</p>
                </div>
            </div> --}}

            {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}

        </div>
    </section><!-- End Hero -->

    <main id="main">
      <br><br><br>
    <!-- ======= Icon Boxes Section ======= -->
    <section>
      <div class="main-content">
        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                  <h3 class="animate__animated animate__fadeInDown"><b>POSITIF</b></h3>
                                  <h3>{{ number_format($positif) }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-award"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block"><b>Orang</b></small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                  <h3 class="animate__animated animate__fadeInDown"><b>SEMBUH</b></h3>
                                  <h3>{{ number_format($sembuh) }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-thumbs-up"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block"><b>Orang</b></small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                  <h3 class="animate__animated animate__fadeInDown"><b>MENINGGAL</b></h3>
                                  <h3>{{ number_format($meninggal) }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-calendar"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block"><b>Orang</b></small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                  <h3 class="animate__animated animate__fadeInDown"><b>GLOBAL</b></h3>
                                  <h3>41,410</h3>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-message-square"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block"><b>Orang</b></small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <section id="about" class="about">
      <div class="col-md-12">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h2>Provinsi</h2>
          </div>
          
          <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="datatable">
                          <thead>
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                              <form action="">
                                <input type="text" class="form-control" placeholder="Search.." required="">
                                <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                              </form>
                          </div>
                              <tr>
                                  <th>NO</th>
                                  <th>PROVINSI</th>
                                  <th>POSITIF</th>
                                  <th>SEMBUH</th>
                                  <th>MENINGGAL</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php $no=1; @endphp
                              @foreach ($provinsi as $data)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $data->nama_provinsi }}</td>
                                      <td>{{ number_format($data->jpositif) }}</td>
                                      <td>{{ number_format($data->jsembuh) }}</td>
                                      <td>{{ number_format($data->jmeninggal) }}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div>

    </section>
        <!-- End Icon Boxes Section -->

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <i class="icofont-computer"></i>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <i class="icofont-chart-bar-graph"></i>
                            <h4><a href="#">Dolor Sitema</a></h4>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <i class="icofont-image"></i>
                            <h4><a href="#">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <i class="icofont-settings"></i>
                            <h4><a href="#">Nemo Enim</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="500">
                        <div class="icon-box">
                            <i class="icofont-earth"></i>
                            <h4><a href="#">Magni Dolore</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="icon-box">
                            <i class="icofont-tasks-alt"></i>
                            <h4><a href="#">Eiusmod Tempor</a></h4>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section> --> --}}
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        {{-- <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                    <div class="col-lg-5">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section> --> --}}
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Anyar</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div> -->

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>TrackingKopid</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
