<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Craviti | {{ $post->title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Roboto&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/c5bab74189.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/util.css">
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
   <div class="">
@include('layout.nav')

<div class="container">
    <div class="row m-t-80">
        <div class="col-12 col-md-12">
            <h1 class="m-t-30 m-b-20">{{ $post->title }}</h1>
            <div>
                {!! $post->body !!}
            </div>
        </div>
    </div>
</div>
@include('layout.footer')