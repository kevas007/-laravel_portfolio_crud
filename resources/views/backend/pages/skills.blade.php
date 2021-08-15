@extends('dashboard')

@section('body')
<div class="container">
    @include('backend.partials.skills.skills')
    <br>
    <hr>
    <br>
    @include('backend.partials.skillsStac.skill')
</div>
@endsection
