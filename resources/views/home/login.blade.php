@extends('layouts.frontbase')

@section('title', 'User Login Page | ')

@section('content')

<div class="section">
    <div class="container">
        <section class="contact-page-section">

            @include('auth.login')

        </section>
    </div>
</div> 




@endsection