<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">
        @foreach ($facts as $fact )
        <div class="section-title">
            <h2>{{ $fact->titre }}</h2>
            <p>{{ $fact->titrePara }}</p>
        </div>

        <div class="row no-gutters">

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">{{ $fact->happy}}</span>
                    <p>{!! $fact->paraHappy !!}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                data-aos-delay="100">
                <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">{{ $fact->project}}</span>
                    <p>{!! $fact->paraProjet !!}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                data-aos-delay="200">
                <div class="count-box">
                    <i class="icofont-live-support"></i>
                    <span data-toggle="counter-up">{{ $fact->support }}</span>
                    <p>{!! $fact->paraSupp !!}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                data-aos-delay="300">
                <div class="count-box">
                    <i class="icofont-users-alt-5"></i>
                    <span data-toggle="counter-up">{{ $fact->work }}</span>
                    <p>{!! $fact->paraWork !!}</p>
                </div>
            </div>

        @endforeach
        </div>

    </div>
</section><!-- End Facts Section -->
