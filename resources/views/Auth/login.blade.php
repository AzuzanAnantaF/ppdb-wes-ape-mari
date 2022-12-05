<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sign In</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetz/modules/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assetz/modules/fontawesome/css/all.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assetz/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assetz/css/components.css')}}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h4>Login</h4>
                            </div> -->

                            <div class="card-body">
                                <form method="POST" action="/postlogin">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <!-- <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div> -->
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="{{route('register')}}">Register</a>
                        </div>
                        @include('template.footer')
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset ('assetz/modules/jquery.min.js')}}"></script>
    <script src="{{asset ('assetz/modules/popper.js')}}"></script>
    <script src="{{asset ('assetz/modules/tooltip.js')}}"></script>
    <script src="{{asset ('assetz/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assetz/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset ('assetz/modules/moment.min.js')}}"></script>
    <script src="{{asset ('assetz/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset ('assetz/js/scripts.js')}}"></script>
    <script src="{{asset ('assetz/js/custom.js')}}"></script>
</body>

</html>
