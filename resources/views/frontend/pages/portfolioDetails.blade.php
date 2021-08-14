@extends('frontend.template.main')

@section('content')
@include('frontend.partial.navbar.navbar')
<main id="main">
@include('frontend.partial.portfolio-details.portfolioDetails')
</main>

@include('frontend.partial.footer.footer')
@endsection
