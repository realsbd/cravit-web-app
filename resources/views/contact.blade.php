@extends('layout.app')

@section('title', 'Contact')

@section('headTitle', 'We Have The Best Team')

@section('subTitle', 'With great Passion and Dedication, we work tirelessly to Deliver THE BEST Service.')

@section('content-1')
    <section id="contact-form">
        <div class="contact container">
            <h2 class="txt-center mb-3">One of our Representative will reply your message in a short while.</h2>
            <ul class="row mb-3">
                <li class="col-md-6 col-12">Phone No: <a href="#">+1 567 233 9839</a></li>
                <li class="col-md-6 col-12">Email <a href="#">support@craviti.com</a></li>
            </ul>
            @if (session('success'))
                <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <form method="POST" action="/contact">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
            </form>
        </div>
    </section>
@endsection