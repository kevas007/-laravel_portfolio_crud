@extends('dashboard')
@include('flash')
@section('body')
<div class="container">
    @include('backend.partials.portfolio.portfolio')
    @include('backend.partials.portfolioStatic.portfolioS')
</div>
@endsection
