@extends('layouts.frontbase')

@section('title', 'Booking')



@section('content')


<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Reserve Your Package</h2>
            @include('home.messages')

            <form action="{{route('savereservation')}}" method="post">
                @csrf
                @php
                    $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <div class="form-group">
                    <input class="input-  " type="text" name ="name" placeholder="Name & Surname">
                </div>
                <div class="form-group">
                    <input class="input-  " type="date" name ="startdate" placeholder="start date">
                </div>
                <select name="package_id" id="package_id" class="input-  ">
                            <option value="general">Choose package</option>
                            @foreach($mainCategories as $rs)
                            <option>{{$rs->id}}</option>
                            @endforeach
                </select>
                <div class="form-group">
                    <input  class="input-  " type="number" name ="person" placeholder="number of persons">
                </div>
                <div class="form-group">
                    <input class="input-  " type="text" name ="price" placeholder="price">
                </div>
                <div class="form-group">
                    <input class="input-  " type="text" name ="amount" placeholder="amount">
                </div>
                <div class="form-group">
                    <textarea class="input-  " type="text" name ="note" placeholder="Your Note"></textarea>
                </div>
                <div class="form-group">
                    <input class="input" type="submit" value="submit">
                </div>
                
            </form>
        </div>
    </div>
</section>





@endsection