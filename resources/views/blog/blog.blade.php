@extends('layouts.app')

@section('title')
    Carfix | Blog
@endsection

@section('content')
<br><br><br><br>
<!-- Inner Banner -->
<section class="page-banner parallaxie">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Our Blog</h2>
            <div class="bread-crumb text-right"><a href="{{ url('/') }}">Home:</a> / Our Blog</div>
            </div>
          </div>
        </div>
      </section>
      <!-- /# Inner Banner -->

      <!-- Blog -->
      <section id="blog" class="p_t_b">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                @foreach ($blogs as $blog)
                <div class="blog_detail">

                        <div class="blog_heading">
                        <h2>{{ $blog->title}}</h2>
                          <ul>
                          <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> {{ $blog->postedby }}</span></a></li>
                          <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ $blog->dateposted }}</span></a></li>
                            {{-- <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                            <li><a href="#."><i class="fa fa-html5" aria-hidden="true"></i> IN : <span>HTML5</span></a></li>
                            <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li> --}}
                          </ul>
                        </div>
                        <div class="blog_image">
                          <div class="single-effect">
                            <figure class="wpf-blog">
                              <a href="#"><img src="images/bannar_12.jpg" alt="img"></a>
                              <figcaption class="view-caption">
                                <a href="images/bannar_12.jpg" class="fancybox centered" data-fancybox="gallery"><span class="fa fa-search"></span></a>
                              </figcaption>
                            </figure>
                          </div>
                        </div>

                        <div class="bolg_description">
                        <p>{{$blog->description}}</p>
                          <div class="blog_line"></div>
                          <div class="blog_button"><div class="dropdown">
                            <button class="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                            </button>
                            <ul class="dropdown-menu socialicons">
                              <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div><a href="{{ route('blog.detail', $blog->id) }}" class="pull-right">Continue Reading</a></div>
                        </div>
                      </div>
                @endforeach


              {{-- <div class="blog_detail">

                <div class="blog_heading">
                  <h2>Auto Zoon Awesome Image Post</h2>
                  <ul>
                    <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> Sadaf</span></a></li>
                    <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>January  01, 2018</span></a></li>
                    <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                    <li><a href="#."><i class="fa fa-html5" aria-hidden="true"></i> IN : <span>HTML5</span></a></li>
                    <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                  </ul>
                </div>
                  <div class="blog_image">
                    <img src="images/bannar_13.jpg" alt="img" class="img-responsive">
                  </div>

                  <div class="bolg_description">
                    <p>Vivamus suscipit nisi a mauris nisi tristique quis arcu et massa ultricies feugiat. Donec orci risus, nisi tristique quis arcu et massa suscipit et consectetur. Curabitur condimentum luctus facilisis. Ut condimentum Donec orci risus, suscipit et consectetur orci neque, quis tincidunt nisi tristique sed. Vivamus suscipit nisi a mauris ultricies feugiat. Donec orci risus, suscipit [...]</p>
                    <div class="blog_line"></div>
                    <div class="blog_button"><div class="dropdown">
                      <button class="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                      </button>
                      <ul class="dropdown-menu socialicons">
                        <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      </ul>
                    </div><a href="#." class="pull-right">Continue Reading</a></div>
                  </div>
              </div>

              <div class="blog_detail">

                <div class="blog_heading">
                  <h2>Auto Zoon Awesome Quote Post</h2>
                  <ul>
                    <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> Sadaf</span></a></li>
                    <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>January  01, 2018</span></a></li>
                    <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                    <li><a href="#."><i class="fa fa-html5" aria-hidden="true"></i> IN : <span>HTML5</span></a></li>
                    <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                  </ul>
                </div>
                  <div class="blog_image">
                    <div id="testinomial_slider" class="owl-carousel owl-theme">
                      <div class="item">
                        <div class="testinomial_detail text-center">
                          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit  nobis est eligendi optio cumque nihil impedit</p>
                            <a href="#."><h4>Charles Coleman</h4></a>
                            <a href="#."><span>CEO of Auto Zoon</span></a>
                        </div>
                       </div>
                      <div class="item">
                        <div class="testinomial_detail text-center">
                          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit  nobis est eligendi optio cumque nihil impedit</p>
                            <a href="#."><h4>Charles Coleman</h4></a>
                            <a href="#."><span>CEO of Auto Zoon</span></a>
                        </div>
                      </div>
                      <div class="item">
                        <div class="testinomial_detail text-center">
                          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit  nobis est eligendi optio cumque nihil impedit</p>
                            <a href="#."><h4>Charles Coleman</h4></a>
                            <a href="#."><span>CEO of Auto Zoon</span></a>
                        </div>
                     </div>
                    </div>
                  </div>

                  <div class="bolg_description">
                    <p>Vivamus suscipit nisi a mauris nisi tristique quis arcu et massa ultricies feugiat. Donec orci risus, nisi tristique quis arcu et massa suscipit et consectetur. Curabitur condimentum luctus facilisis. Ut condimentum Donec orci risus, suscipit et consectetur orci neque, quis tincidunt nisi tristique sed. Vivamus suscipit nisi a mauris ultricies feugiat. Donec orci risus, suscipit [...]</p>
                    <div class="blog_line"></div>
                    <div class="blog_button"><div class="dropdown">
                      <button class="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                      </button>
                      <ul class="dropdown-menu socialicons">
                        <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      </ul>
                    </div><a href="#." class="pull-right">Continue Reading</a></div>
                  </div>
              </div>

              <div class="blog_detail">

                <div class="blog_heading">
                  <h2>Auto Zoon Awesome Link Post</h2>
                  <ul>
                    <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> Sadaf</span></a></li>
                    <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>January  01, 2018</span></a></li>
                    <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                    <li><a href="#."><i class="fa fa-html5" aria-hidden="true"></i> IN : <span>HTML5</span></a></li>
                    <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                  </ul>
                </div>
                  <div class="blog_image text-center">
                    <a href="#." class="blog_link">
                    <i class="fa fa-link" aria-hidden="true"></i>
                      Auto Zoon Hosting & Multipurpose HTML5 Template<br>
                      <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod</span>
                    </a>
                  </div>

                  <div class="bolg_description">
                    <p>Vivamus suscipit nisi a mauris nisi tristique quis arcu et massa ultricies feugiat. Donec orci risus, nisi tristique quis arcu et massa suscipit et consectetur. Curabitur condimentum luctus facilisis. Ut condimentum Donec orci risus, suscipit et consectetur orci neque, quis tincidunt nisi tristique sed. Vivamus suscipit nisi a mauris ultricies feugiat. Donec orci risus, suscipit [...]</p>
                    <div class="blog_line"></div>
                    <div class="blog_button"><div class="dropdown">
                      <button class="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                      </button>
                      <ul class="dropdown-menu socialicons">
                        <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      </ul>
                    </div><a href="#." class="pull-right">Continue Reading</a></div>
                  </div>
              </div>

              <div class="blog_detail">

                <div class="blog_heading">
                  <h2>Auto Zoon Awesome Post with youtube iframe.</h2>
                  <ul>
                    <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> Sadaf</span></a></li>
                    <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>January  01, 2018</span></a></li>
                    <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                    <li><a href="#."><i class="fa fa-html5" aria-hidden="true"></i> IN : <span>HTML5</span></a></li>
                    <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                  </ul>
                </div>
                  <div class="blog_image">
                    <iframe class="videoembed" src="http://www.youtube.com/embed/YE7VzlLtp-4?" data-devanime="fadeIn" data-devanime-delay="0.6s">
                    </iframe>
                  </div>

                  <div class="bolg_description">
                    <p>Vivamus suscipit nisi a mauris nisi tristique quis arcu et massa ultricies feugiat. Donec orci risus, nisi tristique quis arcu et massa suscipit et consectetur. Curabitur condimentum luctus facilisis. Ut condimentum Donec orci risus, suscipit et consectetur orci neque, quis tincidunt nisi tristique sed. Vivamus suscipit nisi a mauris ultricies feugiat. Donec orci risus, suscipit [...]</p>
                    <div class="blog_line"></div>
                    <div class="blog_button"><div class="dropdown">
                      <button class="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                      </button>
                      <ul class="dropdown-menu socialicons">
                        <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      </ul>
                    </div><a href="#." class="pull-right">Continue Reading</a></div>
                  </div>
              </div>

              <div class="blog_detail">

                <div class="blog_heading">
                  <h2>Auto Zoon Awesome Post with vimeo iframe.</h2>
                  <ul>
                    <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> Sadaf</span></a></li>
                    <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>January  01, 2018</span></a></li>
                    <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                    <li><a href="#."><i class="fa fa-html5" aria-hidden="true"></i> IN : <span>HTML5</span></a></li>
                    <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                  </ul>
                </div>
                  <div class="blog_image">
                    <iframe class="videoembed" src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0">
                    </iframe>
                  </div>

                  <div class="bolg_description">
                    <p>Vivamus suscipit nisi a mauris nisi tristique quis arcu et massa ultricies feugiat. Donec orci risus, nisi tristique quis arcu et massa suscipit et consectetur. Curabitur condimentum luctus facilisis. Ut condimentum Donec orci risus, suscipit et consectetur orci neque, quis tincidunt nisi tristique sed. Vivamus suscipit nisi a mauris ultricies feugiat. Donec orci risus, suscipit [...]</p>
                    <div class="blog_line"></div>
                    <div class="blog_button"><div class="dropdown">
                      <button class="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                      </button>
                      <ul class="dropdown-menu socialicons">
                        <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      </ul>
                    </div><a href="#." class="pull-right">Continue Reading</a></div>
                  </div>
              </div> --}}

              <ul class="pagination-list">

              <li><a href="#">{{$blogs->links()}}</a></li>


              </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">

              <div class="sideblog text-center">
                <div class="sideblog_heading text-left">
                  <h3>About.Me</h3>
                </div>
                <div class="blogside_detail">
                  <img src="images/team-3.png" alt="image" class="img-responsive">
                  <p>Vivamus suscipit nisi a mauris ultricie feugiat. Donec orci risus, suscipit et consectetur et, placerat tortor.</p>
                  <a href="#.">Get in Tuch <i class="fa fa-pagelines" aria-hidden="true"></i></a>
                </div>
              </div>

              <div class="social_blog text-center">
                <div class="sideblog_heading">
                  <h4>follow.me</h4>
                </div>
                <ul class="blogside_links">
                  <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>

              <div class="sideblog text-center">
                <div class="sideblog_heading text-left">
                  <h3>search now</h3>
                </div>
                <div class="blogside_search">
                  <form>
                    <input type="search" placeholder="Search" class="search" name="search">
                    <input type="button" value="Search Now" class="button" name="button">
                  </form>
                </div>
              </div>

              <div class="sideblog">
                <div class="sideblog_heading">
                  <h3>popular.posts</h3>
                </div>
                <div class="blogside_post p_b_50">
                  <div class="single-effect">
                    <figure class="wpf-blog">
                      <a href="#"><img src="images/car-1.jpg" alt="img"></a>
                      <figcaption class="view-caption">
                        <a href="images/car-1.jpg" class="fancybox centered" data-fancybox="gallery"><span class="fa fa-search"></span></a>
                      </figcaption>
                    </figure>
                  </div>
                  <h4>Plan your trip with Joy</h4>
                  <p>Vivamus suscipit nisi a mauris ultricie feugiat. Donec orci risus, suscipit et consectetur et, placerat tortor.</p>
                  <span class="pull-right">January 7, 2018</span>
                </div>
                <div class="blogside_post p_b_50">
                  <div class="single-effect">
                    <figure class="wpf-blog">
                      <a href="#"><img src="images/car-2.jpg" alt="img"></a>
                      <figcaption class="view-caption">
                        <a href="images/car-2.jpg" class="fancybox centered" data-fancybox="gallery"><span class="fa fa-search"></span></a>
                      </figcaption>
                    </figure>
                  </div>
                  <h4>Plan your trip with Joy</h4>
                  <p>Vivamus suscipit nisi a mauris ultricie feugiat. Donec orci risus, suscipit et consectetur et, placerat tortor.</p>
                  <span class="pull-right">January 7, 2018</span>
                </div>
                <div class="blogside_post">
                  <div class="single-effect">
                    <figure class="wpf-blog">
                      <a href="#"><img src="images/car-3.jpg" alt="img"></a>
                      <figcaption class="view-caption">
                        <a href="images/car-3.jpg" class="fancybox centered" data-fancybox="gallery"><span class="fa fa-search"></span></a>
                      </figcaption>
                    </figure>
                  </div>
                  <h4>Plan your trip with Joy</h4>
                  <p>Vivamus suscipit nisi a mauris ultricie feugiat. Donec orci risus, suscipit et consectetur et, placerat tortor.</p>
                  <span class="pull-right">January 7, 2018</span>
                </div>
              </div>

              <div class="social_blog text-center">
                <div class="sideblog_heading">
                  <h4>blog.stats</h4>
                </div>

                <div class="progress">
                  <label><i class="fa fa-bar-chart" aria-hidden="true"></i></label>
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    17 Posts
                  </div>
                </div>

                <div class="progress">
                  <label><i class="fa fa-comment-o" aria-hidden="true"></i></label>
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    10903 visits
                  </div>
                </div>

                <div class="progress">
                  <label><i class="fa fa-play-circle" aria-hidden="true"></i></label>
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                    49 media
                  </div>
                </div>

                <div class="progress">
                  <label><i class="fa fa-quote-left" aria-hidden="true"></i></label>
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                    3918 words
                  </div>
                </div>

                <div class="progress">
                  <label><i class="fa fa-bar-chart" aria-hidden="true"></i></label>
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    12 comm.
                  </div>
                </div>
              </div>

              <div class="sideblog">
                <div class="sideblog_heading">
                  <h3>Quick Tags</h3>
                </div>
                <div class="blogside_tag">
                  <ul>
                    <li><a href="#.">audio</a></li>
                    <li><a href="#.">map</a></li>
                    <li><a href="#.">container</a></li>
                  </ul>
                  <ul>
                    <li><a href="#.">container</a></li>
                    <li><a href="#.">map</a></li>
                    <li><a href="#.">audio</a></li>
                  </ul>
                  <ul>
                    <li><a href="#.">audio</a></li>
                    <li><a href="#.">map</a></li>
                    <li><a href="#.">container</a></li>
                  </ul>
                </div>
              </div>

              {{-- <div class="sideblog text-center">
                <div class="sideblog_heading text-left">
                  <h3>Login now</h3>
                </div>
                <div class="blogside_search">
                  <form>
                    <input type="text" value="user name" class="search margin_b_30" name="button">
                    <input type="password" value="password" class="search" name="password">
                    <input type="button" value="Login" class="button" name="button">
                  </form>
                </div>
              </div> --}}

            </div>
          </div>
        </div>
      </section>
      <!-- /#BLog -->


@endsection
