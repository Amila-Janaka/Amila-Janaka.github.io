<?php
include './dbc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amila Photography</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./custom css/style.css">
    <script src="./custom js/admin.js"></script>
</head>

<body>
    <div class=" bg-secondary">
        <!-- Navbar Start     -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="./index.php">Amila Janaka</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./about.php">About</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./news.php">News</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./admin.php">Admin<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="./login.php"><button class="btn btn-light btn-sm btn-outline-dark" type="button">Login
                        </button></a>
                    <a href="./signup.php"><button class="btn btn-primary btn-sm btn-outline-dark" type="button">Sign
                            Up</button></a>
                </form>
            </div>
        </nav>
        <!-- Navbar End -->
        <div class="row">
            <div class="php_data_get col-5">
                <h1 class="text-center">
                    All User Data
                </h1>
                <?php
                //creating query
                $sql = "SELECT * FROM users";

                echo "<table border='1' class='table mx-3 text-center'>
                    <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    </tr>";

                //query (run above query in database)
                $result = mysqli_query($connnect, $sql);

                //check result(how many rows)
                $resultCheck = mysqli_num_rows($result);

                //if number of results>0 ;
                if ($resultCheck > 0) {
                    //print the esult using while loop
                    while ($row = mysqli_fetch_assoc($result)) {
                        // echo $row['id'] . " " . $row['name'] . " " . $row['email'] . " " . $row['password'] . "<br>";
                        echo "<tr>";

                        echo "<td>" . $row['id'] . "</td>";

                        echo "<td>" . $row['name'] . "</td>";

                        echo "<td>" . $row['email'] . "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                }
                ?>
            </div>
            <div class="px-2 col-4 bg-secondary">
                <form class="font-weight-bold was-validated mx-1 mx-md-4" method="POST" action="admin.php">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="UserName">User Name</label>
                        <input type="text" class="form-control" id="userNameid" name="userName" placeholder="Ex : Jos Buttler" onblur="nameValidation()">
                        <div id="userNameErrorMsgid" name="userNameErrorMsg"></div>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="emailid" name="email" placeholder="Ex : josbuttler01@gmail.com" onblur="emailValidation()">
                        <div id="emailErrorMsgid" name="emailErrorMsg"></div>
                    </div>
                    <div class="col text-center mb-3">
                        <!-- <button class="btn btn-outline-light btn-primary mx-1 my-2" type="submit" name="Insert Button" id="button-addon2">Insert</button> -->
                        <button class="btn btn-outline-light btn-primary mx-1 my-2" type="submit" name="updateBTN" id="button-addon2" onclick="reloadPage()">Update</button>
                        <button class="btn btn-outline-light btn-primary mx-1 my-2" type="submit" name="deleteBTN" id="button-addon2">Delete</button>
                    </div>
                </form>
                <!-- <script>
                    // JavaScript function to reload the page
                    function reloadPage() {
                        location.reload();
                    }
                </script> -->
                <?php
                if (isset($_POST['updateBTN'])) {
                    $id = $_POST['id'];
                    $user_name =  $_POST['userName'];
                    $user_email =  $_POST['email'];

                    // $sql = "INSERT INTO users (name,email,password) VALUES (?,?,?)";
                    $sql = "UPDATE users SET name=?, email=? WHERE id=? ";

                    //create prepared statement
                    $statement = mysqli_stmt_init($connnect);
                    //prepare th prepared statement
                    if (!mysqli_stmt_prepare($statement, $sql)) {
                        echo    "SQL Statement Faild";
                    } else {
                        mysqli_stmt_bind_param($statement, "sss", $user_name, $user_email, $id);
                        //initializing $statement / number of 's' depends on number of question marks

                        //run parameters inside the database
                        mysqli_stmt_execute($statement);
                        echo '<script>
                        console.log("Sucesfull updated");
                        </script>';
                    }
                }
                ?>
            </div>

            <div class="php_find_data my-3 col-3">
                <h1 class="text-center">
                    Search Your Data
                </h1>
                <!-- To get user inputs -->
                <form method="POST">
                    <div class="input-group mb-3 container-fluid">
                        <input type="text" class="form-control" name="searchText" placeholder="Enter Keyword" aria-label="Recipient's keyword" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light btn-primary mx-1" type="submit" name="searchBTN" id="button-addon2">Search</button>
                        </div>
                    </div>
                </form>

                <!-- Stop SQL Injection Method 2 -->
                <?php
                // Insert data using prepared statements
                if (isset($_POST['searchBTN'])) {
                    $userKeyword = $_POST['searchText'];

                    $sql = "SELECT * FROM users WHERE name = ? or email = ?";
                    echo " <table class='table'>
                    <thead class='thead-dark'>
                      <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Email</th>
                      </tr>
                    </thead>";

                    // Create a prepared statement
                    $stmt = mysqli_stmt_init($connnect);

                    // Prepare the prepared statement
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed!";
                    } else {
                        // Bind parameters to the placeholders
                        mysqli_stmt_bind_param($stmt, "ss", $userKeyword, $userKeyword);

                        // Run parameter inside the databse
                        mysqli_stmt_execute($stmt);

                        // Get the data
                        $result = mysqli_stmt_get_result($stmt);

                        // Print Data
                        while ($row = mysqli_fetch_assoc($result)) {
                            // echo $row['id'] . "  " . $row['name'] . "  " . $row['password'] . "<br>";
                            echo  "<tbody>";
                            echo "<tr>";

                            echo "<td>" . $row['id'] . "</td>";

                            echo "<td>" . $row['name'] . "</td>";

                            echo "<td>" . $row['email'] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo  "</tbody>";
                        }
                    }
                    echo "</table>";
                }
                ?>
            </div>

        </div>
        <!-- start of the footer -->
        <footer class="text-center text-white bg-secondary footer">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://web.facebook.com/amila.janaka.1293/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <!-- <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a> -->

                    <!-- Google -->
                    <!-- <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a> -->

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/_amila_janaka_/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.linkedin.com/in/amila-janaka-395724225/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/Amila-Janaka" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
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