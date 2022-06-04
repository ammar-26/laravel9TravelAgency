@extends('layouts.frontbase')

@section('title', 'Contact | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')


<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>leave us your info</h2>
            @include('home.messages')
            <form action="{{route('storemessage')}}" method="post">
                @csrf
                <div class="form-group">
                    <input class="input-  " type="text" name ="name" placeholder="Name & Surname">
                </div>
                <div class="form-group">
                    <input class="input-  " type="text" name ="phone" placeholder="phone">
                </div>
                <div class="form-group">
                    <input class="input-  " type="tel" name ="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input class="input-  " type="text" name ="subject" placeholder="subject">
                </div>
                <div class="form-group">
                    <textarea class="input-  " type="text" name ="message" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group">
                    <input class="input" type="submit" value="Send Message">
                </div>
                
            </form>
        </div>

        <div class="contact-info">
            <h2>contact info</h2>
            <ul class="contact-list">
            
                {!! $setting->contact !!}

            </ul>
            <ul class="contact-social">
                <li><a href=""><i class="fab fa-viber"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-skype"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</section>





@endsection