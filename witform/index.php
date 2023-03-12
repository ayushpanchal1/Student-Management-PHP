<?php
    session_start();
    if (isset($_SESSION['user'])) { 
?>
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
                /* number input arrows fix Chrome, Safari, Edge, Opera */
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
                }

                /* for Firefox */
                input[type=number] {
                -moz-appearance: textfield;
                }
            </style>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-glass">
            <a class="navbar-brand" href="#">&nbsp;&nbsp;Hello</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="nav-link" >logged in as <?php echo $_SESSION['user']?></div>
                </li> 
                </ul>
            </div>
            <button type="button" class="btn btn-primary my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Log out</button>
            </nav>
            <!-- <nav class="navbar fixed-top navbar-dark bg-dark justify-content-between" style="padding: 12px">
            <a class="navbar-brand">
                <h1 class="fw-bold ls-tight" style="color: hsl(218, 81%, 95%); font-size:30px">
                    Logged in as <?php ?>
                </h1>
            </a>
            <button type="button" class="btn btn-primary my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Log out</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </nav> -->

            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass"  style="width: 1240px">
                    <div class="card-body px-4 py-5 px-md-5">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%); font-size:50px"> Please fill the form</h1>
                        <form action="proctorformprocess.php" method="post">
                        
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="fname" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">First name</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="lname" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Last name</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="miname" id="form3Example2" class="form-control" required/>
                                <label class="form-label" for="form3Example2">Middle name</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="moname" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Mother's name</label>
                            </div>
                            </div>
                        </div> 

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <textarea type="text" name="addr" id="form3Example3" class="form-control" rows="4" required> </textarea>
                            <label class="form-label" for="form3Example3">Address</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="city" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">City</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="number" name="pcde" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Pincode</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="number" name="faph" id="form3Example2" class="form-control" required/>
                                <label class="form-label" for="form3Example2">Father's phone number</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="number" name="moph" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Mother's phone number</label>
                            </div>
                            </div>
                        </div>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="number" name="stph" id="form3Example4" class="form-control" required/>
                            <label class="form-label" for="form3Example4">Student's phone number</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="email" name="peml" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Parent's email</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="email" name="steml" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Student's email</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="adct" id="form3Example2" class="form-control" required/>
                                <label class="form-label" for="form3Example2">Admission Category</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="adtp" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Admission Type</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="gndr" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Gender</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="bdgp" id="form3Example1" class="form-control" required/>
                                <label class="form-label" for="form3Example1">Blood Group</label>
                            </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <textarea type="text" name="hobb" id="form3Example3" class="form-control" rows="4" required> </textarea>
                            <label class="form-label" for="form3Example3">Hobbies</label>
                        </div>

                        <div class="form-outline mb-4">
                            <textarea type="text" name="diff" id="form3Example3" class="form-control" rows="4"> </textarea>
                            <label class="form-label" for="form3Example3">Difficulty faced (if any)</label>
                        </div>

                        <div class="form-outline mb-4">
                            <textarea type="text" name="rema" id="form3Example3" class="form-control" rows="4"> </textarea>
                            <label class="form-label" for="form3Example3">Any other remarks (if any)</label>
                        </div>

                        <!-- Password input -->
                        <!-- <div class="form-outline mb-4">
                            <input type="password" name="psw" id="form3Example5" class="form-control" required/>
                            <label class="form-label" for="form3Example5">Password</label>
                        </div> -->

                        <!-- Checkbox -->
                        <!-- <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                            <label class="form-check-label" for="form2Example33">
                            Subscribe to our newsletter
                            </label>
                        </div> -->

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Submit form
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
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark text-light">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Log out</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body show">
                                Are you sure? Do you wish to log out
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <a href="logoutprocess.php"><button type="button" class="btn btn-primary">Yes</button></a>  
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </body>
        </html>
<?php
    }

    else{
        echo "<script>
            alert(`Session is not active! Please log in first!`);
            window.location.replace('login.php');
            </script>
            ";
    }
?>