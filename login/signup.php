<?php

$conn = mysqli_connect('localhost', 'root', '', 'college_web_project');
if (!$conn) {
    die('error: ' . mysqli_error($conn));
}

$check_inputs = false;
$check_email = false;
$result = "";
if (isset($_REQUEST['singup'])) {
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select_email = "SELECT * FROM `user` WHERE `email` = '$email'";
        $query = mysqli_query($conn, $select_email);
        if (mysqli_num_rows($query) > 0) {
            $check_email = true;
        } else {

            $sql = "INSERT INTO `user` (`f_name`, `l_name`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
        }

    } else {
        $check_inputs = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Login</title>
</head>

<body>
    <header class="">
        <!-- top bar -->
        <div class="header-top-bar">
            <div class="container pg-main p-2 ps-md-5 pe-md-5 ps-sm-1 pe-sm-1">
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <div class="phone-container d-flex flex-wrap">
                        <div class="phone-icon me-1">
                            <i data-aos-duration="1000" data-aos="zoom-in" class="fa-solid fa-phone text-light"></i>
                        </div>
                        <a data-aos-duration="1000" data-aos="zoom-in" class="text-light m-0 text-decoration-none"
                            href="">+91 8374902234</a>
                    </div>
                    <div class="top-bar-icons">
                        <ul class="list-unstyled d-flex justify-content-end m-0">
                            <li class="me-3">
                                <a href=""><i data-aos-duration="1000" data-aos="zoom-in"
                                        class="fa-brands fa-facebook-f text-light"></i></a>
                            </li>
                            <li class="me-3">
                                <a href=""><i data-aos-duration="1000" data-aos="zoom-in"
                                        class="fa-brands fa-instagram text-light"></i></a>
                            </li>
                            <li class="me-3">
                                <a href=""><i data-aos-duration="1000" data-aos="zoom-in"
                                        class="fa-brands fa-linkedin-in text-light"></i></a>
                            </li>
                            <li class="me-3">
                                <a href=""><i data-aos-duration="1000" data-aos="zoom-in"
                                        class="fa-brands fa-twitter text-light"></i></a>
                            </li>
                            <li>
                                <a href=""><i data-aos-duration="1000" data-aos="zoom-in"
                                        class="fa-brands fa-telegram text-light"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- header body -->
        <div class="header-body section-padding">
            <div class="container">
                <div class="col-4 col-sm-6 d-flex align-items-center justify-content-center">
                    <div data-aos-duration="1200" data-aos="fade-right" class="logo bg-dark-subtle">
                        <a href="">
                            <img class="img-fluid"
                                src="../images/hadikabbani_logo_cartoon_character_beautiful4k_have_color_red_b_d97df318-54a8-4a4e-b36b-84391f8d630f.png"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="header-last-part mt-4">
            <div class="container pg-header">
                <div class="links p-4 d-flex justify-content-center align-items-center">
                    <a class="fs-6 text-uppercase main-color text-decoration-none" href="../index.php">Home</a>
                    <div class="skew-line me-2 ms-2"></div>
                    <a class="fs-6 text-uppercase main-color text-decoration-none" href="">SIGNUP</a>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start hero  -->
    <section class="login section-padding">
        <div class="container">
            <div class="w-100 row pg-header p-5 ">
                <?php
                if ($check_inputs) {
                    echo '<div class="alert alert-danger" role="alert"> all input fields are required </div>';
                }
                if ($result) {
                    echo '<div class="alert alert-success" role="alert"> account created </div>';
                }
                if ($check_email) {
                    echo '<div class="alert alert-danger" role="alert"> email already exist </div>';
                }
                ?>
                <form class="d-flex flex-column align-items-center justify-content-center" method="post"
                    action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="row w-100">
                        <div class="col-6 ps-1 ">
                            <input type="text" class="form-control my-2" placeholder="First name" name="fname"
                                aria-label="First name">
                        </div>
                        <div class="col-6 p-0">
                            <input type="text" class="form-control my-2" placeholder="Last name" name="lname"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="form-floating mb-3 col-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating col-12">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <input class="btn btn-outline-secondary mt-4 w-75" type="submit" name="singup" id="Login"
                        value="signup">
                </form>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <p class="secondary-color fs-5 me-2 m-0">or</p>
                    <a class="signup text-decoration-none secondary-color fs-4" href="login.php"> login</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero    -->
    <!-- footer -->
    <footer class="section-padding">
        <div class="container pg-secondary">
            <div class="row mb-5 p-5">
                <div
                    class="col-12 col-lg-4 mb-5 ps-lg-3 d-flex flex-column align-items-center align-items-lg-start justify-content-center justify-content-lg-start">
                    <div class="footer-logo">
                        <img class="img-fluid mb-3" data-aos="flip-left" data-aos-duration="500"
                            src="../images/second-footer-logo.png" alt="" />
                    </div>
                    <p data-aos="fade-up" data-aos-duration="500" class="text-light">
                        Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <div class="footer-icons">
                        <ul class="list-unstyled m-0 d-flex justify-content-between">
                            <li data-aos="fade-up" data-aos-duration="500">
                                <a href=""><i class="fa-brands fa-facebook-f fs-2 text-light"></i></a>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <a href=""><i class="fa-brands fa-linkedin-in fs-2 text-light"></i></a>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="700">
                                <a href="">
                                    <i class="fa-brands fa-twitter fs-2 text-light"> </i></a>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="800">
                                <a href=""><i class="fa-brands fa-youtube fs-2 text-light"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-5 ps-lg-5">
                    <h4 class="secondary-color text-uppercase mb-5 text-light" data-aos="fade-up"
                        data-aos-duration="500">
                        Company
                    </h4>
                    <div class="footer-links">
                        <ul
                            class="list-unstyled d-flex justify-content-between flex-wrap flex-lg-column flex-lg-nowrap m-0">
                            <li class="p-1" data-aos="fade-up" data-aos-duration="500">
                                <a class="text-decoration-none fw-bold text-light" href="../index.php">HOME
                                </a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="600">
                                <a class="text-decoration-none fw-bold text-light" href="">ABOUT US</a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="700">
                                <a class="text-decoration-none fw-bold text-light" href="">BOOKS
                                </a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="800">
                                <a class="text-decoration-none fw-bold text-light" href="">EBOOKS
                                </a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="900">
                                <a class="text-decoration-none fw-bold text-light" href="">NEW RELEASE</a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="1000">
                                <a class="text-decoration-none fw-bold text-light" href="./contact.html">CONTACT US</a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="1100">
                                <a class="text-decoration-none fw-bold text-light" href="">BLOG</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 footer-third-col">
                    <h4 class="secondary-color text-uppercase mb-5 text-light" data-aos="fade-up"
                        data-aos-duration="500">
                        Importent Links
                    </h4>
                    <div class="footer-links important-links">
                        <ul
                            class="list-unstyled d-flex justify-content-between flex-wrap flex-lg-column flex-lg-nowrap m-0">
                            <li class="p-1" data-aos="fade-up" data-aos-duration="1200">
                                <a class="text-decoration-none fw-bold text-light" href="">Privacy Policy</a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="900">
                                <a class="text-decoration-none fw-bold text-light" href="">FAQs</a>
                            </li>
                            <li class="p-1" data-aos="fade-up" data-aos-duration="600">
                                <a class="text-decoration-none fw-bold text-light" href="">Terms of Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="500"
                    class="col-12 mt-5 pt-3 overflow-hidden d-flex flex-row justify-content-between align-items-center">
                    <p class="text-light">&copy; 2022 Arihant. All Rights Reserved.</p>
                    <p class="text-light">
                        <span class="text-light">Privacy </span>| Terms of Service
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>