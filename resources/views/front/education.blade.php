@extends('layouts.site')
@section('title','education')
@section('content')
    <div class="container-fluid p-0">
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                @isset($educations)
                    @foreach($educations as $education)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{$education['uni']}}</h3>
                        <div class="subheading mb-3">{{$education['degree']}}</div>
                        <div>{{$education['collage']}}</div>
                        <p>GPA: {{$education['GPA']}}</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">{{$education['start_date']}} - {{$education['end_date']}}</span></div>
                </div>
                    @endforeach
                @endisset

            </div>
        </section>
        <hr class="m-0" />
    </div>
@endsection
