@extends('layouts.frontbase')

@section('title', $data->title)
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@section('content')

<section class="page-content" id="course-page">
    <div class="container">
        <main class="course-detail">

        <h2>{{$data->title}}</h2>
            <br>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{Storage::url($data->image)}}" style="width: 800px; height : 500px">
                </div>
                @foreach ($images as $rs)
                <div class="item">
                    <img src="{{Storage::url($rs->image)}}" style="width: 800px; height: 500px">
                </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>

            <header>
                <div class="course-box">
                    <i class="far fa-clock"></i>
                    <p>4 weaks</p>
                    <p>(5 hours/day)</p>
                </div>

                <div class="course-box">
                    <div>
                        @php
                            $average = $data->comment->average('rate');
                        @endphp
                        
                            <div class="review-rating ">
                            {{number_format($average, 2)}}
                                <i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<2) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<3) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<4) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<5) -o empty @endif"></i>
                            </div>
                    <a href="#"> {{$data->comment->count('id')}} Review(s) / Add Review</a>
                    </div>
                </div>

                <div class="course-box">
                    <i class="fas fa-money-check-alt"></i>
                    <p>{{$data->price}}</p>
                    <p>(catalogues are included)</p>
                </div>

                <div class="course-box">
                    <h3>Pacakege details</h3>
                    <button>download pdf</button>
                </div>
            </header>
            <article>
                <section class="course-intro">
                    <h3>Introduction</h3>

                    <p>{{$data->description}}</p>
                </section>

                <section class="course-objective">
                    <h3>Details</h3>
                    <p>{!! $data->detail !!}</p>
                </section>
            </article>					
        </main>
        <aside>
            <div class="reserve-course">
                @include('home.messages')
                <h2>Leave your comment here</h2>
                <form action="{{route('storecomment')}}" method="post">
                    @csrf
                    <input type="hidden" name="package_id" value="{{$data->id}}">
                    <input type="text" name="subject" placeholder="subject">
                    <textarea name="comment" placeholder="Write your comment"></textarea>
                    <div class="input-rating">
                        <strong class="text-uppercase">Your rating: </strong>
                        <div class="stars">
                            <input type="radio" id="star5" name="rate" value="5"><label for="star5"></label>
                            <input type="radio" id="star4" name="rate" value="4"><label for="star4"></label>
                            <input type="radio" id="star3" name="rate" value="3"><label for="star3"></label>
                            <input type="radio" id="star2" name="rate" value="2"><label for="star2"></label>
                            <input type="radio" id="star1" name="rate" value="1"><label for="star1"></label>
                        </div>
                    </div>
                    @auth
                        <input type="submit" value="Submit">
                    @else
                        <a href="/login" class="btn btn-round btn-warning"> For submit your comment, please login </a>
                    @endauth
                </form>
            </div>
            <!-- New Letter Ends -->
            <div class="recent-post">
                <h2>Review({{$data->comment->count('id')}})</h2>
                @foreach($comments as $rs)
                    <!-- <div class="post"> -->
                    <div class="single-review">
                        <div class="review-heading">                
                            <div><a href="{{route('userpanel.index')}}"><i class="fa fa-user"></i> {{$rs->user->name}} </a></div>
                            <div><a href="#"><i class="fa fa-clock"></i> {{$rs->created_at}} </a></div>
                            <div class="review-rating pull-right">
                                <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                                <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                                <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                                <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                                <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>
                            </div>
                        </div>
                        <div class="review-body">
                            <strong>{{$rs->subject}}</strong>
                            <p>{{$rs->comment}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Recent Post Close -->
        </aside>
    </div>
</section>


<div class="page-heading">
        <div class="container">
            <h2>Recent Packages</h2>
        </div>
    </div>
    <!-- Popular Packages End -->
    <div class="learn-courses">
        <div class="container">
            <div class="courses">
                <div class="owl-one owl-carousel">
                    

                    @foreach($packagelist1 as $rs)
                    <div class="box-wrap" itemprop="event" itemscope itemtype="https://schema.org/Package">
                        <div class="img-wrap" itemprop="image"><img src="{{Storage::url($rs->image)}}" style="width:800px; height:300px" alt="Packages picture"></div>
                            <a href="{{route('package', ['id'=>$rs->id])}}" class="learn-desining-banner" itemprop="name"> {{$rs->title}}</a>
                        <div class="box-body" itemprop="description">
                            <p>{{$rs->description}}</p>
                            <section itemprop="time">
                                @php
                                    $average = $rs->comment->average('rate');
                                @endphp
                                <div class="review-rating ">
                                    <p><span>Rate : </span></p>
                                    {{number_format($average, 2)}}
                                    <i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                                    <i class="fa fa-star @if ($average<2) -o empty @endif"></i>
                                    <i class="fa fa-star @if ($average<3) -o empty @endif"></i>
                                    <i class="fa fa-star @if ($average<4) -o empty @endif"></i>
                                    <i class="fa fa-star @if ($average<5) -o empty @endif"></i>
                                    ({{$rs->comment->count('id')}})
                                </div>
                                <p><span>Status:</span> {{$rs->status}} </p>
                                <p><span>Fee:</span> {{$rs->price}} </p>
                            </section>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>

<section class="query-section">
    <div class="container">
        <p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
    </div>
</section>
<!-- End of Query Section -->
@endsection