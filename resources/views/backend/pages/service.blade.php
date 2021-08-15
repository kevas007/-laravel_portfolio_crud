@extends('dashboard')

@section('body')
<div class="container">
    @include('backend.partials.services.servicesStatic')
    <br>
    <hr>
    <br>
    @include('backend.partials.services.services')
</div>
@endsection
