@extends('layouts.app')

@section('title')
    Carfix | Contact
@endsection

@section('content')

    <!-- Inner Banner -->
    <section class="page-banner parallaxie">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2>Contact Us</h2>
                  <div class="bread-crumb"><a href="index.html">Home:</a> / Contact Us</div>
                </div>
              </div>
            </div>
          </section>
          <!-- /# Inner Banner -->

          <!-- Contact Us -->
          <section id="contact-us1" class="p_t_b">
              <div class="container">

                  <div class="row">
                      <div class="col-sm-12">
                          <div class="heading_left heading">
                              <h2>Contact <span>Information</span></h2>
                              <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="contact-info">

                      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="contact-info-box">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                          <h3>Visit Our Place</h3>
                          <p>Lagos State University, Ojo, Lagos State</p>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="contact-info-box">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <h3>Quick Contact</h3>
                          <p>08106420637</p>
                          <p>contact@yourdomain.com</p>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="contact-info-box">
                          <i class="fa fa-truck" aria-hidden="true"></i>
                          <h3>Emargancy 24 Hours</h3>
                          <p>We have Truck Tow service also, our team ready to help you 24/7.</p>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="row m_t_50">
                      <div class="col-sm-12">
                          <div class="heading_left heading">
                              <h2>Say <span>Hello</span></h2>
                              <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                          </div>
                      </div>
                  </div>

                  <form class="contact-page">

                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                              <input class="form-control" placeholder="Name" type="text">
                          </div>
                          <div class="form-group">
                              <input class="form-control" placeholder="Phone" type="text">
                          </div>
                          <div class="form-group">
                              <input class="form-control" placeholder="Email" type="email">
                          </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                              <textarea class="form-control" placeholder="Message"></textarea>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <a href="#." class="cd-btn secondary">Submit Now</a>
                        </div>
                    </div>

                  </form>

                  <div class="row m_t_50">
                      <div class="col-sm-12">
                          <div class="heading_left heading">
                              <h2>Get <span>Directions</span></h2>
                              <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">

                      <div class="col-md-12">
                        <div id="cd-google-map">
                            <div id="google-container"></div>
                            <div id="cd-zoom-in"></div>
                            <div id="cd-zoom-out"></div>
                        </div>
                      </div>

                  </div>

              </div>

          </section>
          <!-- /#Contact Us -->


    @include('partials.footer')
@endsection
