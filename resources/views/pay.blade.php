@extends('layout.app')

@section('title', 'Contact')

@section('content-1')
    <section id="contact-form">
        <div class="contact container">
            <h2 class="txt-center mb-3">Kindly make your payment via our secured partner</h2>
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
                    <label for="Subject">Reason for Payment</label>
                    <input type="text" class="form-control" name="reason" id="subject" placeholder="Subject" required>
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