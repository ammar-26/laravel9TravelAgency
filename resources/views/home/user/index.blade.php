@extends('layouts.frontbase')

@section('title', ' User Panel ')


@section('content')


<!-- <section class="contact-page-section">
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="billing-details">    
                    <div class="section-title">
                        <h1>User Profile</h1>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="contact-info">
            <div class="col-md-2">
                <div class="shipping-methods">    
                    <div class="section-title">
                        <h1>User Menu</h1>
                    </div>
                    @include('home.user.usermenu')
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>User Profile</h2>
            @include('profile.show')
        </div>

        <div class="contact-info">
            <h2>User Menu</h2>
            <ul class="contact-list">
            @include('home.user.usermenu')
            </ul>
        </div>
    </div>



@endsection