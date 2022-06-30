<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="materialize is a responsive creative agency template">
        <meta name="keywords" content="material, material design, material design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>Krenova Kota Semarang</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="assets/img/ico/logo.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <!-- Main Style CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Creative CSS -->
        <link href="assets/css/skins/creative.css" rel="stylesheet">

    </head>
    <body id="top" class="has-header-search">

<!------------------------------------------------------CONTENT START-------------------------------------------------------------->

<!--header start-->
        <header id="header" class="tt-nav nav-border-bottom">
          <div class="banner-1 header-sticky light-header">
              <div class="container">
                <div class="search-wrapper">
                  <div class="search-trigger pull-right">
                      <div class='search-btn'></div>
                      <i class="material-icons">&#xE7FD;</i>
                  </div>

                  <!-- Modal Search Form -->
                  <i class="search-close material-icons">&#xE5CD;</i>
                  <div class="search-form-wrapper">
                    <form action="{{ url('logout') }}" class="white-form">
                      <div class="text-center">
                        <a href="{{ url('logout') }}"class="waves-effect waves-light btn red"><i class="material-icons left">&#xE899;</i> LOG OUT</a>
                      </div>
                    </form>
                  </div>
                </div><!-- /.search-wrapper -->
                                                
                  <div id="materialize-menu" class="menuzord">
                    <!--logo start-->
                      <a href="index.html" class="logo-brand">
                          <img class="retina" src="assets/img/logo2.png" alt=""/>
                      </a>
                    <!--logo end-->  
                    
                    <!-- menu start-->
                    <ul class="menuzord-menu pull-right">
                        <li><a href="{{ url('/pengguna') }}">Beranda</a></li>
                        <li><a href="{{ url('/informasi') }}">Informasi</a>
                        </li>
                        <li  class="active"><a href="{{ url('/galeri') }}">Galeri</a>
                        </li>
                        <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                      </ul>
                      <!-- menu end-->
                  </div>
              </div>
          </div>
        </header><!--
<!--header end-->

<!--page title start-->
        <section class="page-title parallax-bg page-title-bg-1 overlay dark-5 ptb-190" data-stellar-background-ratio="0.5">
          <div class="container">         
          </div>
        </section><!--
<!--page title end-->

<!-- Grid News -->
<section class="section-padding grid-news-hover grid-blog">
    <div class="container">

      <div class="widget widget_search">
        <form role="search" method="get" class="search-form">
          <input type="text" class="form-control" value="" name="s" id="s" placeholder="Write any keywords">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div><!-- /.widget_search -->

    </br>
    </br>
    </br> 

      <div class="row">
        <div id="blogGrid">

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/gokart') }}"><img src="assets/img/blog/gokart (1).jpg" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/gokart') }}">Gokart Listrik Eco Daya</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">Transportasi</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Gokart adalah kendaraan kecil roda 4 yang ditujukan untuk olahraga. Gokart biasanya ditenagai oleh mesin bermotor bensin.</p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/keripik') }}"><img src="assets/img/blog/keripik (2).jpg" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/keripik') }}">Bungsu Home Timbang (Keripik Rebung)</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">UMKM</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Rebung adalah tunas atau anakan yang masih muda yang tumbuh dari akar bambu. rebung memiliki banyak kandungan gizi, seperti Protein, Karbohidrat, Vitamin C, Thiamin dan B6, Kalium, Phospor dan lain sebagainya.</p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/sirup') }}"><img src="assets/img/blog/sirup (2).jpg" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/sirup') }}">Inovasi Sirup Empon Empon</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">Technology</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Dalam keadaan kondisi ekonomi saat sekarang ini yang serba sulit banyak terjadi pemutusan hubungan kerja, maka berwirausaha adalah tuntutan yang wajar agar bisa mandiri. Namun banyak jenis usaha yang gulung tikar akibat pandemin ini. </p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/oppa') }}"><img src="assets/img/blog/oppa (2).jpeg" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/oppa') }}">Oppa Daego</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">UMKM</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Tingkat sedimentasi di Rawa Pening yang semakin tinggi mengakibatkan pendangkalan akibat tumbuhnya tanaman eceng gondok yang begitu cepat mengispirasi Erna Rohayati  pemilik MAKMUR ABADI untuk membuat olahan pangan Daun Eceng Gondok. </p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/pintu') }}"><img src="assets/img/blog/pintu (1).jpg" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/pintu') }}">Inovasi Protoype Pintu dan Pompa air</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">Technology</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Banjir yang terjadi di beberapa daerah Kabupaten Batang merupakan dampak dari gejala alam maupun faktor sosial lingkungan, akibat sistem drainase yang tidak tertata dengan baik. </p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/paprokes') }}"><img src="assets/img/blog/paprokes (1).png" class="img-responsive" alt="" ></a>

                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/paprokes') }}">Inovasi PAPROKES</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">Technology</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>COVID-19 merupakan virus yang menginfeksi sistem pernapasan manusia, pada kasus tertentu virus ini dapat menyebabkan infeksi saluran pernafasan berat (pneumonia). Di Indonesia jumlah kasus terpapar virus COVID-19 terus meningkat.</p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/oil') }}"><img src="assets/img/blog/oil (1).jpg" class="img-responsive" alt="" ></a>

                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/oil') }}">Landung Oil</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">UMKM</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Pengobatan medis adalah pengobatan yang dilakukan untuk mengobati penyakit medis, misalnya melalui operasi dan menggunakan obat untuk penyembuhan. </p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/quizku') }}"><img src="assets/img/blog/quizku (1).jpg" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/quizku') }}">Aplikasi Quizku</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">Technology</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Pembelajaran tatap muka yang digantikan dengan online learning akibat dari penyebaran COVID-19 yang semakin meluas sedikit banyak menimbulkan beberapa permasalahan baru.</p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

          <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
              <article class="post-wrapper">

                <div class="thumb-wrapper waves-effect waves-block waves-light">
                  <a href="{{ url('/nugget') }}"><img src="assets/img/blog/nugget (1).png" class="img-responsive" alt="" ></a>
                </div><!-- .post-thumb -->

                <div class="blog-content">

                  <div class="hover-overlay light-blue"></div>

                  <header class="entry-header-wrapper">
                    <div class="entry-header">
                      <h2 class="entry-title"><a href="{{ url('/nugget') }}">Nugget Buninglor (Labu Kuning Kelor)</a></h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  By <a href="#">Admin</a>
                              </li>
                              <li>
                                  In <a href="#">UMKM</a>
                              </li>
                          </ul>
                      </div><!-- .entry-meta -->
                    </div><!-- /.entry-header -->
                  </header><!-- /.entry-header-wrapper -->

                  <div class="entry-content">
                    <p>Grobogan adalah salah satu kabupaten di ProvinsiJawa Tengah yang kaya akan hasil pertaniannya. Seperti halnya Labu Kuning. Labu kuning yang ada di Kabupaten Grobogan itu lumayan melimpah jumlahnya. Dan biasanya masyarakat hanya menggunakan labu kuning untuk dijadikan sayuran atau bahan pembuatan kolak.</p>
                  </div><!-- .entry-content -->

                </div><!-- /.blog-content -->

              </article><!-- /.post-wrapper -->
          </div><!-- /.col-md-4 -->

        </div><!-- /#blogGrid -->

      </div><!-- /.row -->

      <ul class="pagination post-pagination text-center mt-50">
        <li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-left"></i></a></li>
        <li><span class="current waves-effect waves-light">1</span></li>
        <li><a href="#." class="waves-effect waves-light">2</a></li>
        <li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-right"></i></a></li>
      </ul>


    </div><!-- /.container -->
</section>
<!-- Grid News End -->

<!-- Kegiatan Start -->
      <section class="section-padding ">
        <div class="container">

          <div class="text-center mb-80">
              <h2 class="section-title text-uppercase">Kegiatan Krenova</h2>
          </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

              <div class="gallery-thumb">
                <ul class="slides">
                  <li data-thumb="assets/img/gallery/kegiatan (1).jpeg">
                    <img src="assets/img/gallery/kegiatan (1).jpeg" alt="image">
                  </li>
                  <li data-thumb="assets/img/gallery/kegiatan (2).jpeg">
                    <img src="assets/img/gallery/kegiatan (2).jpeg" alt="image">
                  </li>
                  <li data-thumb="assets/img/gallery/kegiatan (3).jpeg">
                    <img src="assets/img/gallery/kegiatan (3).jpeg" alt="image">
                  </li>
                  <li data-thumb="assets/img/gallery/kegiatan (4).jpeg">
                    <img src="assets/img/gallery/kegiatan (4).jpeg" alt="image">
                  </li>
                  <li data-thumb="assets/img/gallery/kegiatan (5).jpeg">
                    <img src="assets/img/gallery/kegiatan (5).jpeg" alt="image">
                  </li>
                </ul>
              </div><!-- /.gallery-thumb -->
                </div>
            </div><!-- /.row -->

        </div><!-- /.container -->
      </section>
<!-- Kegiatan End -->

<!------------------------------------------------------CONTENT END-------------------------------------------------------------->

<!--Footer Start-->
      <footer class="footer footer-one">
        <div class="primary-footer brand-bg darken-2 banner-1">
            <div class="container">
                <a href="#top" class="page-scroll btn-floating btn-large blue back-top waves-effect waves-light" data-section="#top">
                <i class="material-icons">&#xE316;</i>
                </a>

                <div class="row-md-3">
                    <div class="col-md-3 widget clearfix">
                        <h2 class="white-text"><b>Kontak Kami</b></h2>
                        <p>Jl. Pemuda No. 148, Kota Semarang, Jawa Tengah 50132</p>

                        <ul class="social-link tt-animate ltr">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3 widget">
                        <h2 class="white-text"><b>Link Terkait</b></h2>
                        <p class="white-text">Portal Besar Ekosistem Inovasi Kota Semarang</p>
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3 widget">
                    <div class="col-md-5">
                        <img class="img-responsive" src="assets/img/creative/logo.png" alt="">
                    </div>
                    <h2 class="white-text"><b>Bappeda Kota Semarang</b></h2>
                    </div><!-- /.col-md-3 -->                      
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.primary-footer -->
        <div class="secondary-footer brand-bg darken-2 banner-1">
            <div class="container">
            <center><span class="white-text">&copy; Semarang Technopark 2022 &nbsp;  | &nbsp;  All Rights Reserved &nbsp;</span></center>
        </div><!-- /.container -->
        </div>
      </footer><!--
<!--Footer End-->


<!-- jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/materialize/js/materialize.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/menuzord.js"></script>
        <script src="assets/js/equalheight.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.countTo.min.js"></script>
        <script src="assets/js/jquery.shuffle.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/twitterFetcher.min.js"></script>
        <script src="assets/flexSlider/jquery.flexslider-min.js"></script>
        <script src="assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <script>

if ($('#twitterfeed').length > 0) {
    var twitterWidgetConfig = {
        id: "613424231099953152", 
        domId: "twitterfeed",
        maxTweets: 2,
        enableLinks: true,
        showUser: true,
        showTime: true,
        showInteraction: false
    };

    twitterFetcher.fetch(twitterWidgetConfig);
}

</script>

</body>

</html>