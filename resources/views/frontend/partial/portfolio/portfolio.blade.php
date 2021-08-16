<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
    <div class="container">
        @foreach ($portfolioStats as $portfolioStat )
        <div class="section-title">
            <h2>{{ $portfolioStat->titre }}</h2>
            <p>{{ $portfolioStat->paragraphe }}</p>
        </div>
        @endforeach

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($portfolios  as  $portf)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portf->filter }}">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/'.$portf->lien) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('assets/img/portfolio/'.$portf->lien) }}" data-gall="portfolioGallery"
                            class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="/portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Portfolio Section -->
