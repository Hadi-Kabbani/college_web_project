<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <title>Book Store</title>
</head>

<body>
  <header class="">
    <!-- top bar -->
    <div class="header-top-bar">
      <div class="container pg-main p-2 ps-md-5 pe-md-5 ps-sm-1 pe-sm-1">
        <div class="d-flex align-items-center justify-content-between">
          <div class="phone-container d-flex">
            <div class="phone-icon me-1">
              <i data-aos-duration="1000" data-aos="zoom-in" class="fa-solid fa-phone text-light"></i>
            </div>
            <a data-aos-duration="1000" data-aos="zoom-in" class="text-light m-0 text-decoration-none" href="">+91
              8374902234</a>
          </div>
          <div class="top-bar-icons">
            <ul class="list-unstyled d-flex m-0">
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
    <!-- end top bar -->
    <!-- header body -->
    <div class="header-body section-padding">
      <div class="container ps-md-5 pe-md-5 ps-sm-0 pe-sm-0">
        <div class="row d-flex align-items-center justify-content-between justify-md-content-center">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            <div data-aos-duration="1200" data-aos="fade-right" class="logo bg-dark-subtle">
              <a href="login/profile.php">
                <img class="img-fluid"
                  src="images/hadikabbani_logo_cartoon_character_beautiful4k_have_color_red_b_d97df318-54a8-4a4e-b36b-84391f8d630f.png"
                  alt="" />
              </a>
            </div>
          </div>
          <div class="col-lg-5 col-md-10 col-sm-10 col-9">
            <form action="">
              <div class="input-group m-0">
                <input data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control"
                  placeholder="Search Books" aria-label="Username" aria-describedby="basic-addon1" />
                <span data-aos-duration="1000" data-aos="fade-up" class="input-group-text" id="basic-addon1"><i
                    class="fa-solid fa-magnifying-glass"></i></span>
              </div>
            </form>
          </div>
          <div class="col-lg-5 col-md-12 col-md-1 col-sm-12 col-12">
            <div class="information">
              <ul class="list-unstyled d-flex align-items-center justify-content-between m-0 mt-sm-3 mt-lg-0 mt-3">
                <li>
                  <a data-aos-duration="1000" data-aos="fade-up"
                    class="border-end pe-3 d-flex align-items-center fs-6 text-uppercase main-color text-decoration-none"
                    href="login/login.php">
                    <i class="fa-solid fa-person me-2"></i> Account
                  </a>
                </li>

                <li>
                  <a data-aos-duration="1000" data-aos="fade-up"
                    class="border-end pe-3 d-flex align-items-center fs-6 text-uppercase main-color text-decoration-none"
                    href="">
                    <i class="fa-solid fa-cart-shopping me-2"></i>Cart(0$)
                  </a>
                </li>

                <li>
                  <a data-aos-duration="1000" data-aos="fade-up"
                    class="d-flex align-items-center fs-6 text-uppercase main-color text-decoration-none" href="">
                    <i class="fa-regular fa-heart me-2"></i> WishList
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header body -->
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container d-flex flex-column justify-content-center align-items-center border-3 border-top">
        <button class="navbar-toggler align-self-start mt-sm-3 mt-3 mt-lg-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-holder">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul
              class="navbar-nav list-unstyled d-flex align-items-center justify-content-center m-0 p-0 pt-lg-1 pt-sm-3">
              <li>
                <a data-aos="zoom-in-up" data-aos-duration="1000"
                  class="nav-link d-flex align-items-center text-uppercase main-color text-decoration-none"
                  href="">Home</a>
              </li>

              <li>
                <a data-aos="zoom-in-up" data-aos-duration="1000"
                  class="nav-link d-flex align-items-center text-uppercase main-color text-decoration-none"
                  href="Pages/about-us.html">About US</a>
              </li>

              <li>
                <a data-aos="zoom-in-up" data-aos-duration="1000"
                  class="nav-link d-flex align-items-center text-uppercase main-color text-decoration-none" href="Pages/books.html
                  ">Books</a>
              </li>

              <li>
                <a data-aos="zoom-in-up" data-aos-duration="1000"
                  class="nav-link d-flex align-items-center text-uppercase main-color text-decoration-none"
                  href="Pages/new-release.html">New Release</a>
              </li>

              <li>
                <a data-aos="zoom-in-up" data-aos-duration="1000"
                  class="nav-link d-flex align-items-center text-uppercase main-color text-decoration-none"
                  href="Pages/contact.html">Contact US</a>
              </li>

              <li>
                <a data-aos="zoom-in-up" data-aos-duration="1000"
                  class="nav-link d-flex align-items-center text-uppercase main-color text-decoration-none"
                  href="">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end header -->

  <!--  start hero  -->
  <section class="hero section-padding">
    <div class="container">
      <div class="row ps-3 ps-lg-3 ps-sm-0 p-0 d-flex flex-column-reverse flex-lg-row align-items-center">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12">
          <h1 data-aos="fade-up-right" data-aos-duration="250" class="text-capitalize main-color fs-1">
            ipsum dolor si
          </h1>
          <p data-aos="fade-up-right" data-aos-duration="500" class="main-color lh-lg main-color">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
            feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus
            ut magna velit eleifend. Amet, quis urna, a eu.
          </p>
          <a data-aos="fade-up-right" data-aos-duration="750"
            class="btn mt-3 mb-5 main-color pt-2 pb-2 ps-4 pe-4 text-capitalize main-color btn btn-outline-secondary"
            href="">Read More <i class="ms-1 fa-solid fa-arrow-right"></i></a>

          <div data-aos="fade-up-right" data-aos-duration="1000"
            class="slider ms-2 mb-4 mb-lg-0 d-flex justify-content-between">
            <div class="me-3"></div>
            <div class="me-3"></div>
            <div class="me-3"></div>
            <div class="me-3"></div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-md-12 col-sm-12 p-0 d-flex justify-content-end">
          <img data-aos-duration="1400" data-aos="fade-left" class="img-fluid" src="images/Mask Group.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- end hero -->
  <!-- start catagories -->
  <section class="catagories section-padding">
    <div class="container ps-4 pe-4 pt-2">
      <div class="top-catagories">
        <div class="row">
          <div class="col-12 col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex align-items-center mb-3">
              <span data-aos-duration="700" data-aos="fade-down-right" class="category-line me-3"></span>
              <p data-aos-duration="700" data-aos="fade-down-right" class="secondary-color m-0">
                Categories
              </p>
            </div>
            <h1 data-aos-duration="1000" data-aos="fade-down-right"
              class="main-color fw-bold text-lg-left text-md-left text-sm-left">
              Explore our Top Categories
            </h1>
            <div class="catagorie-icons mb-md-0 d-flex mt-5 justify-content-md-start justify-content-between">
              <div data-aos-duration="400" data-aos="fade-left"
                class="left-arrow me-md-4 mb-3 m-md-0 d-flex align-items-center justify-content-center">
                <i class="main-color fa-solid fa-arrow-left"></i>
              </div>
              <div data-aos="fade-right" data-aos-duration="400"
                class="right-arrow d-flex align-items-center justify-content-center">
                <i class="main-color fa-solid fa-arrow-right"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-md-6 col-sm-12">
            <p class="main-color" data-aos="fade-down-left" data-aos-duration="1000">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
              feugiat amet, libero ipsum enim pharetra hac. Urna commodo,
              lacus ut magna velit eleifend. Amet, quis urna, a eu.Lorem ipsum
              dolor sit amet, consectetur adipiscing elit. Sed eu feugiat
              amet, libero ipsum ipsum dolor sit amet, consectetur adipiscing
              elit. Sed eu feugiat amet, libero ipsum..
            </p>
          </div>
        </div>
      </div>
      <div class="body-catagories">
        <div class="row mt-5">
          <div class="col-12 col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center">
            <div class="card-img">
              <img data-aos-duration="1000" data-aos="flip-up" data-aos-duration="1000" class="img-fluid"
                src="images/Rectangle 11.png" alt="" />
            </div>
            <h4 data-aos="fade-up" class="main-color mt-4 mb-3">
              Higher Education
            </h4>
            <p data-aos="fade-up" class="text-center main-color">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
              feugiat amet, libero ipsum enim pharetra hac. Urna commodo,
              lacus ut mat,
            </p>
          </div>
          <div class="col-12 col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center">
            <div class="card-img">
              <img data-aos-duration="1000" data-aos="flip-up" class="img-fluid" src="images/books-study.png" alt="" />
            </div>
            <h4 data-aos="fade-up" class="main-color mt-4 mb-3">
              Management Books
            </h4>
            <p data-aos="fade-up" class="text-center main-color">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
              feugiat amet, libero ipsum enim pharetra hac. Urna commodo,
              lacus ut mat,
            </p>
          </div>
          <div class="col-12 col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
            <div class="card-img">
              <img data-aos-duration="1000" data-aos="flip-up" class="img-fluid" src="images/desk-books.png" alt="" />
            </div>
            <h4 data-aos="fade-up" class="main-color mt-4 mb-3">
              Engineering Books
            </h4>
            <p data-aos="fade-up" class="text-center main-color">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
              feugiat amet, libero ipsum enim pharetra hac. Urna commodo,
              lacus ut mat,
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <a data-aos="zoom-in" data-aos-duration="1000"
          class="btn mt-3 mb-2 main-color pt-2 pb-2 ps-4 pe-4 text-capitalize main-color btn btn-outline-secondary"
          href="">View More <i class="ms-1 fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>
  <!-- end category -->
  <!-- start ebook -->
  <section class="ebook section-padding">
    <div class="container">
      <div class="row d-flex align-items-center flex-row flex-lg-row flex-column-reverse">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-5 pb-5 ps-5 pe-5 pt-lg-3 pb-lg-4 ps-lg-4 pe-lg-3">
          <div class="d-flex align-items-center mb-3">
            <span data-aos="zoom-in-left" data-aos-duration="700" class="category-line me-3"></span>
            <p data-aos="zoom-in-left" data-aos-duration="700" class="secondary-color m-0">
              ebook
            </p>
          </div>
          <h1 data-aos="fade-right" data-aos-duration="1000"
            class="main-color fw-bold text-lg-left text-md-left text-sm-left">
            Access, Read, Practice & Engage with Digital Content (eBook)
          </h1>
          <p data-aos="fade-right" data-aos-duration="1200" class="main-color">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
            feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus
            ut magna velit eleifend. Amet, quis urna, a eu.Lorem ipsum dolor
            sit amet, consectetur adipiscing elit.
          </p>
          <form data-aos="zoom-in" data-aos-duration="1500" action="">
            <div class="input-group mb-3">
              <input type="email" class="form-control p-2" placeholder="Enter your email address"
                aria-label="Recipient's username" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <button class="rounded-end text-light input-group-text rounded-0 pg-secondary pt-2 pb-2 ps-5 pe-5"
                  id="basic-addon2">
                  Login
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 p-0">
          <div class="ebook-img">
            <img data-aos="flip-right" data-aos-duration="1000" class="img-fluid"
              src="images/pexels-olha-ruskykh-5984619 1.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end ebook -->
  <!-- start offers -->
  <section class="offers section-padding">
    <div class="container border-bottom">
      <p data-aos-duration="600" data-aos="zoom-in" class="text-capitalize highlight text-center">
        Some quality items
      </p>
      <div class="row d-flex align-items-center">
        <div class="col-4 col-lg-4 col-sm-3" style="height: 1px; background-color: #e0e0e0"></div>
        <div class="col-4 col-lg-4 col-sm-6 text-center">
          <h1 data-aos-duration="1000" data-aos="zoom-in" class="main-color fw-bold">
            New Release Books
          </h1>
        </div>
        <div class="col-4 col-lg-4 col-sm-3" style="height: 1px; background-color: #e0e0e0"></div>
      </div>
      <div class="row pt-5 border-bottom pb-3">
        <div class="col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center">
          <div data-aos="flip-up" data-aos-duration="1000" class="card p-3">
            <img data-aos="flip-up" data-aos-duration="1000" class="img-fluid" src="images/book4.png" alt="" />
            <a class="m-0">add to cart</a>
          </div>
          <h4 data-aos="fade-up" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000"
            class="mt-3 text-center main-color">
            Simple way of piece life
          </h4>
          <p data-aos="fade-up" data-aos-duration="750" class="highlight">
            Armor Ramsey
          </p>
          <p data-aos="fade-up" data-aos-duration="500" class="book-price secondary-color">
            $ 40.00
          </p>
        </div>
        <div class="col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center">
          <div data-aos="flip-up" data-aos-duration="1000" class="card p-3">
            <img data-aos="flip-up" data-aos-duration="1000" class="img-fluid" src="images/book2.png" alt="" />
            <a class="m-0">add to cart</a>
          </div>
          <h4 data-aos="fade-up" data-aos-duration="1000" class="mt-3 text-center main-color">
            Great travel at desert
          </h4>
          <p data-aos="fade-up" data-aos-duration="750" class="highlight">
            Sanchit Howdy
          </p>
          <p data-aos="fade-up" data-aos-duration="500" class="book-price secondary-color">
            $ 38.00
          </p>
        </div>
        <div class="col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center">
          <div data-aos="flip-up" data-aos-duration="1000" class="card p-3">
            <img data-aos="flip-up" data-aos-duration="1000" class="img-fluid" src="images/book3.png" alt="" />
            <a class="m-0">add to cart</a>
          </div>
          <h4 data-aos="fade-up" data-aos-duration="1000" class="mt-3 text-center main-color">
            The lady beauty Scarlett
          </h4>
          <p data-aos="fade-up" data-aos-duration="750" class="highlight">
            Arthur Doyle
          </p>
          <p data-aos="fade-up" data-aos-duration="500" class="book-price secondary-color">
            $ 45.00
          </p>
        </div>
        <div class="col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center">
          <div data-aos="flip-up" data-aos-duration="1000" class="card p-3">
            <img data-aos="flip-up" data-aos-duration="1000" class="img-fluid" src="images/book4.png" alt="" />
            <a class="m-0">add to cart</a>
          </div>
          <h4 data-aos="fade-up" data-aos-duration="1000" class="mt-3 text-center main-color">
            Once upon a time
          </h4>
          <p data-aos="fade-up" data-aos-duration="750" class="highlight">
            Klien Marry
          </p>
          <p data-aos="fade-up" data-aos-duration="500" class="book-price secondary-color">
            $ 35.00
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex pt-4 align-items-center">
        <div class="col-12 col-sm-8 col-md-8 col-lg-7 mb-3 mb-sm-0 pe-md-5 pe-lg-3">
          <div class="d-flex justify-content-sm-end justify-content-center">
            <div class="slider mb-lg-0 d-flex">
              <div class="me-3"></div>
              <div class="me-3"></div>
              <div class="me-3"></div>
              <div class="me-3"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-5">
          <div class="books-link d-flex justify-content-sm-end justify-content-center">
            <a class="secondary-color text-decoration-none fw-bold" href="Pages/new-release.html">View all products<i
                class="ms-1 fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="book-feature section-padding">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <div class="book-feature-img">
            <img class="img-fluid" data-aos="flip-left" data-aos-duration="1000" src="images/book-feature.png" alt="" />
          </div>
        </div>
        <div class="col-12 col-md-6 pt-5 pb-5 pt-md-0 pb-md-0">
          <h1 data-aos="fade-up" data-aos-duration="500" class="main-color text-capitalize fw-bold mb-5">
            Featured book
          </h1>
          <div data-aos="fade-up" data-aos-duration="500" style="
                width: 100px;
                height: 3px;
                background-color: rgba(237, 85, 59, 1);
              "></div>
          <p data-aos="fade-up" data-aos-duration="500" class="para-color mt-1">
            By Timbur Hood
          </p>
          <h3 data-aos="fade-up" data-aos-duration="500" class="main-color">
            Birds gonna be happy
          </h3>
          <p data-aos="fade-up" data-aos-duration="500" class="para-color mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
            feugiat amet, libero ipsum enim pharetra hac.
          </p>
          <p data-aos="fade-up" data-aos-duration="500" class="secondary-color fw-bold mt-4">
            $ 45.00
          </p>
          <a data-aos="fade-up" data-aos-duration="500"
            class="btn mt-5 main-color pt-2 pb-2 ps-4 pe-4 text-capitalize main-color btn btn-outline-secondary"
            href="">View more <i class="ms-1 fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <section class="offer section-padding">
    <div class="container p-5">
      <div class="row rounded-4 p-5 d-flex flex-lg-row flex-column-reverse align-items-center justify-content-between"
        style="background-color: rgba(252, 235, 234, 1)">
        <div class="col-12 col-lg-6 p-0">
          <h1 class="fw-bold main-color mb-3 mb-lg-5" data-aos="fade-up" data-aos-duration="500">
            All books are 50% off now! Don't miss such a deal!
          </h1>
          <p class="main-color" data-aos="fade-up" data-aos-duration="500">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
            feugiat amet, libero ipsum enim pharetra hac.
          </p>
          <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="500">
              <div class="col-3 d-flex flex-column align-items-center align-items-lg-start p-0">
                <div class="countdown-item secondary-color fw-bold fs-2" id="days">
                  00
                </div>
                <div class="countdown-label fw-bold fs-6">DAYS</div>
              </div>
              <div class="col-3 d-flex flex-column align-items-center align-items-lg-start p-0">
                <div class="countdown-item secondary-color fw-bold fs-2" id="hours">
                  00
                </div>
                <div class="countdown-label fw-bold fs-6">HOUR</div>
              </div>
              <div class="col-3 d-flex flex-column align-items-center align-items-lg-start p-0">
                <div class="countdown-item secondary-color fw-bold fs-2" id="minutes">
                  00
                </div>
                <div class="countdown-label fw-bold fs-6">MINT</div>
              </div>
              <div class="col-3 d-flex flex-column align-items-center align-items-lg-start p-0">
                <div class="countdown-item secondary-color fw-bold fs-2" id="seconds">
                  00
                </div>
                <div class="countdown-label fw-bold fs-6">SEC</div>
              </div>
            </div>
          </div>
          <div class="mt-5 d-flex justify-content-center justify-content-lg-start">
            <div class="slider mb-lg-0 d-flex" data-aos="fade-up" data-aos-duration="500">
              <div class="me-3"></div>
              <div class="me-3"></div>
              <div class="me-3"></div>
              <div class="me-3"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 p-0">
          <img class="img-fluid" data-aos="flip-left" data-aos-duration="1000" src="images/offer.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="subscribe section-padding">
    <div class="container">
      <div class="row p-5 d-flex align-items-center">
        <div class="col-12 col-lg-6">
          <h1 class="fw-bold fs-1 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="500">
            Subscribe to our newsletter
          </h1>
        </div>
        <div class="col-12 col-lg-6">
          <p class="para-color" data-aos="fade-up" data-aos-duration="500">
            Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit
            amet, consectetur. Elit adipiscing enim pharetra hac.
          </p>
          <form action="" class="subscribe-form border-bottom border-4">
            <div data-aos="flip-left" data-aos-duration="1000" class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Enter your email addresss here"
                aria-label="Recipient's username" aria-describedby="basic-addon2" />
              <button class="border-none input-group-text secondary-color" id="basic-addon2">
                SEND <i class="fa-brands fa-telegram ms-2"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="biogs section-padding">
    <div class="container p-0">
      <h3 class="text-center mb-4 fw-bold" data-aos="fade-up" data-aos-duration="500">
        Read our many blogs
      </h3>
      <div class="row row-gap-3 pb-5 d-flex justify-content-between">
        <div class="biogs-col col-12 col-md-6 p-0 pe-0">
          <div class="biogs-image" data-aos="fade-up" data-aos-duration="500">
            <img class="img-fluid" src="images/Blog post Copy1.png" alt="" />
          </div>
          <a href="#" class="readme">Read more</a>
          <div class="layout"></div>
          <div class="biogs-content">
            <h4>Learn about this week's top author</h4>
            <p>
              Jump start your book reading by quickly check through the
              popular book categories...
            </p>
          </div>
        </div>
        <div class="biogs-col col-12 col-md-6 p-0 ps-0">
          <div class="biogs-image" data-aos="fade-up" data-aos-duration="500">
            <img class="img-fluid" src="images/Blog post Copy2.png" alt="" />
          </div>
          <a href="#" class="readme">Read more</a>
          <div class="layout"></div>
          <div class="biogs-content">
            <h4>Why we celebrate readers</h4>
            <p>
              Jump start your book reading by quickly check through the
              popular book categories...
            </p>
          </div>
        </div>
        <div class="biogs-col col-12 col-md-6 p-0 pe-0">
          <div class="biogs-image" data-aos="fade-up" data-aos-duration="500">
            <img class="img-fluid" src="images/Blog post Copy3.png" alt="" />
          </div>
          <a href="#" class="readme">Read more</a>
          <div class="layout"></div>
          <div class="biogs-content">
            <h4>Toddlers can also read</h4>
            <p>
              Jump start your book reading by quickly check through the
              popular book categories...
            </p>
          </div>
        </div>
        <div class="biogs-col col-12 col-md-6 p-0 ps-0">
          <div class="biogs-image" data-aos="fade-up" data-aos-duration="500">
            <img class="img-fluid" src="images/Blog post Copy4.png" alt="" />
          </div>
          <a href="#" class="readme">Read more</a>
          <div class="layout"></div>
          <div class="biogs-content">
            <h4>Get started on your game</h4>
            <p>
              Jump start your book reading by quickly check through the
              popular book categories...
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="section-padding">
    <div class="container" style="
          background: linear-gradient(
            90deg,
            rgba(255, 230, 230, 0.52) 0%,
            rgba(245, 255, 254, 0.52) 13.33%,
            rgba(252, 243, 255, 0.52) 54.58%,
            rgba(255, 244, 230, 0.52) 99.86%
          );
        ">
      <div class="row mb-5 p-5">
        <div
          class="col-12 col-lg-4 mb-5 ps-lg-3 d-flex flex-column align-items-center align-items-lg-start justify-content-center justify-content-lg-start">
          <div class="footer-logo">
            <img class="img-fluid mb-3" data-aos="flip-left" data-aos-duration="500" src="images/footer-logo.png"
              alt="" />
          </div>
          <p data-aos="fade-up" data-aos-duration="500">
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
        <div class="col-12 col-lg-3 mb-5 ps-lg-5">
          <h4 class="secondary-color text-uppercase mb-5" data-aos="fade-up" data-aos-duration="500">
            Company
          </h4>
          <div class="footer-links">
            <ul class="list-unstyled d-flex justify-content-between flex-wrap flex-lg-column flex-lg-nowrap m-0">
              <li class="p-1" data-aos="fade-up" data-aos-duration="500">
                <a class="text-decoration-none text-dark fw-bold" href="">HOME
                </a>
              </li>
              <li class="p-1" data-aos="fade-up" data-aos-duration="600">
                <a class="text-decoration-none text-dark fw-bold" href="">ABOUT US</a>
              </li>
              <li class="p-1" data-aos="fade-up" data-aos-duration="700">
                <a class="text-decoration-none text-dark fw-bold" href="">BOOKS
                </a>
              </li>
              <li class="p-1" data-aos="fade-up" data-aos-duration="800">
                <a class="text-decoration-none text-dark fw-bold" href="">EBOOKS
                </a>
              </li>
              <li class="p-1" data-aos="fade-up" data-aos-duration="900">
                <a class="text-decoration-none text-dark fw-bold" href="Pages/new-release.html">NEW RELEASE</a>
              </li>
              <li class="p-1" data-aos="fade-up" data-aos-duration="1000">
                <a class="text-decoration-none text-dark fw-bold" href="">CONTACT US</a>
              </li>
              <li class="p-1" data-aos="fade-up" data-aos-duration="1100">
                <a class="text-decoration-none text-dark fw-bold" href="">BLOG</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-5 footer-third-col">
          <h4 class="secondary-color text-uppercase mb-5" data-aos="fade-up" data-aos-duration="500">
            Latest news
          </h4>
          <div class="row d-flex">
            <div class="col-4">
              <img class="img-fluid" data-aos="fade-right" data-aos-duration="500" src="images/footer-img1.png"
                alt="" />
            </div>
            <div class="col-8" data-aos="fade-left" data-aos-duration="500">
              <h5>Nostrud exercitation</h5>
              <p>
                Nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
              </p>
              <ul>
                <li>15 April 2022</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <img class="img-fluid" data-aos="fade-right" data-aos-duration="500" src="images/footer-img2.png"
                alt="" />
            </div>
            <div class="col-8" data-aos="fade-left" data-aos-duration="500">
              <h5>Nostrud exercitation</h5>
              <p>
                Nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
              </p>
              <ul>
                <li>15 April 2022</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="500"
        class="ps-5 pe-5 pb-5 overflow-hidden mb-5 d-flex flex-row justify-content-between align-items-center">
        <p>&copy; 2022 Arihant. All Rights Reserved.</p>
        <p><span class="secondary-color">Privacy </span>| Terms of Service</p>
      </div>
    </div>
  </footer>

  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/script.js"></script>
</body>

</html>