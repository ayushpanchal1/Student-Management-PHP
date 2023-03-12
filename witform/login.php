<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
        }

        #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
        }

        #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
        }

        .bg-glass {
        background-color: hsla(0, 0%, 22%, 0.8) !important; /* background-color: hsla(0, 0%, 100%, 0.6) !important; */
        backdrop-filter: saturate(200%) blur(25px);
        }

        .form-label{
            color: hsla(0, 100%, 100%, 0.8);
        }

        .form-control{
            background: hsla(0, 0%, 0%, 0.3);
            color: hsla(0, 100%, 100%, 0.6);
        }

        .form-control:hover{
            background: hsla(0, 0%, 20%, 0.3);
            color: hsla(0, 100%, 100%, 0.8);
        }

        .form-control:focus{
            background: hsla(0, 0%, 20%, 0.3);
            color: hsla(0, 100%, 100%, 1.0);
        }

        .btn{
            background: hsl(278, 85%, 37%, 0.3);
        }
    </style>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-glass">
    <a class="navbar-brand" href="#">&nbsp;&nbsp;Log In Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="login.php">Log in</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adminlogin.php">Admin</a>
        </li>   
        </ul>
    </div>
    </nav>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Log into<br />
            <span style="color: hsl(218, 81%, 75%)">your account</span>
            </h1>
            <a href="signup.php"><p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Don't have an account? Sign up here.
            </p></a>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

            <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%); font-size:50px"> Log in</h1>
                <form action="loginprocess.php" method="post">
                
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <!-- <div class="row">
                    <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" name="fname" id="form3Example1" class="form-control" required/>
                        <label class="form-label" for="form3Example1">First name</label>
                    </div>
                    </div>
                    <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" name="lname" id="form3Example2" class="form-control" required/>
                        <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                    </div>
                </div> -->

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="eml" id="form3Example3" class="form-control" required/>
                    <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="unm" id="form3Example4" class="form-control" required/>
                    <label class="form-label" for="form3Example4">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="psw" id="form3Example5" class="form-control" required/>
                    <label class="form-label" for="form3Example5">Password</label>
                </div>

                <!-- Checkbox -->
                <!-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                    </label>
                </div> -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Log in
                </button>

                <!-- Register buttons -->
                <!-- <div class="text-center">
                     <p>or sign up with:</p> 
                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button> -->
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>