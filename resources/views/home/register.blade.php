@extends('layouts.frontbase')

@section('title', 'User Regeisteration Page | ')

@section('content')

<div class="section">
    <div class="container">
        <section class="contact-page-section">

            @include('auth.register')

        </section>
    </div>
</div> 




@endsection