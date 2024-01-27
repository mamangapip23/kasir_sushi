<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/login.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<section class="login d-flex">
    <div class="login-left  w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <div class="header">
                    <h1>welcome back</h1>
                    <p>Welcome back! Please enter your details.</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="login-from">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" id="email" class="@error('email') is-invalid @enderror form-control" placeholder="Enter your email">
                    </div>
                    @error('email')
                        <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror

                    <div class="login-from">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control" id="password" placeholder="Enter your password">
                    </div>
                    @error('password')
                        <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror

                    <div class="login-from">
                        <a href="#" class="text-decoration-none text-center">Forgot password</a>
                    </div>

                    <div class="login-from">
                        <button type="submit" class="signin">Sign In</button>
                        <button class="signin-google"><img src="images/google.png" alt="">  Sign In With Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="login-right w-50 h-100">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/carausel1.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/carausel2.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/carausel3.jpeg" class="d-block w-100" alt="...">
                    
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/from.js"></script>
</body>
</html>
