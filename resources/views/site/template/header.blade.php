<!-- RD Navbar-->
<div class="rd-navbar-wrap header-default">
	<nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-stick-up-offset="245px">
		<div class="rd-navbar-top-panel">
		  <div class="rd-navbar-top-panel-wrap">
		    <button data-rd-navbar-toggle=".list-inline" type="submit" class="rd-navbar-collapse-toggle"><span></span></button>
		    <p>¡Bienvenido a nuestro<span> Nuestro centro de noticias de deportes!</span></p>
		    <div class="block-right">
		      <ul class="list-inline">
		        <li class="activePage"><a href="">Inicio</a></li>
		        <li><a href="">Nosotros</a></li>
		        <li><a href="">Contacts</a></li>
		        @if(Auth::check())
		        <li><a href="{{ route('auth/logout') }}">cerrar sesión</a></li>
		        <li><a href="{{ route('system') }}">sistema</a></li>
		        @else
		        <li><a href="{{ route('login') }}">Login</a></li>
		        @endif
		        <!-- RD Navbar Search-->
		      </ul>
		      <div class="rd-navbar-search">
		        <form action="search.php" method="GET" class="rd-navbar-search-form">
		          <label class="rd-navbar-search-form-input">
		            <input type="text" name="s" placeholder="Search.." autocomplete="off">
		          </label>
		          <button type="submit" class="rd-navbar-search-form-submit"></button>
		        </form>
		        <!--span.rd-navbar-live-search-results-->
		        <button data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-live-search-results" type="submit" class="rd-navbar-search-toggle"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="rd-navbar-inner">
		  <!-- RD Navbar Panel-->
		  <div class="rd-navbar-panel">
		    <!-- RD Navbar Toggle-->
		    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
		    <!-- RD Navbar Brand-->
		    <div class="rd-navbar-brand"><a href="index.html" class="brand-name"><span class="text-bold">90</span><span>total</span><span class="brand-slogan">Las últimas noticias de deportes</span></a></div>
		    <div class="block-banner"><a href="#"><span><!--Banner space 728X90--></span><img src="http://placehold.it/728x090?text=Publicidad+Principal+728X90" alt="" width="728" height="90"></a></div>
		    <ul class="list-inline-variant-1">
		      <li><a href="#" class="fa-facebook"></a></li>
		      <li><a href="#" class="fa-twitter"></a></li>
		      <li><a href="#" class="fa-google-plus"></a></li>
		      <li><a href="#" class="fa-youtube"></a></li>
		    </ul>
		  </div>
		  <div class="rd-navbar-nav-wrap">
		    <ul class="rd-navbar-nav clearfix">
		    	<li class="active"><a href="{{ url('/') }}">Inicio</a>
		    	</li>
				<li><a href="categories.html">Noticias de última hora</a></li>
				<li><a href="soccer.html">Fútbol</a></li>
				<li><a href="olympics.html">Olímpico</a></li>
				<li><a href="other.html">Otros deportes</a>
				  	<!-- RD Navbar Dropdown-->
				    <ul class="rd-navbar-dropdown">
				      <li><a href="" onclick="return false">Categories Layout</a>
				        <ul class="rd-navbar-dropdown">
				          <li><a href="categories_grid.html">Categories Grid</a></li>
				          <li><a href="categories_masonry.html">Categories Masonry</a></li>
				        </ul>
				      </li>
				      <li><a href="" onclick="return false">Post layout</a>
				        <ul class="rd-navbar-dropdown">
				          <li><a href="blog_post.html">Post Default</a></li>
				          <li><a href="post-slider.html">Post Slider</a></li>
				          <li><a href="post-video.html">Post Video</a></li>
				          <li><a href="post-audio.html">Post Audio</a></li>
				          <li><a href="post-link.html">Post Link</a></li>
				          <li><a href="post-quote.html">Post Quote</a></li>
				        </ul>
				      </li>
				      <li><a href="" onclick="return false">Header Settings</a>
				        <ul class="rd-navbar-dropdown">
				          <li><a href="index.html">Default Header</a></li>
				          <li><a href="header-cent.html">Center Header</a></li>
				          <li><a href="header-fullwidth.html">Fullwidth Header</a></li>
				        </ul>
				      </li>
				      <li><a href="" onclick="return false">Footer Settings</a>
				        <ul class="rd-navbar-dropdown">
				          <li><a href="footer_1.html">Footer Style 1</a></li>
				          <li><a href="footer_2.html">Footer Style 2</a></li>
				          <li><a href="footer_3.html">Footer Style 3</a></li>
				        </ul>
				      </li>
				      <li><a href="" onclick="return false">Sidebar Settings</a>
				        <ul class="rd-navbar-dropdown">
				          <li><a href="left-sidebar.html">Left Sidebar</a></li>
				          <li><a href="right-sidebar.html">Right Sidebar</a></li>
				          <li><a href="no-sidebar.html">No Sidebar</a></li>
				        </ul>
				      </li>
				      <li><a href="typography.html">Typography</a></li>
				      <li><a href="404.html">404</a></li>
				    </ul>
				</li>
		      <li>
		        <ul class="list-inline-variant-1">
		          <li><a href="#" class="fa-facebook"></a></li>
		          <li><a href="#" class="fa-twitter"></a></li>
		          <li><a href="#" class="fa-google-plus"></a></li>
		          <li><a href="#" class="fa-youtube"></a></li>
		        </ul>
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>
</div>