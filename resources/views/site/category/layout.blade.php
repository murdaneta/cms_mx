@extends('site.template.layout')
@section('content-page')
<main class="page-content">
        <section>
          <div class="container">
            <ol class="breadcrumb">
              <li><a href="index.html">home</a></li>
              <li class="active">{{ $category->name }}</li>
            </ol>
          </div>
        </section>
        <!--Section Main Content-->
        <section class="section-bottom-50">
          <div class="container">
            <div class="row">
              	<!--Section News-->
				<div class="col-xs-12 col-lg-8">
					<h4>Noticias
						<span class="text-primary"> (Lista)</span>
					</h4>
					<div class="row row-no-gutter border-green">
						@forelse($category->news()->get() as $notice)
						<div class="col-xs-12">
							<div class="blog-post-variant-5">
								<div class="post-img">
									<img src="{!! $notice->oneImg($notice->img) !!}" alt="">
									<a href="blog_post.html" class="tag bg-crusta">{{ $notice->category->name }}</a>
								</div>
								<div class="post-body bg-dark">
							        <div class="post-title">
							        	<a href="blog_post.html" class="h5">
							        		{{ $notice->title }}
							        	</a>
							          	<p>
							          		Watch highlights of England's 129-run victory over Zimbabwe in their Under-19 World Cup group C game in Chittagong.
							          	</p>
							        </div>
							        <div class="post-meta">
							        	<p>
							        		posted by 
							        		<a href="blog_post.html">
							        			{{ $notice->user->name }}
							        		</a> &bull;
							            	<time datetime="2016">
							            		<a href="blog_post.html">
							            			{!! $notice->created_at !!}
							            		</a>
							            	</time>
							          	</p>
							      		<a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
							      		leer más
							      		</a>
								        <div class="post-share">
								        	<span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
								            <ul class="list-share">
								        	   	<li>
								        	   		<a href="#" class="fa-facebook"></a>
								        	   	</li>
								            	<li>
								            		<a href="#" class="fa-twitter"></a>
								            	</li>
								              	<li>
								              		<a href="#" class="fa-google-plus"></a>
								              	</li>
								              	<li>
								              		<a href="#" class="fa-youtube"></a>
								              	</li>
								            </ul>
								        </div>
							        </div>
							  	</div>
							</div>
						</div>
						@empty
						<div class="col-xs-12 text-center">
							<br>
	                  		<br>
	                  		<br>
							<p class="h1">
								Sin Noticias :(
							</p>
	                  		<p class="h5">
	                  			Esta categoria no esta siendo Utilizada
	                  		</p>
	                  		<a href="{{ url('/') }}" class="btn btn-sm btn-primary btn-no-arrow">
	                  			Regresar al Inicio
	                  		</a>
	                  		<br>
	                  		<br>
	                  		<br>
                  		</div>
						@endforelse
					  	<div class="col-xs-12 bg-gray">
						    <nav class="block-inline">
							    <ul class="pagination">
							    	<li class="active">
							    		<a href="#">1</a>
							    	</li>
							        <li>
							        	<a href="#">2</a>
							        </li>
							        <li>
							        	<a href="#">3</a>
							        </li>
							        <li>
							        	<a href="#">4</a>
							        </li>
							        <li>
							        	<a href="#">5</a>
							        </li>
							    </ul>
						    </nav>
						    <nav class="nav-arrows pull-right clearfix">
						    	<div class="nav-prev"></div>
						    	<div class="nav-next"></div>
						    </nav>
					  	</div>
					</div>
				</div>
				<!-- Sidebar-->
				<div class="col-xs-12 col-lg-4">
					<div class="sidebar display-5">
						@include('site.home.partials.follow-us')
						@include('site.home.partials.recent-sports-events')          
						@include('site.home.partials.latest-tweets')
						<div class="sidebar-module">
							<h4>most watched videos</h4>
							<div class="border-primary">
								<div class="blog-post-variant-3">
									<div class="post-img">
										<img src="images/sidebar-4.jpg" alt=""/>
									</div>
									<div class="post-body bg-dark">
										<div class="post-body-inside bg-dark">
										    <div class="post-title">
										    	<h6>
										      		<a href="blog_post.html" class="text-uppercase">
										      			LAAX Open 2016 - Halfpipe
										      		</a>
										    	</h6>
										      	<time datetime="2016">
											      	<a href="blog_post.html">
											      	</a>
										    	</time>
										    </div>
										   	<a href="blog_post.html" class="btn btn-icon-sm btn-icon-play btn-transparent"></a>
										</div>
									</div>
								</div>
								<div class="blog-post-variant-3">
									<div class="post-img">
										<img src="images/sidebar-5.jpg" alt=""/>
									</div>
									<div class="post-body bg-gray">
									  <div class="post-body-inside bg-gray">
									    <div class="post-title">
									      <h6><a href="blog_post.html" class="text-uppercase">Rallye Monte Carlo 2016: Stage 1</a></h6>
									      <time datetime="2016"><a href="blog_post.html"></a></time>
									    </div><a href="blog_post.html" class="btn btn-icon-sm btn-icon-play btn-transparent"></a>
									  </div>
									</div>
								</div>
								<div class="blog-post-variant-3">
									<div class="post-img">
										<img src="images/sidebar-6.jpg" alt=""/>
									</div>
									<div class="post-body bg-dark">
									  <div class="post-body-inside bg-dark">
									    <div class="post-title">
									      <h6><a href="blog_post.html" class="text-uppercase">Gossip Column Euro: Transfer Deadline Day Round-up</a></h6>
									      <time datetime="2016"><a href="blog_post.html"></a></time>
									    </div><a href="blog_post.html" class="btn btn-icon-sm btn-icon-play btn-transparent"></a>
									  </div>
									</div>
								</div>
							</div>
						</div>
						<div class="sidebar-module">
							<h4>recent comments</h4>
							<div class="border-green">
								<blockquote class="quote-2 bg-dark">
									<p>
									  	<cite>
									  		<a href="blog_post.html">
									  			Stuart Garibaldi
									  		</a>
										</cite>
									  	<span>on</span>
									</p>
									<p>
									  <q>Adidas to Kill Off IAAF Sponsorship Deal</q>
									</p>
								</blockquote>
								<blockquote class="quote-2 bg-gray">
									<p>
									  	<cite>
										  	<a href="blog_post.html">
										  		Stuart Garibaldi
										  	</a>
									  	</cite>
									  	<span>on</span>
									</p>
									<p>
									  	<q>
									  		West Ham Signs Forward Emenike on Loan from Fenerbahce
									  	</q>
									</p>
								</blockquote>
								<blockquote class="quote-2 bg-dark">
									<p>
									  	<cite>
										  	<a href="blog_post.html">
										  		Stuart Garibaldi
										  	</a>
									  	</cite>
									  	<span>on</span>
									</p>
									<p>
									 	<q>
									  		West Ham Signs Forward Emenike on Loan from Fenerbahce
										</q>
									</p>
								</blockquote>
							</div>
						</div>
					  	<div class="sidebar-module">
						    <h4>search</h4>
						    <div class="wrap-1 border-mandy relative bg-gray">
							    <!-- RD Navbar Search-->
							    <div class="rd-navbar-search-mod-1">
							        <form>
							        	<label>
							           		<input type="text" placeholder="Enter keyword" autocomplete="off">
							          	</label>
							          	<button type="submit" class="btn btn-primary">
							          		Search
							          	</button>
							        </form>
							    </div>
						    </div>
					  	</div>
					  	<div class="sidebar-module">
						    <h4>about</h4>
						    <div class="wrap border-tultip">
						      	<h5>About Daily Sports</h5>
						      	<p>
						      		The Daily Sports is a fully digital sports news source. Yet we have a big, dedicated team of professional sports writers, who attend the biggest live sports events in US and around the world.
						    	</p>
						      	<p>
						      		Their unique reporting as well as our office-based analytics for sports breaking news make "The Daily Sports" an ultimate destination of all!
						      	</p>
						      	<a href="about.html" class="btn btn-primary btn-sm">
						      		Read more
						      	</a>
						    </div>
					  	</div>
					  	<div class="sidebar-module">
						    <h4>facebook</h4>
						    <div class="wrap border-primary">
						      	<div id="fb-root">						      		
						      	</div>
						      	<!-- Facebook Feed-->
						      	<div class="fb-page-responsive">
							        <div data-href="https://www.facebook.com/TemplateMonster" data-tabs="timeline" data-height="217" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" class="fb-page">
							          	<div class="fb-xfbml-parse-ignore">
								            <blockquote cite="https://www.facebook.com/TemplateMonster">
								            	<a href="https://www.facebook.com/TemplateMonster">TemplateMonster</a>
								            </blockquote>
							          	</div>
							        </div>
						      	</div>
						    </div>
					 	</div>
						<div class="sidebar-module clearfix">
						    <h4>instagram</h4>
						    <div class="border-green"><!-- RD Instafeed-->
						    	<div data-instafeed-clientid="44f19408f04040bd85214315861a84a1" data-instafeed-get="user" data-instafeed-user="499522078" class="instafeed element-groups-xs-custom">
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
							        <div data-instafeed-item="">
							        	<a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3">
							        		<img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74">
							        	</a>
							        </div>
						      	</div>
						    </div>
						</div>
					  	<div class="sidebar-module">
						    <h4>categories</h4>
						    <div class="wrap border-primary">
							    <ul class="list-variant-1">
							        <li>
							        	<a href="categories.html">
							        		breaking News
							        	</a>
							        </li>
							        <li>
							        	<a href="basketball.html">
							        		baseball
							        	</a>
							        </li>
							        <li>
							        	<a href="basketball.html">
							        		basketball
							        	</a>
							        </li>
							        <li>
							        	<a href="soccer.html">
							        		soccer
							        	</a>
							        </li>
							        <li>
							        	<a href="motorsport.html">
							        		motorsports
							        	</a>
							        </li>
							        <li>
							        	<a href="olympics.html">
							        		olympics
							        	</a>
							        </li>
							    </ul>
						    </div>
					  	</div>
					  	<div class="sidebar-module">
						    <h4>tag</h4>
						    <div class="wrap border-mandy bg-gray">
						    	<div class="tag-group">
						    		<a href="#" class="tag">
						    			tennis
						    		</a>
						    		<a href="#" class="tag">
						    			breaking news
						    		</a>
						    		<a href="#" class="tag">
						    			baseball
						    		</a>
						    		<a href="#" class="tag">
						    			soccer
						    		</a>
						    		<a href="#" class="tag">
						    			motorsports
						    		</a>
						    		<a href="#" class="tag">
						    			olympics
						    		</a>
						    		<a href="#" class="tag">
						    			nba
						    		</a>
						    		<a href="#" class="tag">
						    			travel
						    		</a>
						    		<a href="#" class="tag">
						    			rally
						    		</a>
						    		<a href="#" class="tag">
						    			news
						    		</a>
						    	</div>
						    </div>
					  	</div>
						<div class="sidebar-module">
						    <h4>calendar</h4>
						    <div class="wrap border-tultip bg-gray">
								<!-- RD Calendar-->
								<div class="rd-calendar">
									<div class="rdc-panel">
										<div class="rdc-month h5"></div>
										<div class="rdc-fullyear h5"></div>
									</div>
									<div class="rdc-table"></div>
									<div class="rdc-events">
										<a class="rdc-events_close"></a>
										<ul>
											<li data-date="10/28/2015" class="rdc-event">
												Event 1
											</li>
										</ul>
									</div>
									<div class="rdc-panel clearfix">
										<a class="rdc-next"></a>
										<a class="rdc-prev"></a>
									</div>
								</div>
						    </div>
						</div>
					</div>
				</div>
            </div>
          </div>
        </section>
      </main>
@stop