@extends('layouts.frontbase')

@section('title', $category->title . ' Packages')

@section('content')

<section class="course-listing-page">
			<div class="container">
				<!-- <div id="filters" class="button-group">
                    <button class="button" data-filter="*">all</button>
                    <button class="button" data-filter=".business">business</button>
                    <button class="button" data-filter=".design">design</button>
                    <button class="button" data-filter=".development">development</button>
                    <button class="button" data-filter=".seo">seo</button>
                    <button class="button" data-filter=".marketing">marketing</button>
				</div> -->

				<div class="grid" id="cGrid" style="position: relative; height: 2889.75px;">
                @foreach($packages as $rs)
                    <div class="grid-item business" data-category="business" style="position: absolute; left: 0px; top: 0px;">
						<div class="img-wrap">
                        <img src="{{Storage::url($rs->image)}}" style="width:800px; height:300px" alt="Packages picture">
						</div>
						<a href="{{route('package', ['id'=>$rs->id])}}" class="learn-desining-banner-course">{{$rs->title}}</a>
						<div class="box-body">
							<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
							<section>
								<p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
								<p><span>Fee:</span>{{$rs->price}}</p>
							</section>
						</div>
					</div>
                @endforeach
                </div>  
			</div>
		</section>

@endsection
