<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Inventory App Register</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset ('assetz/modules/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset ('assetz/modules/all.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset ('assetz/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('assetz/css/components.css')}}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <!-- <img src="https://yt3.ggpht.com/ytc/AMLnZu9JW4gVnRwef3M2GbDxrfyO00bqDxawTFifLKcY=s900-c-k-c0x00ffffff-no-rj" alt="logo" width="100" class="shadow-light rounded-circle"> -->
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <form action="{{route('simpanRegister')}}" method="POST">
                                        @csrf
                                        <label for="name">Username</label>
                                        <input id="name" name='name' type="text" class="form-control" name="nama"
                                            autocomplete="off" autofocus>
                                </div>
                                <!-- <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div> -->


                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" name='password' type="password" class="form-control pwstrength"
                                        data-indicator="pwindicator" name="password">
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>

                                <!-- <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div> -->

                                <!-- <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control selectric">
                        <option>Indonesia</option>
                        <option>Palestine</option>
                        <option>Syria</option>
                        <option>Malaysia</option>
                        <option>Thailand</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Province</label>
                      <select class="form-control selectric">
                        <option>West Java</option>
                        <option>East Java</option>
                      </select>
                    </div>
                  </div> -->

                                <!-- <div class="row">
                    <div class="form-group col-6">
                      <label>City</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Postal Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div> -->

                                <div class="form-group">
                                    <div class="container"></div>
                                    <a href="{{route('login')}}" class="nav-link">Sudah Memiliki Akun</a>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>

                            </form>
                        </div>
                    </div>
                    <!-- Footer -->
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
    <script src="{{asset ('assetz/modules/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assetz/modules/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset ('assetz/modules/moment.min.js')}}"></script>
    <script src="{{asset ('assetz/modules/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('assetz/js/scripts.js')}}"></script>
    <script src="{{asset('assetz/js/custom.js')}}"></script>
</body>