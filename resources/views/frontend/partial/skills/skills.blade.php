
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">
                
                <div class="section-title">
                    <h2>{{ $skillStact[0]->titre }}</h2>
                    <p>{{ $skillStact[0]->description }}</p>
                </div>

                <div class="row skills-content">

                    @foreach ($skills as $skill )
                    <div class="col-lg-6" data-aos="fade-up">


                        <div class="progress">
                            <span class="skill">{{ $skill->titre }} <i class="val">{{ $skill->value }}</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->value }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                @endforeach
                </div>

            </div>
        </section><!-- End Skills Section -->
