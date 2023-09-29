@extends('layouts.site')
@section('title','experience')
@section('content')
    <div class="container-fluid p-0">
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                @isset($experiences)
                    @foreach($experiences as $experience)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{$experience['title']}}</h3>
                        <div class="subheading mb-3">{{$experience['company']}}</div>
                        <p>{{$experience['details']}}</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">{{$experience['start_date']}} - {{$experience['end_date']}}</span></div>
                </div>
                    @endforeach
                @endisset
            </div>
        </section>
        <hr class="m-0" />
    </div>
@endsection
