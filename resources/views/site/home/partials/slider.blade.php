<div data-height="" data-min-height="300px" class="swiper-container swiper-slider border-crusta">
      <div class="swiper-wrapper">
        <?php $i=0;?>
        @forelse(App\Notice::where('secction','slider')->orderBy('id', 'desc')->get() as $notice)
        @if($i<=4)
        <div data-slide-bg="{!! $notice->oneImg($notice->img) !!}" class="swiper-slide">
          <div class="swiper-slide-caption {{ $i++ }}">
            <div class="jubotron-variant-1">
              <div class="post-meta">
                <p>Publicado por
                	<a href="{{ route('blog.post', $notice->id) }}"> {!! $notice->user->name!!}</a> &bull;
					<time datetime="2016">
						<a href="{{ route('blog.post', $notice->id) }}"> 
						  {!! $notice->created_at !!}
						</a>
					</time>
                </p>
              </div>
              <h2>
                <a href="{{ route('blog.post', $notice->id) }}">
                  {!! $notice->name !!}
                </a>
              </h2>
              <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-green btn-md">
                Leer Más
              </a>
            </div>
          </div>
        </div>
        @endif
        @empty
		<div data-slide-bg="http://placehold.it/1170x600?text=SLIDER,+IMAGEN:+1170x600" class="swiper-slide">
		<div class="swiper-slide-caption">
			<div class="jubotron-variant-1">
				<div class="post-meta">
				<p>Publicado por 
					<a href="#"> Nombre de usuario</a> &bull;
					<time datetime="2016">
						<a href=""> Fecha de publicacion</a>
					</time>
				</p>
				</div>
				<h2>
					<a href="#">
						Agregue una Noticia
					</a>
				</h2>
				<a href="#" class="btn btn-green btn-md">
					Leer Más
				</a>
			</div>
		</div>
		</div>
        @endforelse
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>