@extends('yasin.layouts')

@section('content')

<main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
        	@if(strpos($p->file, 'mp4') !== false)
        	
        		<video style="width: 100%; max-height: 700px;" controls="">
        			<source src="{{ asset('uploads/'.$p->file) }}" type="video/mp4">
        		</video>

        	@else
        	<a href="{{ asset('uploads/'.$p->file) }}" data-lightbox="image-1" data-title="File Utama">
        		<img src="{{ asset('uploads/'.$p->file) }}" class="img-fluid" alt="">
        	</a>

        	@endif
          

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            {{-- <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">Gratis Ongkir</span>
              </a>
              <a href="">
                <span class="badge blue mr-1">1 - 2 Hari Jadi</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Bonus Tasbih</span>
              </a>
            </div> --}}

            <p class="lead">
              <span class="mr-1">
                <del>Rp. {{ $p->price }}</del>
              </span>
              <span>Rp. {{ $p->diskon }}</span>
            </p>
            <br>
            <p class="lead font-weight-bold">{{ $p->name }}</p>
            <br>
            {!! $p->deskripsi !!}
            <br>
            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Beli
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Foto dan Video Lainnya</h4>

          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
            voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p> --}}

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

      	@if($p->files)

      		@foreach($p->files as $key)

		        <!--Grid column-->
		        <div class="col-lg-4 col-md-12 mb-4" >
		        	@if(strpos($key->file, 'mp4') !== false)
        	
		        		<video style="width: 100%; max-height: 500px;" controls="">
		        			<source src="{{ asset('uploads/'.$key->file) }}" type="video/mp4">
		        		</video>

		        	@else
		        	<a href="{{ asset('uploads/'.$key->file) }}" data-lightbox="image-1" data-title="File Utama">
		        		<img src="{{ asset('uploads/'.$key->file) }}" class="img-fluid" alt="">
		        	</a>

		        	@endif

		        </div>

		    @endforeach

        @endif
        <!--Grid column-->

        


        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>

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

              <div class="form-group">
                <label for="exampleInputEmail1">Produk</label>
                <input type="text" name="">
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