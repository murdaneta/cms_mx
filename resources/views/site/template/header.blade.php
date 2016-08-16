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
		    @include('site.template.social-media')
		  </div>
		  <div class="rd-navbar-nav-wrap">
		    <ul class="rd-navbar-nav clearfix">
		    	<li class="active"><a href="{{ url('/') }}">Inicio</a>
		    	</li>
				@if($bar1)
				<li>
					<a href="{{ route('category.name',$bar1->name) }}">
						{{$bar1->name}}
					</a>
				</li>
				@endif
				@if($bar2)
				<li>
					<a href="{{ route('category.name',$bar2->name) }}">
						{{$bar2->name}}
					</a>
				</li>
				@endif
				@if($bar3)
				<li>
					<a href="{{ route('category.name',$bar3->name) }}">
						{{$bar3->name}}
					</a>
				</li>
				@endif
				<li>
					<a href="other.html">Categorias</a>
					<ul class="rd-navbar-dropdown">
					@forelse($categories as $category )
						@if($category->index!="bar1"&&$category->index!="bar2"&&$category->index!="bar3")
						<li>
							<a href="{{ route('category.name',$category->name) }}">{{ $category->name }}</a>
						</li>
						@endif
					@empty
						<li>
							<a href="#">No hay categorías</a>
						</li>
					@endforelse
				    </ul>
				</li>
		      <li>
		        @include('site.template.social-media')
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>
</div>