<!doctype html>
<html lang="en">
<head>
    <title><?=$title?> | Partner Creator Digitalmu</title>

    <meta charset="utf-8">
    <meta name="keywords" content="Landing page, software, (SaaS) services, Bootstrap 4 template, plugins, app, SEO friendly, business, Sass, Gulp">
    <meta name="description" content="Smooth is a HTML5 Landing Page Build using Gulp, SCSS, and Bootstrap4. It was designed to promote your App, services or business projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="99webpage">
    
    <link rel="icon" type="image/png" href="<?=base_url();?>assets/favicon/smooth-favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?=base_url();?>assets/favicon/smooth-favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=base_url();?>assets/favicon/smooth-favicon-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="<?=base_url();?>assets/favicon/smooth-favicon-196x196.png" sizes="196x196">

    <link rel="apple-touch-icon" href="favicon/smooth-favicon-196x196.png">

    <!-- Template stylesheet -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.min.css">
    </head>
    <body>

    <!-- Start Header -->
    <header class="<?=($this->uri->segment(1)=='')?'header js-header-scroll':'header js-header-scroll header__inner'?>">
        <nav hidden>
            <div class="nav-header">
                <a href="#" class="brand">
                    <img src="<?=base_url();?>assets/brand/wow2.png" width="150px" height="auto" class="logo" alt="Smooth" />
                </a>
                <button class="toggle-bar">
                    <span class="fa fa-bars"></span>
                </button>
            </div>      
            <!-- Start Header menu for mobile -->
            <div class="header__mobile js-header-menu">
                <a href="#" class="header__mobile-brand">Menu</a>
                <button class="toggle-bar header__mobile-toggle">
                    <span class="fa fa-remove"></span>
                </button>
            </div>
            <!-- End Header menu for mobile --> 
            <ul class="menu">
                <li class="active"><a href="<?=base_url()?>">Beranda</a></li>
                <li><a href="<?=base_url('page')?>">Layanan</a></li>
                <li><a href="<?=base_url('page/harga')?>">Harga</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
            <ul class="attributes">
                <li class="header__button"><a href="#" class="btn btn-primary btn-rounded btn-xs btn-header">Pesan Sekarang</a></li>
                <!-- <li class="header__download-icon"><a href="#"><i class="fa fa-download"></i></a></li> -->
            </ul>
        </nav>
    </header>
    <!-- End Header -->

    <?php $this->load->view($layout);?>

    <!-- Start Back to top -->
    <div class="back-to-top js-back-to-top">
        <span class="fa fa-angle-double-up back-to-top__icon"></span>
        <span class="back-to-top__text">TOP</span>
    </div>
    <!-- End Back to top -->

    <!-- Start Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer__widget">
                        <img src="<?=base_url();?>assets/brand/wow2.png" width="150px" height="auto" class="footer__widget-logo" alt="Smooth" />
                        <p>Banyuwangi, Jawa Timur - Indonesia</p>
                        <div class="footer__widget-contact">
                            <i class="fa fa-phone"></i>
                            <p>089657545285</p>
                        </div>
                        <div class="footer__widget-contact">
                            <i class="fa fa-envelope"></i>
                            <p>info@wowdigi.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Layanan Kami</h4>
                        <ul class="footer__widget-linklist">
                            <li><a href="#">Website</a></li>
                            <li><a href="#">Aplikasi</a></li>
                            <li><a href="#">Multimedia</a></li>
                            <li><a href="#">Desain Grafis</a></li>
                            <li><a href="#">Literasi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Tentang Kami</h4>
                        <ul class="footer__widget-linklist">
                            <li><a href="<?=base_url('blog');?>">Blog</a></li>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="<?=base_url('page/testimoni');?>">Testimoni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Follow us</h4>
                        <ul class="footer__widget-network">
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="footer__subfooter">
                        <div class="row">
                            <div class="col-md-6">
                                <p>© <a href="#">Wow Digi</a> | Indonesia 2020. All Rights Reserved.</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <ul class="footer__subfooter-liststyle">
                                    <li><a href="#">Terms Of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>assets/js/jquery.min.js"></script>

    <!-- Template main JavaScript -->
    <script src="<?=base_url();?>assets/js/main.min.js"></script>

    <!-- Template custome JavaScript -->
    <script src="<?=base_url();?>assets/js/scripts.min.js"></script>
    </body>
</html>
