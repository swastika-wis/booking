<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        WEBINAR ON MUTUAL FUND INVESTMENT ORGANISED BY
        ADITYA BIRLA SUN LIFE MUTUAL FUND
    </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    @php
        $semid = $semid ?? 1;
        $vendor = $vendor ?? 1;
    @endphp

    <div class="col-xl-12 col-lg-12 col-md-12 bg-gradient-secondary text-center" style="background-color: #819F79;">
        <img src="{{ asset('assets/img/header.png') }}" class="img-fluid text-center mx-auto" alt="Responsive image">
    </div>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center ">
            <div class="col-xl-12 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-1">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-lg-block bg-register-image text-center">
                                <img src="{{ asset('assets/img/seminar/abseminar-1.jpg') }}" class="img-fluid text-center mx-auto" alt="Responsive image">
                            </div>

                            <div class="col-lg-6">
                                <!-- sign up page start-->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register for Webinar!</h1>
                                    </div>

                                    <form class="user needs-validation" action="{{ route('register-webinar') }}" 
                                    method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text"
                                                   class="form-control form-control-user"
                                                   name="firstname"
                                                   id="FirstName"
                                                   placeholder="First Name"
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control form-control-user"
                                                   id="phone"
                                                   name="phone"
                                                   type="tel"
                                                   pattern=".{10}"
                                                   required
                                                   placeholder="Phone no."
                                                   oninput="check(this)">
                                        </div>

                                        <div class="form-group">
                                            <input type="email"
                                                   class="form-control form-control-user"
                                                   name="emailid"
                                                   id="InputEmail"
                                                   placeholder="Email Address"
                                                   required>
                                            <small id="emailHelp" class="form-text text-muted">
                                                We'll never share your email with anyone else.
                                            </small>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text"
                                                       class="form-control form-control-user"
                                                       id="city"
                                                       name="city"
                                                       placeholder="City"
                                                       required>
                                            </div>
                                            <input type="hidden" name="semid" value="{{ $semid }}">
                                            <input type="hidden" name="vendor" value="{{ $vendor }}">
                                        </div>

                                        <button class="btn btn-google btn-block" name="signupSubmit" value="signupSubmit">
                                            Register for Webinar
                                        </button>

                                        <br/>Starting in :
                                        <h3><p id="webinar"></p></h3>
                                    </form>

                                    <div class="text-center">
                                        <a class="small" href="{{ url('login?semid='.$semid.'&vendor='.$vendor) }}">
                                            Already Registered? Login!
                                        </a>
                                    </div>
                                </div>
                                <!-- sign up page ends-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS includes -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>    
</body>
</html>
