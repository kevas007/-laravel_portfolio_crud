@extends('frontend.template.main')

@section('content')
    @include('frontend.partial.navbar.nav')
    <main id="main">
        @include('frontend.partial.about.about')
        @include('frontend.partial.facts.facts')
        @include('frontend.partial.skills.skills')
        {{-- @include('frontend.partial.resume.resume') --}}
        @include('frontend.partial.portfolio.portfolio')
        @include('frontend.partial.services.service')
        {{-- @include('frontend.partial.testimonial.testimonal') --}}
        @include('frontend.partial.contact.contact')
        </main><!-- End #main -->
        @include('frontend.partial.footer.footer')
@endsection
