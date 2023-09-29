@extends('layouts.site')
@section('title','awards')
@section('content')
    <div class="container-fluid p-0">
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">
                    @isset($awards)
                        @foreach($awards as $award)
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        {{$award['details']}}
                    </li>
                        @endforeach
                    @endisset
                </ul>
            </div>
        </section>
    </div>
@endsection
