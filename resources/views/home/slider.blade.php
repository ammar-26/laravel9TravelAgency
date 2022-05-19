
	<div class="banner">
		<div class="owl-four owl-carousel" itemprop="image">
		@foreach ( $sliderdata as $rs)
			<div class="banner banner-1">
				<img src="{{Storage::url($rs->image)}}" style="width: 1366px; height: 600px" alt="Image of Bannner">
				<div class="container" itemprop="description">
					<h1 style="color: black">welcome to travel pro</h1>
					<h2 style="color: black">{{$rs->title}}</h2>
					<h3 style="color: black">With our advance search feature you can now find the trips for you...</h3>
					<button class="learn-desining-banner"><a href="{{route('package', ['id'=>$rs->id])}}" style= "font-size:18px;"> Book Now </a></button>
				</div>
			</div>
		@endforeach
		</div>
		<div id="owl-four-nav" class="owl-nav"></div>
	</div>
