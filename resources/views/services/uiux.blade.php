@extends('layout.app')

@section('title', 'UI-UX')

@section('headTitle', 'UI/UX Services')

@section('subTitle')
    we focus on delivering unique UI/UX designs for our clients and not just beautiful designs, but designs that meet clients' requirements and serve their goal. 
@endsection

@section('content-1')
    @include('layout.services.ui-ux-content')
@endsection

@section('content-2')
    @include('layout.indexVideo')
    @include('layout.cta')
    @include('layout.blog')
@endsection