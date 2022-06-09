@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@section('head')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection

@section('content')

<div class="section">
    <div class="container">
        <section class="contact-page-section">
                <div class="people-info-wrap">
                    <h1>Frequently Asked Questions</h1>
                    <br><br><br>
                    <div id="accrodion"></div>
                        @foreach ($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                    <h3>{{$rs->question}}</h3>
                                </a>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accrodion">
                                <div class="card-body">
                                    <p>{!! $rs->answer !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>
    </div>
</div> 





@endsection