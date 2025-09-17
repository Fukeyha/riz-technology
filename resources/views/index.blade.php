<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aitality Credentials</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/slick.min.css">
    <link rel="stylesheet" href="./assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="./assets/css/utility.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <style>
        .nav-link {
            color: gray !important;
        }

        .home-banner {
            background: url('./assets/images/banner/home-banner.jpg') no-repeat center center/cover;
            color: white;
            height: auto;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class id="smooth-wrapper">
        <div class="preloader">
            <div class="logo-loader d-flex gap-4 align-items-end">
                <div class="d-flex gap-3">
                    <img src="./assets/images/shape/icon-logo.svg" alt class="small-logo" style="width:80px;">
                    <img src="./assets/images/shape/Loader.jpg" alt style="width:250px;">
                </div>
                <div class="loader-dots d-flex gap-2">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>

        <div id="smooth-content">
            <header>
                <nav class="navbar navbar-expand-lg bg-body-white">
                    <div class="container p-3">
                        <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/Riz-Logo-01.png') }}"
                                alt></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto gap-3 mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#problems-solutions">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#how-it-works">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#features">Why Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#industries">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#roadmap">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">Team</a>
                                </li>

                            </ul>

                            <a class="main-btn">
                                <span>
                                    Contact us</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </header>

            <main>
                <section class="home_banner pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{ asset('assets/img/background-image-2.png') }}" alt="Card image"
                                            class="img-fluid main-bg-img mb-3">
                                <h1>
                                    <span class="font1">Empowering Businesses</span> <br>
                                    <span class="font2">Through Digital Transformation</span>
                                </h1>

                                <p class="pt-2">At RIZ Technologies, we distinguish ourselves through our extensive
                                    range of IT
                                    solutions and
                                    advanced technologies. Our exceptional offerings include cloud computing,
                                    cybersecurity, data analytics, and digital transformation, all customized to support
                                    business growth.</p>

                                
                                <div class="d-flex justify-content-center gap-4 pt-5">
                                    <a href="#" class="btn main-btn">Get Started</a>
                                    <a href="#" class="btn btn-outline-light-custom">Learn More</a>
                                </div>
                            </div>

                        </div>
                </section>
                <section class="why_us pt-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Section Heading -->
                            <div class="col-12 text-center mt-5 pt-5">
                                <h3>Why Us</h3>
                                <h2 class="pt-3">Transforming IT Into</h2>
                                <h2 class="">An Accessible Digital Format</h2>
                            </div>
                        </div>

                        <!-- Cards Row -->
                        <div class="row justify-content-center pt-4 p-5 ">
                            <div class="col-md-3 col-sm-6 pt-3">
                                <div class="custom-card h-100">
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-1.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="mb-3">Cost- <br> Effectiveness</h3>
                                            <p>Our diverse selection of products comes with budget-friendly solutions,
                                                all designed to enhance your business operations.
                                                growth, ensuring a secure investment for your business.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 pt-3">
                                <div class="custom-card h-100 bg-white text-dark">
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-2.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="mb-3 text-dark">Innovative<br> Technology</h3>
                                            <p>We stay current with
                                                market trends to ensure
                                                our products and systems remain innovative and
                                                efficient. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-6 pt-3">
                                <div class="custom-card h-100">
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-3.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="mb-3">Industry <br>Expertise</h3>
                                            <p>Our extensive experience
                                                in doing business with
                                                government, banking, and large corporate sectors,
                                                including successful.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-3 col-sm-6 pt-3">
                                <div class="custom-card h-100">
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-4.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="mb-3">Scalability</h3>
                                            <p>Our secure and scalable 
services ensure you receive the best value for your 
investment as your business grows. Whether you need to add more users, increase storage capacity.
, or upgrade your software, our solutions can easily accommodate your evolving needs.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




            </main>


        </div>
    </div>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/ScrollTrigger.min.js"></script>
    <script src="./assets/js/smooth.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>
