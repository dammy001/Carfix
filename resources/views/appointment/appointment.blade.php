@extends('layouts.app')
@section('title')
    Carfix | Appointment
@endsection

@section('content')
    <!-- Inner Banner -->
    <section class="page-banner parallaxie">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2>Appointment</h2>
                <div class="bread-crumb text-right"><a href="{{ url('/') }}">Home:</a> / Appointment</div>
                </div>
              </div>
            </div>
          </section>
          <!-- /# Inner Banner -->

          <!-- Appointment -->
          <section id="appointment-page" class="p_t_b">
            <div class="container">

              <div class="row">

                <div class="col-md-12 heading_left heading">
                  <h2>Appointment <span>Information</span></h2>
                  <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                </div>
              </div>


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


              <form class="appointment-page-form" method="POST" action="{{ route('appointment.store') }}">
                @csrf
                <div class="row">

                  <div class="col-md-7 col-sm-12 col-xs-12">
                    <h3>Personal Information</h3>
                    <div class="row">

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="text" name="firstname" class="form-control" placeholder="First Name">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                        </div>
                      </div>
                      <br>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="E-mail">
                        </div>
                      </div><br>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="text" name="number" class="form-control" placeholder="Phone">
                        </div>
                      </div><br>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="text" name="address" class="form-control" placeholder="Full Address">
                        </div>
                      </div><br>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="text" name="city" class="form-control" placeholder="City">
                        </div>
                      </div><br>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="date" name="dateofappointment" class="form-control" placeholder="Preferred Date Of Appointment">
                            </div>
                          </div><br>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-arrow">
                          <select class="form-control" name="timeofappointment">
                            <option value="12pm" selected="">12:00 PM - 02:00PM</option>
                            <option value="02pm">02:00 PM - 04:00PM</option>
                            <option value="04pm">04:00 PM - 06:00PM</option>
                            <option value="06pm">06:00 PM - 08:00PM</option>
                            <option value="08pm">08:00 PM - 10:00PM</option>
                          </select>
                        </div>
                      </div><br>

                    </div>
                  </div>

                  <div class="col-md-5 col-sm-12 col-xs-12">
                    <h3>Vehicle Information</h3>

                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="vehiclename" class="form-control" placeholder="Vehicle Name">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="vehiclemodel" class="form-control" placeholder="Vehicle Model">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="vehicleyear" class="form-control" placeholder="Vehicle Year">
                            </div>
                        </div>

                    </div>
                  </div>

                </div>

                  <div class="row">
                    <div class="col-md-12">
                      <button class="cd-btn secondary" type="submit">Submit Now</button>
                    </div>
                  </div>

              </form>

            </div>
          </section>

@endsection
