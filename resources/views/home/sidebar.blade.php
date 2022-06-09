<div class="main-header">
	<div class="container">
		<div class="logo-wrap" itemprop="logo">
			<a href= "{{route('home')}}">
				<img src="{{asset('assets')}}/img/site-logo.jpg" style="width: 100px; height: 60px" alt="Logo Image">
				</a>
				<!-- <h1>Education</h1> -->
		</div>
		<div class="nav-wrap">
			<nav class="nav-desktop">
				@php
					$mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
				@endphp
				<ul class="menu-list">
					<li><a href="{{route('home')}}">Home</a></li>
					<li class="menu-parent">Categories
						<ul class="sub-menu">

						@foreach ($mainCategories as $rs)
							<li class="menu-parent">{{$rs->title}}

									@if(count($rs->children))
										@include('home.categorytree',['children' => $rs->children])
									@endif

							</li>
						@endforeach
						</ul>
					</li>
					<li class="menu-parent">News
						<ul class="sub-menu">
							<li><a href="#">Child</a></li>
							<li><a href="#">Child</a></li>
						</ul>
					</li>
					<li><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('references')}}">References</a></li>
					<li><a href="{{route('faq')}}">FAQ</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</nav>
			<div id="bar">
				<i class="fas fa-bars"></i>
			</div>
			<div id="close">
				<i class="fas fa-times"></i>
			</div>
		</div>
	</div>
</div>