@extends('yasin.layouts')

@section('content')

    {{-- <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          @foreach($s as $key)
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="{{ asset('uploads/'.$key->file) }}" alt="">
                <div class="text-content">
                  <h3 style="color: black">{{ $key->name }}</h3>
                  <h5 style="color: black">{{ $key->deskripsi }}</h5>
                  <a href="#" class="main-stroked-button">Selengkapnya</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          @endforeach
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div> --}}
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            {{-- <h6>Tentang Kami</h6> --}}
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
                                <a href="#testimonials" class="main-button-icon" onclick="AddHits(2)">
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

    <div class="scroll-down scroll-to-section"><a href="#features"><i class="fa fa-arrow-down"></i></a></div>

    <!-- Button trigger modal -->

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
                                        <button onclick="AddHits(3)" type="button" data-toggle="modal" data-target="#exampleModalLong" class="main-button center-block">Dapatkan Sekarang</button>
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
    <section class="section" id="projects" style="height: 1300px;">
      <div class="container" >
        <div class="row" >
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Testimoni</h6>
                    <h2>Pelanggan Kami</h2>
                </div>
                <div class="filters">
                    <ul>
                        {{-- <li class="active" data-filter="*">All</li> --}}
                        @php
                            $no=1;
                        @endphp
                        @foreach($u as $key)
                            @if($no==1)
                                <li class="active" data-filter=".key{{ $key->id }}">{{ $key->name }}</li>
                            @else
                                <li data-filter=".key{{ $key->id }}">{{ $key->name }}</li>
                            @endif
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9" style="height: 100%;">
                <div class="filters-content" style="height: auto;">
                    <div class="row grid" >
                        @foreach($u as $key)

                            @foreach($key->testimoni as $key2)
                                {{-- @if(strpos($key2->file, 'mp4') !== false)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 key{{ $key->id }}">
                                        <div class="item">
                                            <video style="width: 100%; max-height: 700px; position: relative; " controls="">
                                                <source src="{{ asset('uploads/'.$key2->file) }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                
                                @else --}}
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 key{{ $key->id }}">
                                        <div class="item">
                                            <a href="{{ asset('uploads/'.$key2->file) }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('uploads/'.$key2->file) }}" alt=""></a>
                                        </div>
                                    </div>
                                {{-- @endif --}}
                            
                            @endforeach

                        @endforeach
                        
                        
                    </div>
                </div>
                <div class="row wow fadeIn">
                    @php
                            $no=1;
                    @endphp
                    @foreach($u as $key)
                        @if ($no==1)
                            
                            @foreach($key->testimoni as $key2)
            
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4" >
                                @if(strpos($key2->file, 'mp4') !== false)
                        
                                    <video style="width: 100%; max-height: 500px;" controls="">
                                        <source src="{{ asset('uploads/'.$key2->file) }}" type="video/mp4">
                                    </video>
            
                                @else
                                <a href="{{ asset('uploads/'.$key2->file) }}" data-lightbox="image-1" data-title="File Utama">
                                    <img src="{{ asset('uploads/'.$key2->file) }}" class="img-fluid" alt="">
                                </a>
            
                                @endif
            
                            </div>
                            
                            @endforeach
                        @endif
                        @php
                            {{ $no }}
                            $no++;
                        @endphp
                    @endforeach
                  <!--Grid column-->
          
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
                        @foreach($p as $key)
                        <div class="item author-item">
                            <div class="member-thumb">
                                @if(strpos($key->file, 'mp4') !== false)
            
                                    <video style="width: 100%; max-height: 500px;" controls="true">
                                        <source src="{{ asset('uploads/'.$key->file) }}" type="video/mp4">
                                    </video>

                                @else
                                <a href="{{ asset('uploads/'.$key->file) }}" data-lightbox="image-1" data-title="File Utama">
                                    <img src="{{ asset('uploads/'.$key->file) }}" class="img-fluid" alt="">
                                </a>

                                @endif
                            </div>
                            <h4>{{ $key->name }}</h4>
                            <span><span style="text-decoration: line-through red;">Rp. {{ $key->price }}</span> Rp. {{ $key->diskon }}</span>
                            <br><br>
                            <a href="{{ route('product.detail',$key->id) }}" type="submit" id="form-submit" class="btn btn-info center-block">LIhat Selengkapnya</a>
                        </div>
                        @endforeach
                        
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
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="nama" type="text" id="name" placeholder="Nama">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="whatsapp" type="text" id="phone" placeholder="Whatsapp">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Email">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="pesan" rows="6" id="message" placeholder="Pesan"></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" class="main-button-icon">Kirim Pesan Sekarang <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@section('modal')

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{ route('subscribe.store') }}" method="post">
            @csrf
      {{-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
          <div class="modal-body">
            
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">No Whatsapp</label>
                <input type="text" class="form-control" placeholder="Masukan No Whatsapp" name="whatsapp">
              </div>
              
            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Dapatkan Sekarang</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
      </form>
    </div>
  </div>
</div>

@endsection

@php   
        use App\Models\Tracker;
        Tracker::hits(1);
    @endphp