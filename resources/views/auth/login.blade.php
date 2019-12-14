<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Login</title>

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
            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure>
                                <img
                                    src="https://images.unsplash.com/photo-1528914137830-c85ee162f588?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="sing up image"
                                />
                            </figure>
                            <a href="{{ route('register') }}" class="signup-image-link"
                                >Create an account</a
                            >
                            <a href="{{ url('/') }}" class="signup-image-link"
                                >Back Home</a
                            >
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Sign In</h2>
                            <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email"
                                        ><i
                                            class="zmdi zmdi-account material-icons-name"
                                        ></i
                                    ></label>
                                    <input
                                        type="email"
                                        class="@error('email') is-invalid @enderror"
                                        name="email"
                                        id="email"
                                        placeholder="your Email"
                                        required autocomplete="email" autofocus
                                    />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password"
                                        ><i class="zmdi zmdi-lock"></i
                                    ></label>
                                    <input
                                        type="password"
                                        id="password"
                                        class="@error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="current-password"
                                        placeholder="Password"
                                    />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        class="agree-term" 
                                        {{ old('remember') ? 'checked' : '' }}
                                    />
                                    <label
                                        for="remember-me"
                                        class="label-agree-term"
                                        ><span><span></span></span>Remember
                                        me</label
                                    >
                                </div>
                                <div class="form-group form-button">
                                    <input
                                        type="submit"
                                        name="signin"
                                        id="signin"
                                        class="form-submit"
                                        value="Log in"
                                    />
                                </div>
                            </form>
                            <div class="social-login">
                                <span class="social-label">Or login with</span>
                                <ul class="socials">
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="display-flex-center zmdi zmdi-facebook"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="display-flex-center zmdi zmdi-twitter"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="display-flex-center zmdi zmdi-google"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
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
