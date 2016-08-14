<div class="row border-tultip row-no-gutter">
	<div class="col-xs-12 col-lg-6">
		<?php $i=0;?>
		@forelse(
		$news=App\Notice::where('secction','top news main')->orderBy('id', 'desc')->get() as $notice)
		@if($i==0)
		    <div class="blog-post {{ $i++ }}">
		    	<img src="assets/images/index-2.jpg" alt="" class="img-width-auto"/>
		    	<a href="{{ route('blog.post', $notice->id) }}" class="tag bg-crusta">
		    		boxing
		    	</a>
			    <div class="post-body">
			        <div class="post-title">
			        	<a href="{{ route('blog.post', $notice->id) }}" class="h3">
			        		Groves Sees Potential for DeGaleFight Soon
			        	</a>
			        </div>
			        <div class="post-meta clearfix">
						<p>
							<time datetime="2016">
								<a href="{{ route('blog.post', $notice->id) }}">Jan. 20, 2016</a>
							</time>
						</p>
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
		@endif	
		@empty
		    <div class="blog-post">
		    	<img src="http://placehold.it/586x462?text=TOP+NEWS,+IMGEN:+586x462" alt="" class="img-width-auto"/>
		    	<a href="#" class="tag bg-crusta">
		    		Categoria
		    	</a>
			    <div class="post-body">
			        <div class="post-title">
			        	<a href="#" class="h3">
			        		Titulo del la noticia
			        	</a>
			        </div>
			        <div class="post-meta clearfix">
						<p>
							<time datetime="2016">
								<a href="#">Fecha de Publicacion</a>
							</time>
						</p>
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
		@endforelse
	</div>
	<div class="col-xs-12 col-lg-6">
		<div class="blog-posts-width-50">
			<?php $i=0;?>
			@forelse(
			$news=App\Notice::where('secction','top news')->orderBy('id', 'desc')->get() as $notice)
				@if($i!=0 && $i<=4)
					<div class="post-50 {{ $i++ }}">
						<div class="blog-post">
							<img src="http://placehold.it/293x231?text=IMGEN:+293x231" alt="" class="img-width-auto"/>
							<a href="{{ route('blog.post', $notice->id) }}" class="tag bg-green">
								Categoria
							</a>
							<div class="post-body">
							    <div class="post-title">
							    	<a href="{{ route('blog.post', $notice->id) }}" class="h5">
							    		Titulo del la noticia
							    	</a>
							    </div>
							    <div class="post-meta clearfix">
									<p>
										<time datetime="2016">
											<a href="{{ route('blog.post', $notice->id) }}">
												Fecha de Publicacion
											</a>
										</time>
									</p>
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
				@endif
			@empty
				@for ($i=1; $i <=4 ; $i++)
					<div class="post-50">
						<div class="blog-post">
							<img src="http://placehold.it/293x231?text=IMGEN:+293x231" alt="" class="img-width-auto"/>
							<a href="#" class="tag bg-green">
								Categoria
							</a>
							<div class="post-body">
							    <div class="post-title">
							    	<a href="#" class="h5">
							    		Titulo del la noticia
							    	</a>
							    </div>
							    <div class="post-meta clearfix">
									<p>
										<time datetime="2016">
											<a href="#">
												Fecha de Publicacion
											</a>
										</time>
									</p>
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
				@endfor
			@endforelse
		</div>
	</div>
</div>