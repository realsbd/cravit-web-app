@extends('layout.app')

@section('title', 'Video Animation')

@section('headTitle', 'Irresistible and Interactive Strategy ')

@section('subTitle')
    Video animation is an irresistible and interactive strategy for capturing targets for any business.
@endsection

@section('content-1')
    @include('layout.services.web-dev-content')
@endsection

@section('content-2')
    @include('layout.indexVideo')
    @include('layout.cta')
    @include('layout.blog')
@endsection