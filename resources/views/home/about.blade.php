@extends('layouts.frontbase')

@section('title', 'About Us | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

<div class="section">
    <div class="container">
        <section class="contact-page-section">
            <div class="people-info-wrap">

                {!! $setting->aboutus !!}

            </div>
        </section>
    </div>
</div> 




@endsection