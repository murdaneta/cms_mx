@extends('site.template.layout')
@section('content-page')
<!--Section Swiper-->
<section class="section-50">
  <div class="container">
    <!-- Swiper-->
    <div data-height="" data-min-height="300px" class="swiper-container swiper-slider border-crusta">
      <div class="swiper-wrapper">
        <?php $i=0;?>
        @forelse(App\Notice::where('secction','slider')->orderBy('id', 'desc')->get() as $notice)
        @if($i<=4)
        <div data-slide-bg="{!! $notice->oneImg($notice->img) !!}" class="swiper-slide">
          <div class="swiper-slide-caption {{ $i++ }}">
            <div class="jubotron-variant-1">
              <div class="post-meta">
                <p>Publicado por<a href="blog_post.html"> {!! $notice->user->name!!}</a> &bull;
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
        <div data-slide-bg="http://placehold.it/728x090?text=Publicidad+Principal+728X90" class="swiper-slide">
          <div class="swiper-slide-caption {{ $i++ }}">
            <div class="jubotron-variant-1">
              <div class="post-meta">
                <p>Publicado por<a href="blog_post.html"> {!! $notice->user->name!!}</a> &bull;
                  <time datetime="2016"><a href=""> {!! $notice->created_at !!}</a></time>
                </p>
              </div>
              <h2>
                <a href="{{ route('blog.post') }}l">
                  {!! $notice->name !!}
                </a>
              </h2>
              <a href="{{ route('blog.post') }}l" class="btn btn-green btn-md">
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
  </div>
</section>
<!--Section Top News-->
<section class="section-bottom-50">
  <div class="container">
    <h4>top news</h4>
    <div class="row border-tultip row-no-gutter">
      <div class="col-xs-12 col-lg-6">
        <div class="blog-post"><img src="assets/images/index-2.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-crusta">boxing</a>
          <div class="post-body">
            <div class="post-title"><a href="blog_post.html" class="h3">Groves Sees Potential for DeGaleFight Soon</a></div>
            <div class="post-meta clearfix">
              <p>
                <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
              </p>
              <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                <ul class="list-share">
                  <li><a href="#" class="fa-facebook"></a></li>
                  <li><a href="#" class="fa-twitter"></a></li>
                  <li><a href="#" class="fa-google-plus"></a></li>
                  <li><a href="#" class="fa-youtube"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-lg-6">
        <div class="blog-posts-width-50">
          <div class="post-50">
            <div class="blog-post"><img src="assets/images/index-3.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-green">rally</a>
              <div class="post-body">
                <div class="post-title"><a href="blog_post.html" class="h5">Inside Speedway: Ownership Review</a></div>
                <div class="post-meta clearfix">
                  <p>
                    <time datetime="2016"><a href="blog_post.html">Jan. 19, 2016</a></time>
                  </p>
                  <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                    <ul class="list-share">
                      <li><a href="#" class="fa-facebook"></a></li>
                      <li><a href="#" class="fa-twitter"></a></li>
                      <li><a href="#" class="fa-google-plus"></a></li>
                      <li><a href="#" class="fa-youtube"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="post-50">
            <div class="blog-post"><img src="assets/images/index-4.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-mandy">soccer</a>
              <div class="post-body">
                <div class="post-title"><a href="blog_post.html" class="h5">Guardiola VS Man City LIVE!</a></div>
                <div class="post-meta clearfix">
                  <p>
                    <time datetime="2016"><a href="blog_post.html">Jan. 24, 2016</a></time>
                  </p>
                  <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                    <ul class="list-share">
                      <li><a href="#" class="fa-facebook"></a></li>
                      <li><a href="#" class="fa-twitter"></a></li>
                      <li><a href="#" class="fa-google-plus"></a></li>
                      <li><a href="#" class="fa-youtube"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="post-50">
            <div class="blog-post"><img src="assets/images/index-5.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-primary">nfl</a>
              <div class="post-body">
                <div class="post-title"><a href="blog_post.html" class="h5">Wilson Stars in Pro Bowl Even</a></div>
                <div class="post-meta clearfix">
                  <p>
                    <time datetime="2016"><a href="blog_post.html">Jan. 22, 2016</a></time>
                  </p>
                  <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                    <ul class="list-share">
                      <li><a href="#" class="fa-facebook"></a></li>
                      <li><a href="#" class="fa-twitter"></a></li>
                      <li><a href="#" class="fa-google-plus"></a></li>
                      <li><a href="#" class="fa-youtube"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="post-50">
            <div class="blog-post"><img src="assets/images/index-6.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-mandy">rally</a>
              <div class="post-body">
                <div class="post-title"><a href="blog_post.html" class="h5">Dakar Car Injures Lots of Spectators</a></div>
                <div class="post-meta clearfix">
                  <p>
                    <time datetime="2016"><a href="blog_post.html">Jan. 25, 2016</a></time>
                  </p>
                  <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                    <ul class="list-share">
                      <li><a href="#" class="fa-facebook"></a></li>
                      <li><a href="#" class="fa-twitter"></a></li>
                      <li><a href="#" class="fa-google-plus"></a></li>
                      <li><a href="#" class="fa-youtube"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Section Main Content-->
<section class="section-bottom-50">
  <div class="container">
    <div class="row">
      <!--Section Main-->
      <div class="col-xs-12 col-lg-8">
        <!--Section Featured News-->
        <section class="section-bottom-50">
          <h4 class="block-inline">featured news</h4>
          <div class="btn-group-isotope clearfix">
            <button data-isotope-filter="breaking-news" data-isotope-group="gallery" class="active">breaking news</button>
            <button data-isotope-filter="baseball" data-isotope-group="gallery"> baseball</button>
            <button data-isotope-filter="basketball" data-isotope-group="gallery"> basketball</button>
            <button data-isotope-filter="soccer" data-isotope-group="gallery"> soccer</button>
            <button data-isotope-filter="motosports" data-isotope-group="gallery"> motorsports</button>
            <button data-isotope-filter="olympics" data-isotope-group="gallery"> olympics</button>
          </div>
          <!--Isotope-->
          <div data-isotope-layout="fitRows" data-isotope-group="gallery" class="row row-no-gutter isotope border-green">
            <div data-filter="breaking-news" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-7.jpg" alt=""/><a href="blog_post.html" class="tag bg-primary">nfl</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Raiders Hold Las Vegas Talks This January</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Jason Parker</a>
                      <time datetime="2016"><a href="blog_post.html">Feb. 12, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="breaking-news" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-8.jpg" alt=""/><a href="blog_post.html" class="tag bg-green">tennis</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Murray Within Touching Distance: Tennis War</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Carol Adams</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="soccer" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-17.jpg" alt=""/><a href="blog_post.html" class="tag bg-green">soccer</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Konta Cracks World Top 30</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Sharon Wright</a>
                      <time datetime="2016"><a href="blog_post.html">Apr. 05, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="soccer" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/soccer-1.jpg" alt=""/><a href="blog_post.html" class="tag bg-mandy">soccer</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Guardiola VS Man City LIVE!</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Richard Phillips</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 01, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="basketball" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/basketball-6.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-crusta">basketball</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">McCollum, Lillard Save Blazers Past Timberwolves 96-93</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Stuart Garibaldi</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="basketball" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/basketball-7.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-crusta">basketball</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Hornets Deal Lakers With Record-tying 10th Loss in Row, 101-82</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Victor Pitcher</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 18, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="motosports" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/categories-4.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-crusta">rally</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">DAKAR CAR INJURES LOTS OF SPECTATORS</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Stuart Garibaldi</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="olympics" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/categories-3.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-crusta">olympics</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">MANUEL PELLEGRINI ADMITS MANCHESTER CITY QUIT</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Jason Parker</a>
                      <time datetime="2016"><a href="blog_post.html">Feb. 12, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="baseball" class="col-xs-12 col-sm-6">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-18.jpg" alt="" class="img-width-auto"/><a href="blog_post.html" class="tag bg-crusta">baseball</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">10 MOST MEMORABLE SUPER BOWLS IN MEMORY</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Carol Adams</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div data-filter="breaking-news" class="col-xs-12 col-sm-6">
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/index-9.jpg" alt=""/></div>
                <div class="post-body bg-gray">
                  <div class="post-body-inside bg-gray">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Panthers Say Peyton Manning  Lost a Skill</a></h6>
                      <time datetime="2016"><a href="blog_post.html">Jan. 01, 2016</a></time>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div data-filter="breaking-news" class="col-xs-12 col-sm-6">
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/index-10.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Song Beats Spieth to Win First Title in Long Time</a></h6>
                      <time datetime="2016"><a href="blog_post.html">Jan. 13, 2016</a></time>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div data-filter="breaking-news" class="col-xs-12 col-sm-6">
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/index-11.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Should Terry Leave Chelsea Now or Ever?</a></h6>
                      <time datetime="2016"><a href="blog_post.html">Jan. 10, 2016</a></time>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div data-filter="breaking-news" class="col-xs-12 col-sm-6">
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/index-12.jpg" alt=""/></div>
                <div class="post-body bg-gray">
                  <div class="post-body-inside bg-gray">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Magnussens Return a Deal - as Rumoras</a></h6>
                      <time datetime="2016"><a href="blog_post.html">Jan. 6, 2016</a></time>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section Latest News-->
        <section class="section-bottom-50">
          <h4>latest news</h4>
          <div class="blog-posts-width-50 border-primary">
            <div class="post-50">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-13.jpg" alt=""/><a href="blog_post.html" class="tag bg-green">tennis</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Konta Cracks World Top 30</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Jason Parker</a>
                      <time datetime="2016"><a href="blog_post.html">Feb. 12, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div class="post-50">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-14.jpg" alt=""/><a href="blog_post.html" class="tag bg-primary">nfl</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">10 most Memorable Super Bowls in Memory</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Carol Adams</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div class="post-50">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-15.jpg" alt=""/><a href="blog_post.html" class="tag bg-crusta">basketball</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Stark Contrast in Approaches for the Spurs and Cavaliers</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Sharon Wright</a>
                      <time datetime="2016"><a href="blog_post.html">Apr. 05, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div class="post-50">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-16.jpg" alt=""/><a href="blog_post.html" class="tag bg-mandy">nhl</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">John Scott voted MVP of Pacific`s All-Star Game Win</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Richard Phillips</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 01, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div class="post-50">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-17.jpg" alt=""/><a href="blog_post.html" class="tag bg-green">soccer</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Konta Cracks World Top 30</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Victor Pitcher</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 18, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
            <div class="post-50">
              <div class="blog-post blog-post-variant-2"><img src="assets/images/index-18.jpg" alt=""/><a href="blog_post.html" class="tag bg-crusta">baseball</a>
                <div class="post-body">
                  <div class="post-title"><a href="blog_post.html" class="h5">Strang - A Portrait of a Pitcher: Daniel Norris` Journey for Answers</a></div>
                  <div class="post-meta clearfix">
                    <p><span>posted by</span> <a href="blog_post.html">Stuart Garibaldi</a>
                      <time datetime="2016"><a href="blog_post.html">Jan. 19, 2016</a></time>
                    </p>
                    <div class="post-share"><span class="icon icon-primary material-icons-share icon-sm icon-share"></span>
                      <ul class="list-share">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                        <li><a href="#" class="fa-youtube"></a></li>
                      </ul>
                    </div>
                  </div><a href="blog_post.html" class="btn btn-sm btn-transparent">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section More News-->
        <section>
          <h4>more news</h4>
          <div class="row row-no-gutter border-crusta">
            <div class="col-xs-12">
              <div class="blog-post-variant-4">
                <div class="post-img"><img src="assets/images/index-19.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">F1 Bosses Reach Engine Price Deal</a></h6>
                      <p>V6 turbo hybrid engines to stay here till at least 2020, in exchange for lower prices.</p>
                      <p class="post-meta">posted by <a href="blog_post.html">Victor Pitcher</a> &bull;
                        <time datetime="2016"><a href="blog_post.html">Jan. 18, 2016</a></time>
                      </p>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="blog-post-variant-4">
                <div class="post-img"><img src="assets/images/index-20.jpg" alt=""/></div>
                <div class="post-body bg-gray">
                  <div class="post-body-inside bg-gray">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">England U19 Cricket Team Beats Zimbabwe</a></h6>
                      <p>Watch highlights of England's 129-run victory over Zimbabwe in their Under-19 World Cup group C game in Chittagong.</p>
                      <p class="post-meta">posted by <a href="blog_post.html">Jason Parker</a> &bull;
                        <time datetime="2016"><a href="blog_post.html">Feb. 12, 2016</a></time>
                      </p>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="blog-post-variant-4">
                <div class="post-img"><img src="assets/images/index-21.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Manuel Pellegrini Admits Manchester City Quit</a></h6>
                      <p>Manchester City manager Manuel Pellegrini confirms he will be gone from norhtern English club as the season will end. Bayern's Pep will take over the vacant position.</p>
                      <p class="post-meta">posted by <a href="blog_post.html">Carol Adams</a> &bull;
                        <time datetime="2016"><a href="blog_post.html">Jan. 20, 2016</a></time>
                      </p>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="blog-post-variant-4">
                <div class="post-img"><img src="assets/images/index-22.jpg" alt=""/></div>
                <div class="post-body bg-gray">
                  <div class="post-body-inside bg-gray">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">10 most Memorable Super Bowls in Memory</a></h6>
                      <p>When we relive all these best Superbowl moments, the '72 Dolphins, the Fridge, and Brady's legacy will surely feature in our list. But why not give the ball to Beast Mode?</p>
                      <p class="post-meta">posted by <a href="blog_post.html">Sharon Wright</a> &bull;
                        <time datetime="2016"><a href="blog_post.html">Apr. 05, 2016</a></time>
                      </p>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="blog-post-variant-4">
                <div class="post-img"><img src="assets/images/index-23.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">John Scott voted MVP of Pacific's All-Star Game Win</a></h6>
                      <p>Learn about the reaction John Scott's family had to his most valuable player award.</p>
                      <p class="post-meta">posted by <a href="blog_post.html">Richard Phillips</a> &bull;
                        <time datetime="2016"><a href="blog_post.html">Jan. 01, 2016</a></time>
                      </p>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 bg-gray">
              <nav class="block-inline">
                <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
              </nav>
              <nav class="nav-arrows pull-right clearfix">
                <div class="nav-prev"></div>
                <div class="nav-next"></div>
              </nav>
            </div>
          </div>
        </section>
      </div>
      <!--Section Sidebar-->
      <div class="col-xs-12 col-lg-4">
        <div class="sidebar display-3">
          <div class="sidebar-module">
            <h4>follow us</h4>
            <div class="wrap border-mandy">
              <h5>Sports news on social networks</h5>
              <p>Be up-to-date with your fav sports events via Facebook, Twitter & more!</p>
              <ul class="list-inline-variant-1">
                <li><a href="#" class="fa-facebook"></a></li>
                <li><a href="#" class="fa-twitter"></a></li>
                <li><a href="#" class="fa-google-plus"></a></li>
                <li><a href="#" class="fa-youtube"></a></li>
              </ul>
            </div>
            <div class="wrap bg-gray">
              <h5>Sign up for sports updates!</h5>
              <p>Give us your email and you will be daily updated with latest sports events, in detail!</p>
              <!-- Rd Mailform result field-->
              <div class="rd-mailform-validate"></div>
              <!-- RD Mailform-->
              <form data-result-class="rd-mailform-validate" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform subscribe">
                <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail">
                <button class="btn btn-primary btn-sm full-width">Subscribe</button>
              </form>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>recent sports events</h4>
            <div class="border-green">
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/sidebar-1.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Australian Open 2016: Federer Looms Large for Djokovic in...</a></h6>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/sidebar-2.jpg" alt=""/></div>
                <div class="post-body bg-gray">
                  <div class="post-body-inside bg-gray">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Undefeated HS Wrestler Throws Match to Opponent with Special...</a></h6>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/sidebar-3.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Panthers Say Manning Hasn`t Lost a Thing</a></h6>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>latest tweets</h4>
            <div class="border-tultip"><a href="https://twitter.com/templatemonster" data-widget-id="721950285980180480" data-chrome="nofooter noborders noscrollbar noheader transparent" data-tweet-limit="3" data-link-color="#3ec0e1" class="twitter-timeline twitter-wjs">Tweets by @templatemonster</a></div>
          </div>
          <div class="sidebar-module">
            <h4>most watched videos</h4>
            <div class="border-primary">
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/sidebar-4.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">LAAX Open 2016 - Halfpipe</a></h6>
                      <time datetime="2016"><a href="blog_post.html"></a></time>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-icon-play btn-transparent"></a>
                  </div>
                </div>
              </div>
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="assets/images/sidebar-5.jpg" alt=""/></div>
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
                <div class="post-img"><img src="assets/images/sidebar-6.jpg" alt=""/></div>
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
                  <cite><a href="blog_post.html">Stuart Garibaldi</a></cite> <span>on</span>
                </p>
                <p>
                  <q>Adidas to Kill Off IAAF Sponsorship Deal</q>
                </p>
              </blockquote>
              <blockquote class="quote-2 bg-gray">
                <p>
                  <cite><a href="blog_post.html">Stuart Garibaldi</a></cite> <span>on</span>
                </p>
                <p>
                  <q>West Ham Signs Forward Emenike on Loan from Fenerbahce</q>
                </p>
              </blockquote>
              <blockquote class="quote-2 bg-dark">
                <p>
                  <cite><a href="blog_post.html">Stuart Garibaldi</a></cite> <span>on</span>
                </p>
                <p>
                  <q>West Ham Signs Forward Emenike on Loan from Fenerbahce</q>
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
                  <button type="submit" class="btn btn-primary">Search</button>
                </form>
              </div>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>about</h4>
            <div class="wrap border-tultip">
              <h5>About Daily Sports</h5>
              <p>The Daily Sports is a fully digital sports news source. Yet we have a big, dedicated team of professional sports writers, who attend the biggest live sports events in US and around the world.</p>
              <p>Their unique reporting as well as our office-based analytics for sports breaking news make "The Daily Sports" an ultimate destination of all!</p><a href="about.html" class="btn btn-primary btn-sm">Read more</a>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>facebook</h4>
            <div class="wrap border-primary">
              <div id="fb-root"></div>
              <!-- Facebook Feed-->
              <div class="fb-page-responsive">
                <div data-href="https://www.facebook.com/TemplateMonster" data-tabs="timeline" data-height="217" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" class="fb-page">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/TemplateMonster"><a href="https://www.facebook.com/TemplateMonster">TemplateMonster</a></blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-module clearfix">
            <h4>instagram</h4>
            <div class="border-green"><!-- RD Instafeed-->
              <div data-instafeed-clientid="44f19408f04040bd85214315861a84a1" data-instafeed-get="user" data-instafeed-user="499522078" class="instafeed element-groups-xs-custom">
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="assets/images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
              </div>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>categories</h4>
            <div class="wrap border-primary">
              <ul class="list-variant-1">
                <li><a href="categories.html">breaking News</a></li>
                <li><a href="basketball.html">baseball</a></li>
                <li><a href="basketball.html">basketball</a></li>
                <li><a href="soccer.html">soccer</a></li>
                <li><a href="motorsport.html">motorsports</a></li>
                <li><a href="olympics.html">olympics</a></li>
              </ul>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>tag</h4>
            <div class="wrap border-mandy bg-gray">
              <div class="tag-group"><a href="#" class="tag">tennis</a><a href="#" class="tag">breaking news</a><a href="#" class="tag">baseball</a><a href="#" class="tag">soccer</a><a href="#" class="tag">motorsports</a><a href="#" class="tag">olympics</a><a href="#" class="tag">nba</a><a href="#" class="tag">travel</a><a href="#" class="tag">rally</a><a href="#" class="tag">news</a></div>
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
                <div class="rdc-events"><a class="rdc-events_close"></a>
                  <ul>
                    <li data-date="10/28/2015" class="rdc-event">Event 1</li>
                  </ul>
                </div>
                <div class="rdc-panel clearfix"><a class="rdc-next"></a><a class="rdc-prev"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop