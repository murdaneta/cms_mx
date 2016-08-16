<section class="section-bottom-50">
          <h4 class="block-inline">featured news</h4>
          <div class="btn-group-isotope clearfix">
            @if($nd1)
            <button data-isotope-filter="{{$nd1->name}}" data-isotope-group="gallery" class="active">
              {{$nd1->name}}
            </button>
            @else
            <button data-isotope-filter="one" data-isotope-group="gallery" class="active">
              Ejemplo(nd1)
            </button>
            <button data-isotope-filter="two" data-isotope-group="gallery"> Ejemplo(nd2)</button>
            @endif
            @if($nd2)
            <button data-isotope-filter="{{$nd2->name}}" data-isotope-group="gallery"> 
              {{$nd2->name}} 
            </button>
            @endif
            @if($nd3)
            <button data-isotope-filter="{{$nd3->name}}" data-isotope-group="gallery"> 
              {{$nd3->name}} 
            </button>
            @endif
            @if($nd4)
            <button data-isotope-filter="{{$nd4->name}}" data-isotope-group="gallery"> 
              {{$nd4->name}} 
            </button>
            @endif
            @if($nd5)
            <button data-isotope-filter="{{$nd5->name}}" data-isotope-group="gallery"> 
              {{$nd5->name}} 
            </button>
            @endif
            @if($nd6)
            <button data-isotope-filter="{{$nd6->name}}" data-isotope-group="gallery"> 
              {{$nd6->name}} 
            </button>
            @endif
          </div>
          <!--Isotope-->
          <div data-isotope-layout="fitRows" data-isotope-group="gallery" class="row row-no-gutter isotope border-green">
            @if($nd1 && !$nd1->news->isEmpty())
            <?php $i=1;?>
            @foreach( $nd1->news()->where('secction','featured news')->orderBy('id', 'desc')->take(6)->get()as $notice)
              @if($i<=2)
              <div data-filter="{{$nd1->name}}" class="col-xs-12 col-sm-6 {{ $i++ }}">
                <div class="blog-post blog-post-variant-2">
                  <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  <a href="{{ route('blog.post', $notice->id) }}" class="tag bg-primary">
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
                      <span class="icon icon-primary material-icons-share icon-sm icon-share">
                      </span>
                        <ul class="list-share">
                          <li><a href="#" class="fa-facebook"></a></li>
                          <li><a href="#" class="fa-twitter"></a></li>
                          <li><a href="#" class="fa-google-plus"></a></li>
                          <li><a href="#" class="fa-youtube"></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
                      Leer más
                    </a>
                  </div>
                </div>
              </div>
              @else
              <div data-filter="{{$nd1->name}}" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="{{ route('blog.post', $notice->id) }}" class="text-uppercase">
                           {{ $notice->title }}
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="{{ route('blog.post', $notice->id) }}">
                            {{ $notice->created_at }}
                          </a>
                        </time>
                      </div>
                        <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach           
            @else
            <div data-filter="one" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2">
                <img src="http://placehold.it/385x305?text=ND1,+IMAGEN:+385x305" alt=""/>
                <a href="#" class="tag bg-primary">
                  Categoria
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
                    <span class="icon icon-primary material-icons-share icon-sm icon-share">
                    </span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div>
                  <a href="#" class="btn btn-sm btn-transparent">
                    Leer más
                  </a>
                </div>
              </div>
            </div>
            <div data-filter="one" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2">
                <img src="http://placehold.it/385x305?text=ND1,+IMAGEN:+385x305" alt=""/>
                <a href="#" class="tag bg-primary">
                  Categoria
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
                    <span class="icon icon-primary material-icons-share icon-sm icon-share">
                    </span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div>
                  <a href="#" class="btn btn-sm btn-transparent">
                    Leer más
                  </a>
                </div>
              </div>
            </div>
            <!--Min Isotope-->
            @for ($i=0; $i <=3 ; $i++)
            <div data-filter="one" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="http://placehold.it/192x152?text=385x305" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="#" class="text-uppercase">
                           Titulo de la noticia
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="#">
                            Fecha
                          </a>
                        </time>
                      </div>
                        <a href="#" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
            </div>
            @endfor
            <!--End min Isotope-->
            <div data-filter="two" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2">
                <img src="http://placehold.it/385x305?text=ND1,+IMAGEN:+385x305" alt=""/>
                <a href="#" class="tag bg-primary">
                  Categoria
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
                    <span class="icon icon-primary material-icons-share icon-sm icon-share">
                    </span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div>
                  <a href="#" class="btn btn-sm btn-transparent">
                    Leer más
                  </a>
                </div>
              </div>
            </div>
            <div data-filter="two" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2">
                <img src="http://placehold.it/385x305?text=ND1,+IMAGEN:+385x305" alt=""/>
                <a href="#" class="tag bg-primary">
                  Categoria
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
                    <span class="icon icon-primary material-icons-share icon-sm icon-share">
                    </span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div>
                  <a href="#" class="btn btn-sm btn-transparent">
                    Leer más
                  </a>
                </div>
              </div>
            </div>
            @endif
            @if($nd2 && !$nd2->news->isEmpty())
            <?php $i=1;?>
            @foreach( $nd2->news()->where('secction','featured news')->orderBy('id', 'desc')->take(6)->get()as $notice)
              @if($i<=2)
              <div data-filter="{{$nd2->name}}" class="col-xs-12 col-sm-6 {{ $i++ }}">
                <div class="blog-post blog-post-variant-2">
                  <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  <a href="{{ route('blog.post', $notice->id) }}" class="tag bg-primary">
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
                      <span class="icon icon-primary material-icons-share icon-sm icon-share">
                      </span>
                        <ul class="list-share">
                          <li><a href="#" class="fa-facebook"></a></li>
                          <li><a href="#" class="fa-twitter"></a></li>
                          <li><a href="#" class="fa-google-plus"></a></li>
                          <li><a href="#" class="fa-youtube"></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
                      Leer más
                    </a>
                  </div>
                </div>
              </div>
              @else
              <div data-filter="{{$nd2->name}}" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="{{ route('blog.post', $notice->id) }}" class="text-uppercase">
                           {{ $notice->title }}
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="{{ route('blog.post', $notice->id) }}">
                            {{ $notice->created_at }}
                          </a>
                        </time>
                      </div>
                        <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            @endif
            @if($nd3 && !$nd3->news->isEmpty())
            <?php $i=1;?>
            @foreach( $nd3->news()->where('secction','featured news')->orderBy('id', 'desc')->take(6)->get()as $notice)
              @if($i<=2)
              <div data-filter="{{$nd3->name}}" class="col-xs-12 col-sm-6 {{ $i++ }}">
                <div class="blog-post blog-post-variant-2">
                  <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  <a href="{{ route('blog.post', $notice->id) }}" class="tag bg-primary">
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
                      <span class="icon icon-primary material-icons-share icon-sm icon-share">
                      </span>
                        <ul class="list-share">
                          <li><a href="#" class="fa-facebook"></a></li>
                          <li><a href="#" class="fa-twitter"></a></li>
                          <li><a href="#" class="fa-google-plus"></a></li>
                          <li><a href="#" class="fa-youtube"></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
                      Leer más
                    </a>
                  </div>
                </div>
              </div>
              @else
              <div data-filter="{{$nd3->name}}" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="{{ route('blog.post', $notice->id) }}" class="text-uppercase">
                           {{ $notice->title }}
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="{{ route('blog.post', $notice->id) }}">
                            {{ $notice->created_at }}
                          </a>
                        </time>
                      </div>
                        <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            @endif 
            @if($nd4 && !$nd4->news->isEmpty())
            <?php $i=1;?>
            @foreach( $nd4->news()->where('secction','featured news')->orderBy('id', 'desc')->take(6)->get()as $notice)
              @if($i<=2)
              <div data-filter="{{$nd4->name}}" class="col-xs-12 col-sm-6 {{ $i++ }}">
                <div class="blog-post blog-post-variant-2">
                  <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  <a href="{{ route('blog.post', $notice->id) }}" class="tag bg-primary">
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
                      <span class="icon icon-primary material-icons-share icon-sm icon-share">
                      </span>
                        <ul class="list-share">
                          <li><a href="#" class="fa-facebook"></a></li>
                          <li><a href="#" class="fa-twitter"></a></li>
                          <li><a href="#" class="fa-google-plus"></a></li>
                          <li><a href="#" class="fa-youtube"></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
                      Leer más
                    </a>
                  </div>
                </div>
              </div>
              @else
              <div data-filter="{{$nd4->name}}" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="{{ route('blog.post', $notice->id) }}" class="text-uppercase">
                           {{ $notice->title }}
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="{{ route('blog.post', $notice->id) }}">
                            {{ $notice->created_at }}
                          </a>
                        </time>
                      </div>
                        <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            @endif
            @if($nd5 && !$nd5->news->isEmpty())
            <?php $i=1;?>
            @foreach( $nd5->news()->where('secction','featured news')->orderBy('id', 'desc')->take(6)->get()as $notice)
              @if($i<=2)
              <div data-filter="{{$nd5->name}}" class="col-xs-12 col-sm-6 {{ $i++ }}">
                <div class="blog-post blog-post-variant-2">
                  <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  <a href="{{ route('blog.post', $notice->id) }}" class="tag bg-primary">
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
                      <span class="icon icon-primary material-icons-share icon-sm icon-share">
                      </span>
                        <ul class="list-share">
                          <li><a href="#" class="fa-facebook"></a></li>
                          <li><a href="#" class="fa-twitter"></a></li>
                          <li><a href="#" class="fa-google-plus"></a></li>
                          <li><a href="#" class="fa-youtube"></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
                      Leer más
                    </a>
                  </div>
                </div>
              </div>
              @else
              <div data-filter="{{$nd5->name}}" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="{{ route('blog.post', $notice->id) }}" class="text-uppercase">
                           {{ $notice->title }}
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="{{ route('blog.post', $notice->id) }}">
                            {{ $notice->created_at }}
                          </a>
                        </time>
                      </div>
                        <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            @endif
            @if($nd6 && !$nd6->news->isEmpty())
            <?php $i=1;?>
            @foreach( $nd6->news()->where('secction','featured news')->orderBy('id', 'desc')->take(6)->get()as $notice)
              @if($i<=2)
              <div data-filter="{{$nd6->name}}" class="col-xs-12 col-sm-6 {{ $i++ }}">
                <div class="blog-post blog-post-variant-2">
                  <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  <a href="{{ route('blog.post', $notice->id) }}" class="tag bg-primary">
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
                      <span class="icon icon-primary material-icons-share icon-sm icon-share">
                      </span>
                        <ul class="list-share">
                          <li><a href="#" class="fa-facebook"></a></li>
                          <li><a href="#" class="fa-twitter"></a></li>
                          <li><a href="#" class="fa-google-plus"></a></li>
                          <li><a href="#" class="fa-youtube"></a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-sm btn-transparent">
                      Leer más
                    </a>
                  </div>
                </div>
              </div>
              @else
              <div data-filter="{{$nd6->name}}" class="col-xs-12 col-sm-6">
                <div class="blog-post-variant-3">
                  <div class="post-img">
                    <img src="{!! $notice->oneImg($notice->img) !!}" alt=""/>
                  </div>
                  <div class="post-body bg-gray">
                    <div class="post-body-inside bg-gray">
                      <div class="post-title">
                        <h6>
                          <a href="{{ route('blog.post', $notice->id) }}" class="text-uppercase">
                           {{ $notice->title }}
                          </a>
                        </h6>
                        <time datetime="2016">
                          <a href="{{ route('blog.post', $notice->id) }}">
                            {{ $notice->created_at }}
                          </a>
                        </time>
                      </div>
                        <a href="{{ route('blog.post', $notice->id) }}" class="btn btn-icon-sm btn-transparent"></a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            @endif 
          </div>
        </section>