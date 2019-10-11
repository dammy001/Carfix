@extends('layouts.app')

@section('content')

        <!-- Sign up form -->
        <section class="signup">
            <br>
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{route('register')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Your Name" required autocomplete="name" autofocus/>

                                @error('name')
                                    <p style="color:red; font-size: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email"/>

                                @error('email')
                                    <p style="color:red; font-size: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password" placeholder="Password"/>

                                @error('password')
                                    <p style="color:red; font-size: 10px;">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm-Password">
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

@endsection
