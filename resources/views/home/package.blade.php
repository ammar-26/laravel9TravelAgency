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
                @foreach ( $images as $rs)
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
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>44 students/ class</p>
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
                    <h3>Certification</h3>
                    <p>After this course Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodc illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <h3>Who can apply for this course?</h3>
                    <ul>
                        <li>+2 with science faculty</li>
                        <li>+2 with management faculty</li>
                        <li>+2 with science faculty</li>
                        <li>+2 with management faculty</li>
                    </ul>

                    <h3>Training Methodology</h3>
                    <ul>
                        <li>Weekly test</li>
                        <li>Digital Class</li>
                        <li>Field Visit and real project demonstration</li>
                        <li>+2 with managem</li>
                    </ul>
                </section>
            </article>					
        </main>
        <aside>
            <div class="reserve-course">
                <h2>Reserve this package</h2>
                <form>
                    <input type="text" placeholder="Your Name*" required>
                    <input type="email" name="userEmail" placeholder="Your Email Address..." required>
                    <input type="text" placeholder="Your Occupation*" required>
                    <input type="text" placeholder="Choose package*" required>
                    <textarea placeholder="Write your message"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <!-- New Letter Ends -->
            <div class="recent-post">
                <h2>trainers</h2>
                <div class="post">
                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="images/recent-post-img.jpg" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="#">
                                <h3>Bibek Basnet</h3>
                                <p>Web Developer</p>
                            </a>
                            <span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="images/recent-post-img.jpg" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="#">
                                <h3>Bibek Basnet</h3>
                                <p>Web Developer</p>
                            </a>
                            <span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="images/recent-post-img.jpg" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="#">
                                <h3>Bibek Basnet</h3>
                                <p>Web Developer</p>
                            </a>
                            <span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="images/recent-post-img.jpg" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="#">
                                <h3>Bibek Basnet</h3>
                                <p>Web Developer</p>
                            </a>
                            <span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
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
                            <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                            <section itemprop="time">
                                <p><span>Duration:</span> 4 Years</p>
                                <p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
                                <p><span>Fee:</span> 4,00,000</p>
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