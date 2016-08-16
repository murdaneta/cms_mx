<section class="section-bottom-50">
  <h4>latest news</h4>
  <div class="blog-posts-width-50 border-primary">
  	<!-- seis veces-->
  	@forelse(App\Notice::where('secction','latest news')->orderBy('id', 'desc')->take(6)->get() as $notice)
    <div class="post-50">
      <div class="blog-post blog-post-variant-2">
      	<img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
      	<a href="{{ route('blog.post', $notice->id) }}" class="tag bg-green">
      		{{ $notice->category->name }}
      	</a>
        <div class="post-body">
          	<div class="post-title">
	          <a href="{{ route('blog.post', $notice->id) }}" class="h5">
	          	{{ $notice->title }}
	          </a>
          	</div>
	        <div class="post-meta clearfix">
	            <p>
	            	<span>posted by</span>
	            	<a href="{{ route('blog.post', $notice->id) }}">
	            		{{ $notice->user->name }}
	            	</a>
	              	<time datetime="2016">
	              		<a href="{{ route('blog.post', $notice->id) }}">
	              			{{ $notice->created_at }}
	              		</a>
	              	</time>
	            </p>
	            <div class="post-share">
	            	<span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
		            <ul class="list-share">
		                <li><a href="#" class="fa-facebook"></a></li>
		                <li><a href="#" class="fa-twitter"></a></li>
		                <li><a href="#" class="fa-google-plus"></a></li>
		                <li><a href="#" class="fa-youtube"></a></li>
		            </ul>
	            </div>
	          </div>
	          <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
	          	Leer Más
	          </a>
	        </div>
      </div>
    </div>
    @empty
    @for ($i=1; $i <=6 ; $i++) {
    <div class="post-50">
      <div class="blog-post blog-post-variant-2">
      	<img src="http://placehold.it/385x305?text=ND1,+IMAGEN:+385x305" alt=""/>
      	<a href="#" class="tag bg-green">
      		Categoría
      	</a>
        <div class="post-body">
          	<div class="post-title">
	          <a href="#" class="h5">
	          	Titulo de la noticia
	          </a>
          	</div>
	        <div class="post-meta clearfix">
	            <p>
	            	<span>posted by</span>
	            	<a href="#">
	            		Usuario
	            	</a>
	              	<time datetime="2016">
	              		<a href="#">
	              			Fecha
	              		</a>
	              	</time>
	            </p>
	            <div class="post-share">
	            	<span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
		            <ul class="list-share">
		                <li><a href="#" class="fa-facebook"></a></li>
		                <li><a href="#" class="fa-twitter"></a></li>
		                <li><a href="#" class="fa-google-plus"></a></li>
		                <li><a href="#" class="fa-youtube"></a></li>
		            </ul>
	            </div>
	          </div>
	          <a href="#" class="btn btn-sm btn-transparent">
	          	Leer Más
	          </a>
	        </div>
      </div>
    </div>
    @endfor
    @endforelse
  </div>
</section>