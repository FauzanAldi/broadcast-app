<div class="row wow fadeIn">
    @php
            $no=1;
    @endphp
    @foreach($u as $key)
        @if ($no>1)
            @php
                break;
            @endphp
        @endif
            {{-- {{ dd($key) }} --}}
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
        
        {{-- {{ $no }} --}}
        @php
            
            $no++;
        @endphp
    @endforeach
  <!--Grid column-->

</div>