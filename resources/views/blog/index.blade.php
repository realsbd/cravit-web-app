<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Craviti | Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Roboto&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/c5bab74189.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/util.css">

</head>
<body>
   <div class="">
    @include('layout.nav')
   <div class="container">
        <div class="row m-t-80 m-b-40">
            <div class="col-12 col-md-6 p-r-30 p-l-30">
                <div class="recent-post">
                    <div>
                        <img src="{{ $posts->first()->featured_image }}" alt="tested image" srcset="" class="blog-image">
                    </div>
                    <h2>{{ $posts->first()->title }}</h2>
                    <p>{{ $posts->first()->excerpt }}... <a href="/{{ $posts->first()->slug }}" class="read">Read More</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 p-r-30 p-l-30">
            <div class="lastest-post">
                    <h2>Latest Post</h2>
                    <h2 class="m-t-30 m-b-10 blog-title"><a href="/{{{ $titles[0]['slug'] }}}">{{{ $titles[0]['title'] }}}</a></h2>
                    <h2 class="m-t-30 m-b-10 blog-title"><a href="/{{{ $titles[0]['slug'] }}}">{{{ $titles[1]['title'] }}}</a></h2>
                    <h2 class="m-t-30 m-b-10 blog-title"><a href="/{{{ $titles[0]['slug'] }}}">{{{ $titles[2]['title'] }}}</a></h2>
                    <h2 class="m-t-30 m-b-10 blog-title"><a href="/{{{ $titles[0]['slug'] }}}">{{{ $titles[3]['title'] }}}</a></h2>
                </div>
            </div>
        </div>
        
        <div class="row m-b-30">
            <div class="col-12 col-md-8 row">
            @foreach ($posts as $post)
                    <div class="col-md-4 m-b-20">
                        <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}" srcset="" class="blog-image">
                    </div>
                    <div class="col-md-8 col-12 m-b-20">
                        <h2 class="m-b-10"><a href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->excerpt }}</p>
                        <h3 style="font-style: italic; font-size: 1.2rem;">No Tag Yet</h3>
                    </div>
            @endforeach
            </div>
            <div class="col-12 col-md-4">
                <div class="subscribe p-t-20 p-b-20 p-l-10 p-r-10">
                    <h2>Get The Newsletter</h2>
                    <p>Subscribe to Craviti newsletter and the best news and insights in your inbox</p>
                    <form action="" method="post" class="subscribe-form">
                        <input type="text" name="email" value="">
                        <button type="submit" class="btn btn-cutom">Subscribe</button>
                    </form>
                </div>
                
            </div>
        </div>
   </div>
    
    @include('layout.footer')
