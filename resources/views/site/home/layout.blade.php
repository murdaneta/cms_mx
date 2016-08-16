@extends('site.template.layout')
@section('content-page')
<!--Section Swiper-->
<section class="section-50">
  <div class="container">
    <!-- Swiper-->
    @include('site.home.partials.slider')
  </div>
</section>
<!--Section Top News-->
<section class="section-bottom-50">
  <div class="container">
    <h4>top news</h4>
    @include('site.home.partials.top-news')
  </div>
</section>
<!--Section Main Content-->
<section class="section-bottom-50">
  <div class="container">
    <div class="row">
      <!--Section Main-->
      <div class="col-xs-12 col-lg-8">
        <!--Section Featured News-->
        @include('site.home.partials.featured-news')
        <!--Section Latest News-->
        @include('site.home.partials.latest-news')        
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
          @include('site.home.partials.follow-us')
          @include('site.home.partials.recent-sports-events')          
          @include('site.home.partials.latest-tweets')

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