@extends('blog.app')

@section('title')
    Carfix | Blog Details
@endsection

@section('content')
<!-- Inner Banner -->
<section class="page-banner parallaxie">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Our Blog</h2>
        <div class="bread-crumb text-right"><a href="{{url('/')}}">Home:</a> / Our Blog</div>
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

          <div class="blog_detail">
            <div class="blog_heading">
            <h2>{{$blog->title}}</h2>
              <ul>
              <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> {{$blog->postedby}}</span></a></li>
              <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{$blog->dateposted}}</span></a></li>
                <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
              </ul>
            </div>
            <div class="blog_image">
              <div id="blog_slider" class="owl-carousel owl-theme">
                <div class="item">
                  <img src="../images/bannar_6.jpg" alt="image">
                </div>
                <div class="item">
                  <img src="../images/bannar_7.jpg" alt="image">
                </div>
                <div class="item">
                  <img src="../images/bannar_8.jpg" alt="image">
                </div>
              </div>
            </div>

           <div class="bolg_description">
            <p>{{$blog->details}}</p>
           </div>

            <div class="blog_line"></div>
            <div class="blog_button"><div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
              </button>
              <ul class="dropdown-menu socialicons" aria-labelledby="dLabel">
                <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              </ul>

          </div>
            </div>
          </div>

         {{--  <div class="col-md-9 col-sm-9 col-xs-12">
            @forelse ($comments as $comment)

                <div class="blog_detail">
                    <div class="bolg_description">
                        <p>{{$comment->message}}</p>
                    </div>
                  <div class="blog_heading">
                    <ul>
                    <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> {{$blog->postedby}}</span></a></li>
                    <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{$blog->dateposted}}</span></a></li>
                      <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                    </ul>
                  </div>

                </div>

                @empty
                    <h3>No Comments Yet</h3>

                @endforelse
          </div> --}}
          </div>
        </div>

        <form id="list_blog_contact" class="row p_t m_b_50" method="POST" action="{{ route('comment') }}">
            @csrf
                      <div class="col-md-12 heading_center heading text-center">
                        <h2>Leave <span>a Reply</span></h2>
                        <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                          <div class="form-group">
                              <input class="form-control" name="fullname" placeholder="Full Name" type="text">
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="hidden" name="blogid" value="{{$blog->id}}">
                            </div>
                          <div class="form-group">
                              <input class="form-control" name="phonenumber" placeholder="Phone" type="text">
                          </div>
                          <div class="form-group">
                              <input class="form-control" name="email" placeholder="Email" type="email">
                          </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                              <textarea class="form-control" name="message" placeholder="Message"></textarea>
                          </div>
                      </div>

                      <div class="list_blog_contact text-center m_b_30">
                          <button class="cd-btn secondary" type="submit">Post Comment</button>
                      </div>

          </form>

      </div>
  </section>
@endsection
