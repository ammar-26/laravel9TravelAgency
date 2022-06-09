@extends('layouts.frontbase')

@section('title', 'References | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

<div class="section">
    <div class="container">
        <div class="row">
            <section class="contact-page-section">
                <div class="people-info-wrap">
                    {!! $setting->references !!}
                </div>
            </section>
        </div>
    </div>
</div> 





@endsection