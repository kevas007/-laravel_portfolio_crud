<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        @foreach ($abouts as $about)
    <div class="section-title">
            <h2>{{ $about->titreAbout }}</h2>
            <p>{{ $about->paragra }}</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/'.$about->img) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $about->titre }}</h3>
                <p class="font-italic">
                    {{ $about->description }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i>  {!! $about->birthday !!}</li>
                            <li><i class="icofont-rounded-right"></i> {!! $about->website !!}</li>
                            </li>
                            <li><i class="icofont-rounded-right"></i>{!! $about->phone!!} </li>
                            <li><i class="icofont-rounded-right"></i> {!! $about->city!!}  </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right">{!! $about->age!!}</i></li>
                            <li><i class="icofont-rounded-right"></i>{!! $about->degree!!}</li>
                            <li><i class="icofont-rounded-right"></i>{!! $about->email!!}</li>
                            <li><i class="icofont-rounded-right"></i>{!! $about->freelance!!} </li>
                        </ul>
                    </div>
                </div>
                <p>{{ $about->paragraphe }}</p>
                </p>
            </div>
        </div>

    </div>
        @endforeach

</section><!-- End About Section -->
