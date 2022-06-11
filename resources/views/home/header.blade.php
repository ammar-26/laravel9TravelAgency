<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i> info@educationpro.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						
							@auth
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<strong class="text-uppercase" style="text-color: white">{{Auth::user()->name}}</strong>
							</div>
							<a href="/logoutuser">Logout</a>
							@endauth
						<div class="login-block">
							@guest
							<a href="/loginuser">Login /</a>
							<a href="/registeruser">Register</a>
							@endguest
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			
</header>
		<!-- Header Close -->