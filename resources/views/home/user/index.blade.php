@extends('layouts.frontbase')

@section('title', ' User Panel ')


@section('content')


<section class="contact-page-section">
    <div class="container">

        <div class="contact-info">
            <h2>User Menu</h2>
            <ul class="contact-list">
            @include('home.user.usermenu')
            </ul>
        </div>

        <div class="people-info-wrap">
            <h2>User Profile</h2>
            @include('profile.show')
        </div>
    </div>

@endsection