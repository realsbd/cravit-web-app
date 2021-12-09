<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactus;
use Illuminate\Support\Facades\Mail;
use Wink\WinkPost;

class ServicesController extends Controller
{
    public function index(){
        $posts = WinkPost::all()->toArray();

        // dd($posts);

        return view('home', [
            'posts' => $posts,
        ]);
    }
    public function about(){
        $posts = WinkPost::all()->toArray();
        
        return view('about-us', [
            'posts' => $posts,
        ]);
    }
    public function contact(){
        return view('contact');
    }

    public function branding(){
        $posts = WinkPost::all()->toArray();
        
        return view('services.branding', [
            'posts' => $posts,
        ]);
    }
    public function uiux(){
        $posts = WinkPost::all()->toArray();
        
        return view('services.uiux', [
            'posts' => $posts,
        ]);
    }
    public function webdev(){
        $posts = WinkPost::all()->toArray();
        
        return view('services.web-dev', [
            'posts' => $posts,
        ]);
    }
    public function videoanimation(){
        $posts = WinkPost::all()->toArray();
        
        return view('services.video-animation', [
            'posts' => $posts,
        ]);
    }
    public function privacy(){        
        return view('privacy');
    }
}
