@extends('layouts.site')
@section('title','about')
@section('content')
    <div class="container-fluid p-0">
        <!-- About-->
        @isset($informations)
            @foreach($informations as $information)
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">{{$information['name']}}</h1>
                <div class="subheading mb-5">
                    {{$information['address']}} · (317) 585-8468 ·
                    <a href="mailto:name@email.com">{{$information['email']}}</a>
                </div>
                <p class="lead mb-5">{{$information['about']}}</p>
                <div class="social-icons">
                    <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
            @endforeach
        @endisset
    </div>
@endsection
