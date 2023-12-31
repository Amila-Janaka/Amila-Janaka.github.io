<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amila Photography Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="./custom js/loginForm.js"></script>
</head>

<body>
    <div class="">
        <!-- Navbar Start     -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="./index.php">Amila Janaka</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="./index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./category.php">Category</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./about.php">About</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./news.php">News</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Admin</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="./login.php"><button class="btn btn-light btn-sm btn-outline-dark active" type="button">Login<span class="sr-only">(current)</span>
                        </button></a>
                    <a href="./signup.php"><button class="btn btn-primary btn-sm btn-outline-dark" type="button">Sign
                            Up</button></a>
                </form>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Start of Form   -->
        <section class="vh-100" style="background-color: #eee;">
            <div class="container-fluid h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                                  

                                            <form class="font-weight-bold was-validated mx-1 mx-md-4" action="/" method="post">
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" class="form-control" id="emailid"
                                                        placeholder="Enter Your Email" onblur="emailValidation()"
                                                        required>
                                                    <div id="emailErrorMsgid" name="emailErrorMsg"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Enter Password</label>
                                                    <input type="password" class="form-control" id="passwordid"
                                                        placeholder="Enter Your pasword" onblur="passwordValidation()"
                                                        required>
                                                    <div id="passwordErrorMsgid" name="passwordErrorMsg"></div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">Forgott Password?</a>
                                                    <br>
                                                    <a href="signup.php">Create New Account</a>
                                                </div>
                                                <div class="col text-center mb-3 mt-2">
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </div>
                                            </form>

                                  

                                    </div>
                                    <div
                                        class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="./img/cropped/Ramboda View.jpg" class="img-fluid" alt="Sample image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Form   -->
        <!-- start of the footer -->
        <footer class="text-center text-white" style="background-color: #f1f1f1;">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://web.facebook.com/amila.janaka.1293/" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <!-- <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a> -->

                    <!-- Google -->
                    <!-- <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a> -->

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.instagram.com/_amila_janaka_/" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.linkedin.com/in/amila-janaka-395724225/" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/Amila-Janaka"
                        target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © Amila, Inc. 2023. We love our users!
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>