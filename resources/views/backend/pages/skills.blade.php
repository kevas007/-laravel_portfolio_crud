@extends('dashboard')
@include('flash')
@section('body')
<div class="container">
    @include('backend.partials.skillsStac.skill')

    <br>
    <hr>
    <br>
    @include('backend.partials.skills.skills')
</div>
@endsection
