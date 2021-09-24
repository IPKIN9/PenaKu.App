<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/img/logo/logo.png') }}" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.css') }}">

</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <div class="row">
                                        @if (session('status'))
                                        <div class="col-md-12 text-center">
                                            <p class="text-danger">
                                                {{ session('status') }}
                                            </p>
                                        </div>
                                        @endif
                                        @if ($errors->any() && $retries > 0)
                                        <div class="col-md-12 text-center">
                                            <p class="text-danger">Tersisa {{$retries}} Percobaan</p>
                                        </div>

                                        @endif
                                        @if ($retries <= 0) <div class="col-md-12 text-center">
                                            <p class="text-danger">Coba lagi dalam {{$seconds}} detik</p>
                                    </div>
                                    @endif
                                </div>
                                <form class="user" method="POST" action="{{route('auth.check')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" id=""
                                            aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id=""
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
</body>

</html>