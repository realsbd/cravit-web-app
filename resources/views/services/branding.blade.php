@extends('layout.app')

@section('title', 'Branding')

@section('headTitle', 'Branding Services')

@section('subTitle')
    This service include Brand Identity,<br> Stationery, Social media kits and <br> more
    @endsection

@section('content-1')
    @include('layout.services.branding-content')
@endsection

@section('content-2')
    @include('layout.indexVideo')
    @include('layout.cta')
    @include('layout.blog')
@endsection