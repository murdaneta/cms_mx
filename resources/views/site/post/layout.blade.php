@extends('site.template.layout')
@section('content-page')
<section>
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.html">home</a></li>
      <li class="active">post slider</li>
    </ol>
  </div>
</section>
<!--Section Main Content-->
<section class="section-bottom-50">
  <div class="container">
    <div class="row">
      <!--Section Main-->
      <div class="col-xs-12 col-lg-8">
        <div class="wrap-1 bg-gray border-mandy">
          <div class="tag-group"><a href="#" class="tag bg-crusta">{{ $notice->category->name }}</a></div>
          <div class="post-title">
            <h5>{{ $notice->title }}</h5>
          </div>
          <div class="post-meta">
            <p>posted by <a href="blog_post.html">{{ $notice->user->name }}</a> &bull;
              <time datetime="2016"><a href="blog_post.html">{!! $notice->created_at !!}</a></time>
            </p>
          </div>
          <div class="img-thumbnail-variant-2">
          	<img src="{!! $notice->oneImg($notice->img) !!}" alt="" width="710" height="560">
          </div>
          <p class="big text-medium">{!! $notice->content !!}</p>
          <div class="post-meta">
            <p>tagged in: <a href="categories.html">news</a><span class="text-primary">,</span><a href="basketball.html"> basketball</a>
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
        <div class="wrap bg-dark">
          <div class="media-variant-2">
            <div class="media-left text-center text-sm-left"><span class="icon img-circle icon-xl icon-dark material-icons-person"></span></div>
            <div class="media-body">
              <h6>Written by Daily Sports</h6>
              <p>The Daily Sports is a fully digital sports news source. Yet we have a big, dedicated team of professional sports wariters, who attend the biggest live sports events in US and around the world.</p>
            </div>
          </div>
        </div>
        <div class="row offset-top-30">
          <div class="col-xs-12 col-sm-6 offset-top-10 offset-sm-top-0">
            <div class="wrap-1 text-left bg-gray prev-post"><a href="blog_post.html"></a>
              <div class="media-variant-2">
                <div class="media-left"><a href="#"><span class="icon icon-md icon-white material-icons-chevron_left"></span></a></div>
                <div class="media-body">
                  <p>previous post</p>
                  <h6>Rallye Monte Carlo 2016: <br class="visible-lg"> Stage 1</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 offset-top-10 offset-sm-top-0">
            <div class="wrap-1 text-right clearfix bg-gray next-post"><a href="blog_post.html"></a>
              <div class="media-variant-2 pull-right">
                <div class="media-body">
                  <p>next post</p>
                  <h6>Rallye Monte Carlo 2016: <br class="visible-lg"> Stage 1</h6>
                </div>
                <div class="media-right"><span class="icon icon-md icon-white material-icons-chevron_right"></span></div>
              </div>
            </div>
          </div>
        </div>
        <h4>3 responses</h4>
        <div class="wrap-1 border-tultip">
          <div class="wrap-comment">
            <div class="media-variant-2">
              <div class="media-left text-center text-sm-left"><span class="icon img-circle icon-lg icon-dark material-icons-person"></span></div>
              <div class="media-body">
                <div class="post-meta">
                  <p>posted by<a href="blog_post.html"> Victor Pitcher</a> &bull;
                    <time datetime="2016"><a href="blog_post.html"> Jan. 20, 2016</a></time><a href="#" class="icon icon-primary icon-sm material-icons-reply pull-right"></a>
                  </p>
                </div>
                <p>It's good to know that Warriors are finally back. Even though many basketball fans thought the victory of Golden State was quite predictable, the team performed great this week.</p>
              </div>
            </div>
            <div class="wrap-reply">
              <div class="media-variant-2">
                <div class="media-left text-center text-sm-left"><span class="icon img-circle icon-lg icon-dark material-icons-person"></span></div>
                <div class="media-body">
                  <div class="post-meta">
                    <p>posted by<a href="blog_post.html"> Tina White</a> &bull;
                      <time datetime="2016"><a href="blog_post.html"> Jan. 20, 2016</a></time><a href="#" class="icon icon-primary icon-sm material-icons-reply pull-right"></a>
                    </p>
                  </div>
                  <p>I can't agree more! But to my mind, the game of LA Clippers was quite more spectacular. I didn't expect them to win with such an impressive lead.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrap-1 bg-gray">
          <div class="wrap-comment">
            <div class="media-variant-2">
              <div class="media-left text-center text-sm-left"><span class="icon img-circle icon-lg icon-dark material-icons-person"></span></div>
              <div class="media-body">
                <div class="post-meta">
                  <p>posted by<a href="blog_post.html"> Tim Barkley</a> &bull;
                    <time datetime="2016"><a href="blog_post.html"> Jan. 20, 2016</a></time><a href="#" class="icon icon-primary icon-sm material-icons-reply pull-right"></a>
                  </p>
                </div>
                <p>Boston Celtics were prepared better than their opponents. Still, it didn't guarantee them victory or at least any dominance, while Orlando Magic showed us how the game should be played.</p>
              </div>
            </div>
          </div>
        </div>
        <h4>leave a reply</h4>
        <div class="wrap-1 bg-gray border-crusta text-left">
          <p>Your email address will not be published. Required fields are marked *</p>
          <form class="rd-mailform comment">
            <input type="text" name="name" placeholder="Your name *">
            <input type="text" name="email" placeholder="Your e-mail *">
            <input type="text" name="name" placeholder="Your site">
            <textarea name="message" placeholder="Comments *"></textarea>
            <button class="btn btn-primary btn-sm">Submit Comment</button>
          </form>
        </div>
      </div>
      <!--Section Sidebar-->
      <div class="col-xs-12 col-lg-4">
        <div class="sidebar display-4">
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
                <div class="post-img"><img src="images/sidebar-1.jpg" alt=""/></div>
                <div class="post-body bg-dark">
                  <div class="post-body-inside bg-dark">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Australian Open 2016: Federer Looms Large for Djokovic in...</a></h6>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="images/sidebar-2.jpg" alt=""/></div>
                <div class="post-body bg-gray">
                  <div class="post-body-inside bg-gray">
                    <div class="post-title">
                      <h6><a href="blog_post.html" class="text-uppercase">Undefeated HS Wrestler Throws Match to Opponent with Special...</a></h6>
                    </div><a href="blog_post.html" class="btn btn-icon-sm btn-transparent"></a>
                  </div>
                </div>
              </div>
              <div class="blog-post-variant-3">
                <div class="post-img"><img src="images/sidebar-3.jpg" alt=""/></div>
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
                <div class="post-img"><img src="images/sidebar-4.jpg" alt=""/></div>
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
                <div class="post-img"><img src="images/sidebar-5.jpg" alt=""/></div>
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
                <div class="post-img"><img src="images/sidebar-6.jpg" alt=""/></div>
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
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
                <div data-instafeed-item=""><a href="#" data-link="href" target="_blank" class="img-thumbnail-variant-3"><img src="images/_blank.png" alt="" data-images-thumbnail-url="src" width="74" height="74"></a></div>
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