<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Register</title>

        <!-- Font Icon -->
        <link
            rel="stylesheet"
            href="fonts/material-icon/css/material-design-iconic-font.min.css"
        />

        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('css/signup_style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="main">
            <!-- Sign up form -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Sign up</h2>
                            <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" class="@error('name') is-invalid @enderror" name="full_name" id="full_name" placeholder="Your Full Name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus/>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" class="@error('username') is-invalid @enderror" name="username" id="username" placeholder="Your username" value="{{ old('username') }}" required autocomplete="username"/>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email"
                                        ><i class="zmdi zmdi-email"></i
                                    ></label>
                                    <input
                                        type="email"
                                        class="@error('email') is-invalid @enderror"
                                        name="email"
                                        id="email"
                                        placeholder="Your Email"
                                        value="{{ old('email') }}" 
                                        required autocomplete="email"
                                    />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="state-code"
                                        ><i class="zmdi zmdi-code"></i
                                    ></label>
                                    <input
                                        type="text"
                                        class="@error('state_code') is-invalid @enderror"
                                        name="state_code"
                                        id="state_code"
                                        placeholder="Your State Code"
                                        value="{{ old('state_code') }}" 
                                        required autocomplete="state_code"
                                    />
                                    @error('state_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="callup-no"
                                        ><i
                                            class="zmdi zmdi-confirmation-number"
                                        ></i
                                    ></label>
                                    <input
                                        type="text"
                                        class="@error('call_up') is-invalid @enderror"
                                        name="call_up"
                                        id="call_up"
                                        placeholder="Your Call Up Number"
                                        value="{{ old('call_up') }}" 
                                        required autocomplete="call_up"
                                    />
                                    @error('call_up')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pass"
                                        ><i class="zmdi zmdi-lock"></i
                                    ></label>
                                    <input
                                        type="password"
                                        class="@error('password') is-invalid @enderror"
                                        name="password"
                                        id="pass"
                                        placeholder="Password"
                                        value="{{ old('password') }}" 
                                        required autocomplete="new-password"
                                    />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"
                                        ><i class="zmdi zmdi-lock-outline"></i
                                    ></label>
                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        id="re_pass"
                                        placeholder="Repeat your password"
                                        required autocomplete="new-password"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="checkbox"
                                        name="agree-term"
                                        id="agree-term"
                                        class="agree-term"
                                    />
                                    <label
                                        for="agree-term"
                                        class="label-agree-term"
                                        ><span><span></span></span>I agree all
                                        statements in
                                        <a href="#" class="term-service"
                                            >Terms of service</a
                                        ></label
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="submit"
                                        name="signup"
                                        id="signup"
                                        class="form-submit"
                                        value="Register"
                                    />
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure>
                                <img
                                    src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="sing up image"
                                />
                            </figure>
                            <a href="{{ route('login') }}" class="signup-image-link"
                                >I'm already a member</a
                            >

                            <a href="{{ url('/') }}" class="signup-image-link"
                                >Back Home</a
                            >
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
    <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

