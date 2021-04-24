<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Yasin Murah ID</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            YASIN MURAH ID
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang Kami</a></li>
                            <li class="scroll-to-section"><a href="#projects">Produk</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Features</a></li>
                                    <li><a href="">FAQ's</a></li>
                                    <li><a href="">Blog</a></li>
                                </ul>
                            </li> -->
                            <li class="scroll-to-section"><a href="#contact-us">Kontak Kami</a></li> 
                            <div class="search-icon">
                                <a href="#search"><i class="fa fa-search"></i></a>
                            </div>
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
    
    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          @foreach($s as $key)
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="{{ asset('uploads/'.$key->file) }}" alt="">
                <div class="text-content">
                  <h3>{{ $key->name }}</h3>
                  <h5>{{ $key->deskripsi }}</h5>
                  <a href="#" class="main-stroked-button">Selengkapnya</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          @endforeach
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang Kami</h6>
                            <h2>Kenapa Pesan di YasinMurah ID ?</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/service-item-01.png" alt="">
                                    <h4>Proses Cepat</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/service-item-01.png" alt="">
                                    <h4>Harga Mulai 5 Ribu</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Pilihan Design Banyak</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h6><b>Minimal Pemesanan Hanya 10 Pcs</b></h6>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="main-button-icon">
                                    Pesan Sekarang <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p><a rel="nofollow noopener" href="{{ url('') }}" target="_parent">Yasin Murah ID</a> adalah Pusat Cetak Buku Yasin dan Tahlil Profesional dengan JAMINAN Harga Termurah. 
                        <br><br>Cocok Untuk anda yang menginginkan pengerjaan yang cepat, kami selalu berusaha memberikan pelayanan secepat mungkin setelah design di approve.
                      <br><br><b>GRATIS ONGKOS KIRIM* PESAN SEKARANG JUGA.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Produksi Sangatlah Cepat</h4>
                            <p>Proses Pembuatan Sangatlah Cepat.. Proses Produksi Berkisar Antara 1 - 3 Hari saja setelah Design di Approve</p>
                            <!-- <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Minimal Order 10 pcs</h4>
                            <p>Minimal Pemesanan Hanyalah 10 pcs. Jadi jangan ragu untuk Pesan</p>
                            <!-- <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Gratis Ongkir ke Jabodetabek</h4>
                            <p>Untuk Pengiriman Kami Gratis Ongkir ke Jabodetabek dan Ada Potongan Ongkir untuk di Luar Jabodetabek</p>
                            <!-- <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Mau Mendapatkan Promo Gratis Ongkir dan Promo Lainnya !!</h6>
                        <h2>Jangan Kehilangan Kesempatan ini !!</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Kami Selalu memberikan Penawaran dan Promo Menarik Setiap Saat. Kami sangat ingin membantu saudara sekalian yang ingin Membuat Yasin Sebagai Bentuk Amal Jariyah kepada Orang Tercinta</p>
                        <div class="subscribe-form">
                            <form id="subscribe-now" action="" method="get">
                                <div class="row">
                                    <!-- <div class="col-md-8 col-sm-12">
                                      <fieldset>
                                        <input name="text" type="text" id="email" placeholder="Masukan Nomor Handphone / Whatsapp" required="">
                                      </fieldset>
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 section-heading">
                                      <!-- <fieldset> -->
                                        <button type="submit" id="form-submit" class="main-button center-block">Dapatkan Sekarang</button>
                                      <!-- </fieldset> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Testimoni</h6>
                    <h2>Pelanggan Kami</h2>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach($u as $key)
                            <li data-filter=".key{{ $key->id }}">{{ $key->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                        @foreach($u as $key)

                            @foreach($key->testimoni as $key2)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all key{{ $key->id }}">
                                <div class="item">
                                    <a href="{{ asset('uploads/'.$key2->file) }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('uploads/'.$key2->file) }}" alt=""></a>
                                </div>
                            </div>
                            @endforeach

                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Daftar</h6>
                        <h2>Produk Tersedia</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-01.jpg" alt="">
                                <!-- <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <h4>Yasin Murah Meriah (Arab)</h4>
                            <span><span style="text-decoration: line-through red;">Rp. 10.000</span> Rp. 5.000</span>
                            <br><br>
                            <button type="submit" id="form-submit" class="main-button center-block">LIhat Design Selengkapnya</button>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-04.jpg" alt="">
                                <!-- <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <h4>Yasin Murah Meriah (Arab + Terjemahan)</h4>
                            <span><span style="text-decoration: line-through red;">Rp. 15.000</span> Rp. 10.000</span>
                            <br><br>
                            <button type="submit" id="form-submit" class="main-button center-block">LIhat Design Selengkapnya</button>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-02.jpg" alt="">
                                <!-- <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <h4>Yasin Super Cepat (Arab + Terjemahan) ( Bonus Tasbih Jika Stok Tersedia )</h4>
                            <span><span style="text-decoration: line-through red;">Rp. 25.000</span> Rp. 15.000</span>
                            <br><br>
                            <button type="submit" id="form-submit" class="main-button center-block">LIhat Design Selengkapnya</button>
                        </div>
                        <!-- <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-05.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.04 Catherine Phyu</h4>
                            <span>Co Founder</span>
                        </div> -->
                        <!-- <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-03.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.05 Shao Lynn</h4>
                            <span>Chief Marketing</span>
                        </div> -->
                        
                        <!-- <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.06 Emma Honey</h4>
                            <span>Digital Influencer</span>
                        </div> -->
                        
                        <!-- <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-06.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.07 Oliva Sofie</h4>
                            <span>Website Analyst</span>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Hubungi Kami</h6>
                            <h2>Jangan Ragu Untuk Hubungi Kami Jika Ada Pertanyaan</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">081776665851</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">info@bisniscustom.id</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">yasin.bisniscustom.id</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Kirim Pesan Sekarang <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; {{ date('Y') }} Bisnis Custom ID. 
                        
                        - Developer: <a rel="nofollow noopener" href="https://instagram.com/mohfauzanaldi">Mohamad Fauzan Aldi</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @php   
        use App\Models\Tracker;
        Tracker::hit();
    @endphp
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>