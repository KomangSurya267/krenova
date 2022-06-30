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
                        <li ><a href="{{ url('/galeri') }}">Galeri</a>
                        </li>
                        <li  class="active"><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                      </ul>
                        <!-- menu end-->
                    </div>
                </div>
            </div>
        </header>
<!--header end-->

<!--page title start-->
        <section class="page-title parallax-bg page-title-bg-2 overlay dark-5 ptb-190" data-stellar-background-ratio="0.5">
            <div class="container">
            </div>
        </section>
<!--page title end-->

<!--Alur Start-->
        <section class="section-padding">
            <div class="container">
            <div class="text-center mb-80">
                <h2 class="text-uppercase text font-30 mb-30"><b>Alur Program</b></h2>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="icon-tab">

                    <!-- Nav tabs -->
                    <div class="text-center">
                        <ul class="nav nav-pills" role="tablist">
                        <li role="presentation"><a href="#icontab-1" class="waves-effect waves-light"  role="tab" data-toggle="tab"> <i class="material-icons">&#xE7FD;</i></a></li>
                        <li role="presentation" class="active"><a href="#icontab-2" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xe2c4;</i></a></li>
                        <li role="presentation"><a href="#icontab-3" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xe873;</i></a></li>
                        <li role="presentation"><a href="#icontab-4" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xe22b;</i></a></li>
                        <li role="presentation"><a href="#icontab-5" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xe7f4;</i></a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="panel-body mt-40">
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="icontab-1">

                            <div class="row">
                            <div class="col-md-6"></br></br></br>
                                <h2 class="text-bold mb-40">Login Website Krenova</h2>
                                <p>Peserta lomba krenova wajib mengakses website krenova kota semarang, untuk mendapatkan keterangan lebih lanjut terkait dengan lomba krenova kota semarang, berupa persyaratan dan informasi lainnya.</p>
                            </div>

                            <div class="col-md-6">
                                <img src="assets/img/mockup/login.jpg" alt="" class="img-responsive">
                            </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in active" id="icontab-2">
                            <div class="row">
                            <div class="col-md-6"></br></br></br>
                                <h2 class="text-bold mb-40">Unduh Dokumen Persyaratan</h2>
                                <p>Sebelum melakukan pendaftaran lomba krenova, peserta diwajibkan untuk mengunduh dokumen persyaratan yang berisi beberapa ketentuan yang wajib diikuti peserta untuk mengikuti lomba krenova kota semarang</p>
                            </div>

                            <div class="col-md-6">
                                <img src="assets/img/mockup/unduh.jpg" alt="" class="img-responsive">
                            </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="icontab-3">
                            <div class="row">
                            <div class="col-md-6"></br></br></br>
                                <h2 class="text-bold mb-40">Siapkan Dokumen Persyaratan</h2>
                                <p>Setelah peserta mendapatkan berkas persyaratan yang dibutuhkan dalam mengikuti lomba krenova. Para peserta wajib menyiapkan dokumen persyaratan sesuai dengan ketentuan panduan untuk mengikuti lomba krenova</p>
                            </div>

                            <div class="col-md-6">
                                <img src="assets/img/mockup/berkas.jpg" alt="" class="img-responsive">
                            </div>
                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="icontab-4">
                            <div class="row">
                            <div class="col-md-6"></br></br></br>
                                <h2 class="text-bold mb-40">Mengisi Form Pendaftaran</h2>
                                <p>Peserta lomba krenova juga diwajibkan untuk mengisi form pendaftaran yang didalamnya berisi tentang keterangan peserta, identifikasi produk dan juga terdapat akses pengiriman dokumen persyaratan yang sudah ditentukan</p>
                            </div>

                            <div class="col-md-6">
                                <img src="assets/img/mockup/isi.jpg" alt="" class="img-responsive">
                            </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="icontab-5">
                            <div class="row">
                            <div class="col-md-6"></br></br></br>
                                <h2 class="text-bold mb-40">Menunggu Pemberitahuan Proses Seleksi</h2>
                                <p>Setelah semua pendaftaran yang sudah di lalui di dalam website ini, para peserta diharuskan untuk menunggu pemberitahuan apabila data sudah diterima oleh pengurus untuk selanjutnya masuk kedalam proses seleksi lebih lanjut lagi</p>
                            </div>

                            <div class="col-md-6">
                                <img src="assets/img/mockup/notif.jpg" alt="" class="img-responsive">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    </div><!-- /.icon-tab -->

                </div><!-- /.col-md-12 -->
            
                <div class="col-md-8 col-md-offset-2 center">
                </br>
                </br>
                    <a href="{{ url('/tambah') }}" class="waves-effect waves-light btn red">DAFTAR SEKARANG</a>
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
<!--Alur End-->

<!--Dokumen Start-->
        <section class="section-padding gray-bg">
            <div class="container">

            <div class="text-center mb-80">
                <h2 class="text-uppercase text font-30 mb-30"><b>Dokumen Panduan</b></h2>
            </div>

            <div class="row center">
                <div class="col-md-6">
                    <div class="pricing-table">
                        <div class="table-contents text-center">
                            <div class="table-header">
                                <div class="package-name">
                                    <span>Panduan Krenova</span>
                                </div> 

                                <div class="package-price">
                                    <i class="material-icons-1 center">&#xe873;</i>
                                </div>
                            </div> <!-- /.table-header -->
                            <div class="table-info">          
                            </div><!-- /.table-info -->
                            <div class="table-footer">
                                <div class="purchase-button">
                                    <a class="btn btn-lg text-capitalize" href="assets/berkas/Berkas Panduan.pdf">Download</a>
                                </div>   
                            </div> <!-- /.table-footer -->
                        </div> <!-- /.table-contents -->
                    </div><!-- /.pricing-table -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-6">
                    <div class="pricing-table">
                        <div class="table-contents text-center">
                            <div class="table-header ">
                                <div class="package-name">
                                    <span>Surat Pernyataan Keaslian</span>
                                </div> 

                                <div class="package-price">
                                    <i class="material-icons-1 center">&#xe873;</i>
                                </div>
                            </div> <!-- /.table-header -->   
                            <div class="table-info">          
                            </div><!-- /.table-info -->                     
                            <div class="table-footer">
                                <div class="purchase-button">
                                    <a class="btn btn-lg text-capitalize" href="assets/berkas/SURAT PERNYATAAN KEASLIAN.pdf">Download</a>
                                </div>   
                            </div> <!-- /.table-footer -->
                        </div> <!-- /.table-contents -->
                    </div><!-- /.pricing-table -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            </div><!-- /.container -->

        </section>
<!--Dokumen End-->

<!--Jadwal Start-->
        </br>
        <section class="padding-bottom-100">
            <div class="container">
            <div class="text-center mb-80">
                <h2 class="text-uppercase text font-30 mb-30"><b>Jadwal Kegiatan</b></h2>
            </div>

            <div class="vertical-tab">
                <div class="row">
                <div class="col-sm-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-stacked" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-5" class="waves-effect waves-light" role="tab" data-toggle="tab">Januari </a></li>
                        <li role="presentation"><a href="#tab-6" class="waves-effect waves-light" role="tab" data-toggle="tab"> Februari </a></li>
                        <li role="presentation"><a href="#tab-7" class="waves-effect waves-light" role="tab" data-toggle="tab"> Juni </a></li>
                        <li role="presentation"><a href="#tab-8" class="waves-effect waves-light" role="tab" data-toggle="tab"> Juli </a></li>
                        <li role="presentation"><a href="#tab-9" class="waves-effect waves-light" role="tab" data-toggle="tab"> Agustus </a></li>
                        </ul>                      
                </div><!-- /.col-md-3 -->

                <div class="col-sm-9">
                        <!-- Tab panes -->
                        <div class="panel-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-5">
                                <h2>Penyiapan Panduan Krenova</h2>

                                <img class="alignright" src="assets/img/working_man.png" alt="">

                                <p>
                                    Pembangunan ekosistem riset dan inovasi menjadi fokus Pemerintah dan
                                    Pemerintah Daerah pada tahun 2022. Hal ini sebagai upaya Pemerintah untuk
                                    mengubah paradigma dari ekonomi yang berbasis Sumber Daya Alam (SDA)
                                    menjadi ekonomi berbasis inovasi, sebagai salah satu jalan bagi Indonesia untuk
                                    mencapai visi Indonesia menjadi negara maju pada tahun 2045. Penciptaan
                                    ekosistem inovasi yang mendorong komersialisasi melalui penguatan kerja sama
                                    penta helix meliputi Pemerintah, Akademisi, Bisnis, Masyarakat dan Media.
                                    </p>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-6">
                                <h2>Sosisalisasi dan Distribusi Panduan Krenova </h2>

                                <img class="alignright" src="assets/img/busy_man.png" alt="">

                                <p>Dalam upaya mengembangkan sikap kreatif dan inovatif di tengah
                                    masyarakat, Pemerintah Kota Semarang melalui Badan Perencanaan
                                    Pembangunan Kota Semarang menyelenggarakan Lomba Kreativitas dan Inovasi
                                    Masyarakat (Krenova). Lomba Krenova Kota Semarang yang secara rutin
                                    diselenggarakan setiap tahun merupakan suatu ajang guna mengakomodir
                                    semangat berkreasi dan berinovasi dari masyarakat Kota Semarang melalui
                                    kegiatan penelitian, pengembangan dan penerapan teknologi.</p>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-7">
                                <h2>Pengumpulan Berkas Persyaratan Krenova</h2>

                                <img class="alignright" src="assets/img/mission.png" alt="">

                                <p>Keterangan/informasi lebih lanjut dapat menghubungi : Bidang Litbang Bappeda
                                    Kota Semarang, Gedung Moch. Ichsan Lantai VII, Jl. Pemuda No. 148 Semarang.
                                    Email: litbang.bappeda.smg@gmail.com , cc : litbang.bappeda@semarangkota.go.id.
                                    Website Bappeda Kota Semarang : www.bappeda.semarangkota.go.id
                                    Contact person :
                                    - Bpk. Yunan (No. HP 0812 2816 850)
                                    - Ibu Nanik (No. HP 0817 4179 529)
                                    - Bpk. Aji (No. HP 0895 3617 57111)</p>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-8">
                                <h2>Proses Seleksi Produk Krenova</h2>

                                <img class="alignright" src="assets/img/business.png" alt="">

                                <p>Penilaian Administrasi
                                    Proposal yang masuk akan diseleksi dalam kelengkapan profil temuan dan
                                    lampiran.
                                    b. Proses Verifikasi
                                    Proposal yang lolos penilaian administrasi selanjutnya melalui proses verifikasi
                                    dan penilaian yang dilakukan oleh Tim Juri Lomba Krenova Kota Semarang.
                                    Proses ini menentukan nominator dari tiap-tiap kategori.</p>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-9">
                                <h2>Pengumuman Pemenang Krenova</h2>
                                
                                <img class="alignright mt-20" src="assets/img/data.png" alt="">

                                <p>Pemenang Lomba Krenova dari masing-masing kategori adalah sebanyak 3
                                    (tiga) pemenang, akan mendapatkan piagam penghargaan, piala dan uang
                                    pembinaan pengembangan dari Walikota Semarang.
                                    Pemenang Lomba Krenova Kota Semarang Tahun 2022 akan diajukan sebagai
                                    calon peserta Lomba Krenova Provinsi Jawa Tengah dan pendampingan start up
                                    (pengusaha pemula)
                                    </p>

                            </div>
                        </div>
                        </div>
                </div>
                </div><!-- /.row -->
            </div><!-- /.vertical-tab -->

            </div><!-- /.container -->
        </section>
<!--Jadwal End-->

<!--Juara Start-->
        <section class="padding-top-70 padding-bottom-50">
            <div class="container">
                <div class="text-center mb-80">
                    <h2 class="text-uppercase text font-30 mb-30"><b>Penghargaan</b></h2>
                </div>
                <div class="row equal-height-row">
                    <div class="col-md-5 hero-thumb equal-height-column">
                        <img src="assets/img/mockup/piala (2).png" class="img-responsive " alt="Image">
                    </div>
                        <div class="col-md-7">
                            <div class="valign-wrapper equal-height-column">
                                <div class="hero-intro valign-cell">
                            <b>Pemenang Lomba Krenova dari masing-masing kategori adalah sebanyak 3
                                (tiga) pemenang, akan mendapatkan</br> 
                                - Piagam penghargaan</br> 
                                - Piala</br> 
                                - Uang pembinaan pengembangan dari Walikota Semarang.</br> 
                                Pemenang Lomba Krenova Kota Semarang Tahun 2022 akan diajukan sebagai
                                calon peserta Lomba </b>
                        </div><!-- /.hero-intro -->
                    </div><!-- /.container -->
                    </div>
                </div>
            </div><!-- /.container -->
        </section>
<!--Juara End-->

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
        </footer>
<!--Footer End-->

<!------------------------------------------------------CONTENT END-------------------------------------------------------------->

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
            <script src="assets/js/bootstrap-tabcollapse.min.js"></script>
            <script src="assets/js/jquery.stellar.min.js"></script>
            <script src="assets/js/jquery.sticky.min.js"></script>
            <script src="assets/js/jquery.countTo.min.js"></script>
            <script src="assets/js/jquery.shuffle.min.js"></script>
            <script src="assets/js/jquery.stellar.min.js"></script>
            <script src="assets/js/masonry.pkgd.min.js"></script>
            <script src="assets/flexSlider/jquery.flexslider-min.js"></script>
            <script src="assets/owl.carousel/owl.carousel.min.js"></script>
            <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script src="assets/js/scripts.js"></script>

            <!-- RS5.0 Core JS Files -->
            <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

            <!-- RS5.0 Init  -->
            <script type="text/javascript">
            jQuery(document).ready(function() {
            jQuery(".materialize-slider").revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                delay:3000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: true,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[700,600,500,500],
                disableProgressBar:"on",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                }


            });
            });
            </script>

            <script>
            $('#count1').on('inview', function(event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.timer').each(function () {
                    var $this = $(this);
                    $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
                $(this).off('inview');
            }
            });
            </script>

            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>

</html>