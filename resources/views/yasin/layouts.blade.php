<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cetak Buku Yasin Murah, Harga Mulai 5 Ribu, Proses Hanya 2 Hari, PILIHAN DESIGN BANYAK, Gratis Ongkir ke Jabodetabek dan Minimal Order Hanya 10 Pcs">
    <meta name="author" content="">
    <meta content='cetak yasin, buku yasin, cetak buku yasin, yasin murah, cetak yasin cepat' name='keywords'/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cetak Buku Yasin Harga 5 Ribu dan Proses Hanya 2 Hari !!</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-breezed.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

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
                        <a href="{{ url('') }}" class="logo">
                            BUKU YASIN ID
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('') }}#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="{{ url('') }}#projects">Testimoni</a></li>
                            <li class="scroll-to-section"><a href="{{ url('') }}#testimonials">Produk</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Features</a></li>
                                    <li><a href="">FAQ's</a></li>
                                    <li><a href="">Blog</a></li>
                                </ul>
                            </li> -->
                            <li class="scroll-to-section"><a href="{{ url('') }}#contact-us">Kontak Kami</a></li> 
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
    {{-- <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div> --}}

    <!-- ***** Main Banner Area Start ***** -->
    @yield('content')
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

    

    @yield('modal')

    @if ($message = Session::get('message'))

      <div class="modal fade" id="notifikasi" tabindex="-1" role="dialog" aria-labelledby="notifikasi" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                      <strong>{{ $message }}</strong>
                  </div>
            </div>
          </div>
        </div>
    @endif
    

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    @if ($message = Session::get('message'))

    <script type="text/javascript">
            $(window).on('load', function() {
                $('#notifikasi').modal('show');
            });
        </script>
    @endif

    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> --}}

    {{-- <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script> --}}

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('assets/js/slick.js') }}"></script> 
    <script src="{{ asset('assets/js/lightbox.js') }}"></script> 
    <script src="{{ asset('assets/js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

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

    <script type="text/javascript">
        
        function AddHits(category_id,ket){

            $.ajax(
                {
                    url: "{{ route('tracking.hits') }}", 
                    method : 'POST',
                    data : {
                        '_token' : '{{ csrf_token() }}',
                        'category_id' : category_id,
                        'ket' : ket
                    },
                    success: function(){
                        console.log('Sukses');
                    }
                });

        }

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-71D6KWL9DH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-71D6KWL9DH');
    </script>

    @yield('js')

  </body>
</html>