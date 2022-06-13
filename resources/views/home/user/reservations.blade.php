@extends('layouts.frontbase')

@section('title', ' User Comments & Reviews ')


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
            <h2>User Reservations</h2>
            <br><br>
            <div class="content-panel">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th style = "width: 25px">user</th>
                        <th>startdate</th>
                        <th>person</th>
                        <th>price</th>
                        <th>amount</th>
                        <th>Status</th>
                        <th style = "width: 40px">delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservations as $rs)
                    <tr>
                        <td>{{$rs->user_id}}</td>
                        <td>{{$rs->startdate}}</td>
                        <td>{{$rs->person}}</td>
                        <td>{{$rs->price}}</td>
                        <td>{{$rs->amount}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('userpanel.commentdestroy', ['id'=>$rs->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-round btn-danger">Delete</a></td>
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>



@endsection