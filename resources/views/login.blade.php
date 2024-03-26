<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets/register/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/register/css/style.css')}}">
    <style>
        .signin-content{
            margin-top:-80px;
        }
        .main{
            height: 445px;
            /* background-color:bisque; */
            /* background-color:#1967D2 ; */
            background-color:#004cbe ;
        }
    </style>
</head>
<body>
    <div class="main">
        @if (session('message'))
        <div class="alert alert-danger" role="alert">
            {{ session('message') }}
          </div>
        @endif
    <!-- Sing in  Form -->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    {{-- <div class="signin-image">
                        <figure><img src="{{asset('assets/register/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="register" class="signup-image-link">Create an account</a>
                    </div> --}}

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form action="" method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your email" value="{{old('email')}}" required/>
                                <span style="color: red;">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}" required />
                                <span style="color: red;">
                                    @error('password')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="signin"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                            
                    </div>
                    
                </div>
                <div class="signin-image">
                    <figure><img src="{{asset('assets/register/images/signin-image.jpg')}}" alt="sing up image"></figure>
                    <a href="register" class="signup-image-link">Create an account</a>
                </div>
            </div>
        </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('assets/register/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/register/js/main.js')}}"></script>
</body>
</html>
