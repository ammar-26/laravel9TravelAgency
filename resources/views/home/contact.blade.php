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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
            <form>
                <span>
                <input type="text" placeholder="Full Name*" class="input- name">
                <input type="email" placeholder="Email*" class="input- email">
                </span>
                <input type="text" placeholder="Phone*" class="input- phone">
                <textarea placeholder="Messages*" class="input-message">
                    
                </textarea>
                <input type="submit" value="submit now">
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