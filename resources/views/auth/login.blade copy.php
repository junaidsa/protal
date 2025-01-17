
<!doctype html>
<html lang="en">


<head>

        <meta charset="utf-8" />
        <title>Login - Healthy Mind</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{asset('public')}}/assets/images/favicon.ico">
        <link href="{{asset('public')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <link href="{{asset('public')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('public')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Healthy Mind.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{asset('public')}}/assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('public')}}/assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('public')}}/assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="{{url('login')}}" method="POST">
                                            @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  >
                                            @error('email')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password"  name="password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>


                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('public')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('public')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('public')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('public')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('public')}}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('public')}}/assets/js/app.js"></script>
    </body>
</html>
