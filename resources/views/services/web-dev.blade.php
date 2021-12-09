@extends('layout.app')

@section('title', 'Web Design')

@section('headTitle', 'Your Virtual Business Card')

@section('subTitle')
    Your website or app is the virtual business card that tells users about you.
@endsection

@section('content-1')
    @include('layout.services.web-dev-content')
@endsection

@section('content-2')
    @include('layout.indexVideo')
    @include('layout.cta')
    @include('layout.blog')
@endsection