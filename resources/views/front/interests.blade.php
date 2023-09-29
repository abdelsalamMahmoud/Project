@extends('layouts.site')
@section('title','interests')
@section('content')
    <div class="container-fluid p-0">

        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                @isset($interests)
                    @foreach($interests as $interest)
                <p>{{$interest['details']}}</p>
                    @endforeach
                @endisset
            </div>
        </section>
        <hr class="m-0" />
    </div>
@endsection
