<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riz technology</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/slick.min.css">
    <link rel="stylesheet" href="./assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="./assets/css/utility.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
</head>

<body>
    <div class id="smooth-wrapper">

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
                                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#why-us">Why Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#products">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Team</a>
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
                <section class="why_us pt-5 ">
                    <div class="container bg-card">
                        <div class="row justify-content-center">
                            <!-- Section Heading -->
                            <div class="col-12 text-center mt-5 pt-5">
                                <h3 class="text-white">Why Us</h3>
                                <h2 class="pt-3">Transforming IT Into</h2>
                                <h2 class="">An Accessible Digital Format</h2>
                            </div>
                        </div>

                        <!-- Cards Row -->
                        <div class="row justify-content-center pt-4 p-5 ">
                            <div class="col-md-3 col-sm-6 pt-3">
                                <div class="card h-100">
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-1.png') }}" alt="Card image card-image"
                                            class="img-fluid">
                                        <div>
                                            <h3 class="my-3">Cost- <br> Effectiveness</h3>
                                            <p>Our diverse selection of products comes with budget-friendly solutions,
                                                all designed to enhance your business operations.
                                                growth, ensuring a secure investment for your business.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 pt-3">
                                <div class="card h-100">
                                    <div class="card-body p-3">
                                        <div class="card-volume">
                                            <img src="{{ asset('assets/img/volume-shape.png') }}" alt="Card image "
                                                class="img-fluid mb-3">
                                        </div>
                                        <img src="{{ asset('assets/img/why-icon-2.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="my-3">Innovative<br> Technology</h3>
                                            <p>We stay current with
                                                market trends to ensure
                                                our products and systems remain innovative and
                                                efficient. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-6 pt-3">
                                <div class="card h-100">
                                    <div class="card-volume">
                                        <img src="{{ asset('assets/img/volume-shape.png') }}"
                                            alt="Card image  card-image" class="img-fluid mb-3">
                                    </div>
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-3.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="my-3">Industry <br>Expertise</h3>
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
                                <div class="card h-100">
                                    <div class="card-volume">
                                        <img src="{{ asset('assets/img/volume-shape.png') }}"
                                            alt="Card image  card-image" class="img-fluid mb-3">
                                    </div>
                                    <div class="card-body p-3">
                                        <img src="{{ asset('assets/img/why-icon-4.png') }}" alt="Card image"
                                            class="img-fluid mb-3">
                                        <div>
                                            <h3 class="my-3">Scalability</h3>
                                            <p>Our secure and scalable
                                                services ensure you receive the best value for your
                                                investment as your business grows. Whether you need to add more users,
                                                increase storage capacity.
                                                , or upgrade your software, our solutions can easily accommodate your
                                                evolving needs.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about_section py-5 mt-5 position-relative">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 aboutImage position-relative">
                                <img src="{{ asset('assets/img/about-img.png') }}" alt="Card image"
                                    class="img-fluid p-3" style="border: 3px solid #6e05ff; border-radius: 8px; ">
                            </div>
                            <div class="col-lg-6 px-4">
                                <h5 class="text-purple font-k-l">About US</h5>
                                <h3 class="text-dark ">Committed To</h3>
                                <h2 class="text-dark font-k-b text-bold">Providing Quality</h2>
                                <p>Every story is unique, and here is ours.</p>
                                <h5>The beginning</h5>
                                <p>
                                    The company was established by experienced professionals with extensive expertise
                                    and
                                    diverse backgrounds in Information Technology. The team is made up of young, highly
                                    qualified business graduates and engineers from prestigious universities around the
                                    globe.
                                </p>
                                <a href="#" class="btn main-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="stats_section py-4" style="background: linear-gradient(90deg, #7711f4, #a048c0);">
                    <div class="container">
                        <div class="row text-start text-white my-3 mt-3 py-3">
                            <div class="col-md-3 px-4 position-relative">
                                <h3 class="font-k-b text-white">25+ Years</h3>
                                <p class="mb-0 text-uppercase">Proven Track Record</p>
                                <div class="vertical-line"></div>
                            </div>

                            <div class="col-md-3 px-4 position-relative">
                                <h3 class="font-k-b  text-white">99%</h3>
                                <p class="mb-0 text-uppercase">Customer Satisfaction</p>
                                <div class="vertical-line"></div>
                            </div>

                            <div class="col-md-3  ps-3 position-relative">
                                <h3 class="font-k-b  text-white">3000+ Projects</h3>
                                <p class="mb-0 text-uppercase">We Have Completed</p>
                                <div class="vertical-line"></div>
                            </div>

                            <div class="col-md-3 ps-5 position-relative">
                                <h3 class="font-k-b  text-white">3 Mins</h3>
                                <p class="mb-0 text-uppercase">Average Answer Time</p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="services_section py-5">
                    <div class="container">
                        <div class="col-12 text-center mt-5 pt-3">
                            <h2 class="text-dark">Our <span class="font-k-b">Services</span></h2>
                        </div>
                        <div class="row justify-content-center mt-5 pt-5">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 h-100">
                                    <div class="card-inner bg-white">
                                        <div class="position-relative text-center">
                                            <img src="{{ asset('assets/img/services-img-1.png') }}" alt="Card image"
                                                class="card-img-top px-4 shadow-lg rounded-3">
                                        </div>
                                        <div class="card-body p-3">
                                            <h4>Managed Services</h4>
                                            <p>Free up your internal resources to focus on the business by letting us
                                                handle day to day support services, management, and monitoring of your
                                                IT.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 h-100">
                                    <div class="card-inner bg-white">
                                        <div class="position-relative text-center">
                                            <img src="{{ asset('assets/img/services-img-2.png') }}" alt="Card image"
                                                class="card-img-top px-4 shadow-lg rounded-3">
                                        </div>
                                        <div class="card-body p-3">
                                            <h4>IT Consulting & Advisory</h4>
                                            <p>The right technology, implemented properly, appropriately managed and
                                                monitored, can lead to significant
                                                gains in growth</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 h-100">
                                    <div class="card-inner bg-white">
                                        <div class="position-relative text-center">
                                            <img src="{{ asset('assets/img/services-img-3.png') }}" alt="Card image"
                                                class="card-img-top px-4 shadow-lg rounded-3">
                                        </div>
                                        <div class="card-body p-3">
                                            <h4>Cyber Security</h4>
                                            <p>Our experts can identify vulnerabilities, assess risks, and implement
                                                robust
                                                security measures to safeguard your systems and data.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-5 ">
                                    <button class="btn main-btn">View All</button>
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
