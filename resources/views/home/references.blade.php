@extends('layouts.frontbase')

@section('title', 'References | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

<div class="section">
    <div class="container">
        <section class="contact-page-section">
            <div class="people-info-wrap">
            <h1>References</h1>
                <br>
                {!! $setting->references !!}
            </div>
        </section>
    </div>
</div> 





@endsection