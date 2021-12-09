@extends('layout.app')

@section('title', 'Home')

@section('headTitle', 'Providing You The FUTURE of Branding Services')

@section('subTitle', 'Branding Services: Graphic designs, UI/UX Designs, Web/App Design and Development, and Video Animations.')

@section('content-1')
    @include('layout.services')
@endsection

@section('content-2')
    @include('layout.workflow')
    <!-- <div id="video-intro" class="container">
        <div class="row unrow">
            <div class="col-10  col-lg-6 craviti-video">
                <video src="#" width="" height="" autoplay></video>
            </div>
            <div class="inro-desc col-12 col-lg-6 ">
                <h2>Know About CRAVITI</h2>
                <p class="m-t-10">Our team comprises professional graphic designers, video animators, copywriters, photographers, programmers, web designers and developers, and marketers who have the state-of-the-art tools needed to execute your project.</p>
                <a href="#">Read more...</a>
            </div>
        </div>
    </div> -->
    @include('layout.indexVideo')
    @include('layout.cta')
    @include('layout.success')
    @include('layout.testimonial')
    @include('layout.blog')
@endsection