<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $details[0]->titre }}</h2>
            <ol>
                <li>{!! $details[0]->home !!}</li>
                <li>{{ $details[0]->details }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="portfolio-details-container">

            <div class="owl-carousel portfolio-details-carousel">
                <img src="{{ asset('assets/img/'.$details[0]->image1 ) }}" class="img-fluid" alt="">
                <img src="{{ asset('assets/img/'.$details[0]->image2 ) }}" class="img-fluid" alt="">
                <img src="{{ asset('assets/img/'.$details[0]->image3 ) }}" class="img-fluid" alt="">
            </div>

            <div class="portfolio-info">
                <h3>{{ $details[0]->titre }}</h3>
                <ul>
                    <li>{!! $details[0]->category !!}</li>
                    <li>{!! $details[0]->client !!}</li>
                    <li>{!! $details[0]->projetDate !!}</li>
                    <li>{!! $details[0]->projetUrl !!}</li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <h2>{{ $details[0]->titre3 }}</h2>
            <p>
                {{ $details[0]->para }}
            </p>
        </div>

    </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
