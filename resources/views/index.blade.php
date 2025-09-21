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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoE3H6CkzJr59p2y1C5V0pX1Lr9e4p6+Xo4S+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
        integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <div class id="smooth-wrapper">

        <div id="smooth-content">
            <header>
                <nav class="navbar navbar-expand-lg bg-body-white">
                    <div class="container p-3">
                        <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/Riz-Logo-01.png') }}" alt></a>
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
                                <h1 class="banner_text position-relative">
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
                        <div class="row justify-content-center mt-5 pt-5 slider">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 h-100">
                                    <div class="card-inner bg-white">
                                        <div class="position-relative text-center">
                                            <img src="{{ asset('assets/img/services-img-1.png') }}" alt="Card image"
                                                class="card-img-top px-4 shadow-sm rounded-3">
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
                                                class="card-img-top px-4 shadow-sm rounded-3">
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
                                            <img src="{{ asset('assets/img/services-img-3.png') }}" alt="Card image"
                                                class="card-img-top px-4 shadow-sm rounded-3">
                                        </div>
                                        <div class="card-body p-3">
                                            <h4 class="px-3">Cyber Security</h4>
                                            <p class="px-3">Our experts can identify vulnerabilities, assess risks,
                                                and implement
                                                robust
                                                security measures to safeguard your systems and data.</p>
                                            <a class="px-3" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 h-100">
                                    <div class="card-inner bg-white">
                                        <div class="position-relative text-center">
                                            <img src="{{ asset('assets/img/services-img-3.png') }}" alt="Card image"
                                                class="card-img-top px-4 shadow-sm rounded-3">
                                        </div>
                                        <div class="card-body p-3">
                                            <h4 class="px-3">Cyber Security</h4>
                                            <p class="px-3">Our experts can identify vulnerabilities, assess risks,
                                                and implement
                                                robust
                                                security measures to safeguard your systems and data.</p>
                                            <a class="px-3" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-5 ">
                            <button class="btn main-btn">View All</button>
                        </div>
                    </div>
                </section>
                <section class="process_section container position-relative">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="row align-items-center text-white g-4 position-relative">
                                <div class="col-md-3 text-start text-md-start">
                                    <h2 class="text-white">Our <br> <span class="font-k-b">Process</span></h2>
                                    <div class="separator"></div>
                                </div>
                                <div class="col-md-9 text-start text-md-start ps-4">
                                    <p>Our process of providing solutions for IT Technologies is straightforward and
                                        transparent. We start with a thorough analysis of your business needs and then
                                        design a customized solution. We implement it with minimal disruption to your
                                        operations and provide ongoing support and maintenance.</p>
                                </div>
                            </div>
                            <div class="row wave-row">
                                <div class="col-md-4 text-start text-md-start position-relative">
                                    <span class="process_number fs-4"> 01 </span>
                                    <h4 class="text-white">Analysis</h4>
                                    <p class="text-white">We analyze data and trends to provide actionable
                                        insights, optimize processes,
                                        and uncover growth opportunities, driving business success and
                                        innovation.</p>
                                </div>
                                <div class="col-md-4 text-start text-md-start pt-5 position-relative">
                                    <span class="process_number fs-4 "> 02 </span>
                                    <h4 class="text-white">Solution</h4>
                                    <p class="text-white">We provide customized solutions to address your
                                        unique business challenges as per your requirements, enhancing
                                        efficiency, driving growth, and fostering innovation.</p>
                                </div>
                                <div class="col-md-4 text-start text-md-start pt-4 position-relative">
                                    <span class="process_number fs-4 "> 03 </span>
                                    <h4 class="text-white">Implement</h4>
                                    <p class="text-white">We deliver seamless implementation of tailored
                                        solutions, ensuring smooth integration, optimized systems, and
                                        successful deployment for lasting impact.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
                <section class="partner_section my-5">
                    <div class=" text-center">
                        <h2 class="text-dark">Our <span class="font-k-b">Partners</span></h2>
                        <p class="px-5">Our credibility and professionalism are further enhanced by our reliable
                            partnerships <br> with several well-known brands and companies.</p>
                    </div>
                    <div class="container">
                        <div class="row partner_bg mt-5 pt-5">
                            <div class="col-lg-4 partner_column position-relative">
                                <img src="https://riztechnology.com/assets/images/partner/partner-1.png "
                                    class="img-fluid partner_img" alt="partner">
                                <img src="https://riztechnology.com/assets/images/partner/partner-2.png "
                                    class="img-fluid partner_img" alt="partner">
                                <img src="https://riztechnology.com/assets/images/partner/partner-3.png "
                                    class="img-fluid partner_img" alt="partner">
                                <img src="https://riztechnology.com/assets/images/partner/partner-4.png "
                                    class="img-fluid partner_img" alt="partner">

                            </div>
                            <div class="col-lg-4 position-relative">

                                <div class="partner_word"></div>
                            </div>
                            <div class="col-lg-4 partner_column2 position-relative">
                                <div class="partner4">
                                    <img src="https://riztechnology.com/assets/images/partner/partner-7.png "
                                        class="img-fluid" alt="partner">
                                </div>
                                <div class="partner5">
                                    <img src="https://riztechnology.com/assets/images/partner/partner-8.png "
                                        class="img-fluid partner_img" alt="partner">
                                </div>
                                <div class="partner6">
                                    <img src="https://riztechnology.com/assets/images/partner/partner-6.png "
                                        class="img-fluid" alt="partner">
                                </div>

                                <div class="partner12">
                                    <img src="https://riztechnology.com/assets/images/partner/partner-12.jpeg "
                                        class="img-fluid" alt="partner">
                                </div>


                            </div>
                        </div>
                    </div>

                </section>
                <section class="ceo_section py-5 mt-5 position-relative">
                    <div class="container">
                        <div class="row g-5 pt-5">
                            <div class="col-lg-7">
                                <div class="about_image">
                                    <img src="{{ asset('assets/img/ceo-img.png') }}" alt="Card image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h4 class="fs8 text-purple">CEO Message</h4>
                                <p class="my-3 position-relative text-justify text-dark"><i
                                        class="fa-solid fa-quote-left fs-2 text-purple"></i>

                                    The successful transformation of our business portfolio is critical to our future
                                    success. By
                                    implementing strategic changes and enhancing our management resources, we will
                                    diversify our profits
                                    and create a business structure that supports sustainable growth. Let us embrace
                                    this vision and
                                    advance with&nbsp;confidence.
                                    <i class="fa-solid fa-quote-right fs-2 text-purple position-absolute ms-1"></i>
                                </p>
                                <h3 class="mb-4 fw-bold text-dark"> Best Regards:</h3>
                                <p class="ceoSignature mb-3">MuhammadRizwan</p>
                                <h3 class="fs9 text-black fs-5 mt-2">Muhammad Rizwan</h3>
                                <p class="mt-2 text-dark"> Founder &amp; Ceo</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="blog_section py-5 mt-5">
                    <div class="container">
                        <h2 class="text-dark text-center">Latest <span class="font-k-b">Blogs</span></h2>
                        <div class="row justify-content-center align-items-center mt-5 pt-5 g-4">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 py-4">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/img/blog-image-1.jpg') }}" alt="Card image"
                                            class="card-img-top px-4">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Harnessing the Power of Virtualization in Pakistan’s
                                            IT...</h5>
                                        <p class="card-text">In the world of IT, innovation and productivity are
                                            paramount,...</p>
                                        <a href="http://"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 py-4">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/img/blog-image-2.jpg') }}" alt="Card image"
                                            class="card-img-top px-4">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Understanding Data Centers: The Foundation of the Digital
                                            World</h5>
                                        <p class="card-text">A data center is a dedicated facility where digital
                                            information...</p>
                                        <a href="http://"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-2 py-4">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/img/blog-image-3.jpg') }}" alt="Card image"
                                            class="card-img-top px-4">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Virtualization: Transforming Physical Machines into
                                            Virtual</h5>
                                        <p class="card-text">Virtualization is the process of converting a physical
                                            machine into...</p>
                                        <a href="http://"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="team_section py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center mt-5 pt-3">
                                <h2 class="text-dark">Our <span class="font-k-b">Team</span></h2>
                            </div>
                        </div>
                        <div class="row mt-5 pt-5">
                            <div class="col-lg-4">
                                <div class="team_container position-relative">
                                    <img src="{{ asset('assets/img/team-member-5.png') }}" class="img-fluid"
                                        alt="partner">
                                    <div class="team_member_info_container revert">
                                        <div class="team-member-info">
                                            <div class="">
                                                <h6 class="fs8 fw-bold text-purple">Muhammad Imran </h6>
                                                <p>Co-Founder, Pakistan</p>
                                            </div>
                                            <div class="social-icons">
                                                <a href="https://www.facebook.com/RizTechnology"><i
                                                        class="ri-facebook-fill"></i></a>
                                                <a href="https://twitter.com/MyCompanyTwitter"><i
                                                        class="ri-twitter-x-line"></i></a>
                                                <a href="https://www.instagram.com/riztechnology/"><i
                                                        class="ri-instagram-line"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-member-info-arrow revert">
                                            <img src="{{ asset('assets/img/team-arrow.png') }}" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="team_container position-relative">
                                    <img src="{{ asset('assets/img/team-member-2.png') }}" class="img-fluid"
                                        alt="partner">
                                    <div class="team_member_info_container revert">
                                        <div class="team-member-info">
                                            <div class="">
                                                <h6 class="fs8 fw-bold text-purple">Nadia Abrar</h6>
                                                <p>Country Manager, Dubai – United Arab Emirates</p>
                                            </div>
                                            <div class="social-icons">
                                                <a href="https://www.facebook.com/RizTechnology"><i
                                                        class="ri-facebook-fill"></i></a>
                                                <a href="https://twitter.com/MyCompanyTwitter"><i
                                                        class="ri-twitter-x-line"></i></a>
                                                <a href="https://www.instagram.com/riztechnology/"><i
                                                        class="ri-instagram-line"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-member-info-arrow revert">
                                            <img src="{{ asset('assets/img/team-arrow.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="team_container position-relative">
                                    <img src="{{ asset('assets/img/team-member-4.png') }}" class="img-fluid"
                                        alt="partner">
                                    <div class="team_member_info_container revert">
                                        <div class="team-member-info">
                                            <div class="">
                                                <h6 class="fs8 fw-bold text-purple">Ahmed Ali Jaffery</h6>
                                                <p>Country Manager, London – United Kingdom</p>
                                            </div>
                                            <div class="social-icons">
                                                <a href="https://www.facebook.com/RizTechnology"><i
                                                        class="ri-facebook-fill"></i></a>
                                                <a href="https://twitter.com/MyCompanyTwitter"><i
                                                        class="ri-twitter-x-line"></i></a>
                                                <a href="https://www.instagram.com/riztechnology/"><i
                                                        class="ri-instagram-line"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-member-info-arrow revert">
                                            <img src="{{ asset('assets/img/team-arrow.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <section class="faq_section faq_bg py-5">
                    <div class="accordion__wrapper customContainer py-5">
                        <!-- Accordion Item -->
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question">What services does Riz Technology offer?</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer">We provide a comprehensive range of IT solutions, including
                                    system integration, network security, wireless networks, uninterruptible power
                                    supply (UPS) solutions, virtual desktop infrastructure (VDI), cloud services, data
                                    center facilities, IT consulting, and managed IT services.
                                    Additionally, we offer desktop computers and laptops, printers and IT Accessories to
                                    complete your IT environment. Our goal is to tailor these services to meet the
                                    unique needs of each client, ensuring you have the right technology to achieve your
                                    objectiv</p>
                            </div>
                        </div>

                        <!-- Accordion Item -->
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">What types of toner cartridges do you offer?</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">We offer a wide variety of toner cartridges for HP,
                                    Samsung, OKI, XEROX, etc. This includes standard, high-yield, and remanufactured
                                    options to cater to different printing needs and budgets.</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">What kind of support do you provide after project
                                    completion??</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">We offer ongoing support options, including maintenance
                                    packages, troubleshooting, and help desk support. Our team is committed to ensuring
                                    the long-term success of your IT solutions.</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">Do you offer bulk ordering discounts for IT
                                    products?</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">Yes, we offer bulk ordering discounts for businesses
                                    that require large quantities of IT products. Please contact our sales team for more
                                    information on pricing and availability.</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">What are the environmental considerations for data
                                    centers?</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">Data centers use a substantial amount of energy,
                                    raising environmental issues. Implementing best practices, such as utilizing
                                    energy-efficient hardware, is crucial, and we can support this effort as we played a
                                    vital role in the inauguration of the UBL Data Center.</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">What is your approach to cybersecurity?</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">We take cybersecurity very seriously. Our approach
                                    includes risk assessments, vulnerability testing, security audits, and ongoing
                                    monitoring. We also provide employee training to help prevent cyber threats.</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">Are your IT solutions scalable?
                                </h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">Absolutely! We design our IT solutions with scalability
                                    in mind, allowing you to expand your infrastructure and services as your business
                                    grows without significant downtime or disruption.</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__header">
                                <h2 class="accordion__question fs5">How do you handle project timelines?</h2>
                                <span class="accordion__icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer fs5">We believe in transparent communication and set
                                    realistic timelines based on the complexity of your project. Our project managers
                                    provide regular updates and milestones to keep you informed throughout the process.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact_section">
                    <div class="customContainer">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card bg-card rounded-4">
                                    <div class="card-body">
                                        <h5>Get In Touch With Us</h5>
                                        <form action="https://riztechnology.com/contact" method="POST"
                                            class="row contactForm mt-4">
                                            <input type="hidden" name="_token"
                                                value="3o63GL5EJVW7PXkQoaU3MIdp3Apiz1L2VWlEVpm0" autocomplete="off">
                                            <div class="col-md-6 mb-3 wow animate__ animate__bounceInDown"
                                                data-wow-delay="0.3"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="text" name="first_name" class="form-control"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="col-md-6 mb-3 wow animate__ animate__bounceInDown"
                                                data-wow-delay="0.6"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="text" name="last_name" class="form-control"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="col-md-6 mb-3 wow animate__ animate__bounceInDown"
                                                data-wow-delay="0.9"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="text" name="company" class="form-control"
                                                    placeholder="Company / Organization">
                                            </div>
                                            <div class="col-md-6 mb-3 wow animate__ animate__bounceInDown"
                                                data-wow-delay="1.2"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="number" name="phone" class="form-control phoneVal"
                                                    placeholder="Phone">
                                            </div>
                                            <div class="col-md-12 mb-3 wow animate__ animate__bounceInDown"
                                                data-wow-delay="1.5"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="text" name="company_email" class="form-control emailVal"
                                                    placeholder="Company Email">
                                            </div>


                                            <div class="col-md-12 wow mb-3 animate__ animate__bounceInDown"
                                                data-wow-delay="2.2"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <textarea class="form-control " name="description" id="" cols="30"
                                                    rows="10" placeholder="How Can We Help You?"></textarea>
                                            </div>
                                            <div class="col-md-12  mb-3  wow animate__ text-white animate__bounceInDown"
                                                data-wow-delay="1.5"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="checkbox" name="terms-check" id="terms-check"> <label
                                                    for="terms-check">I
                                                    accept The <a href="https://riztechnology.com/terms-and-conditions"
                                                        class="text-decoration-underline text-white">terms
                                                        and conditions.</a></label>
                                            </div>
                                            <div class="col-md-12   wow animate__ text-white animate__bounceInDown"
                                                data-wow-delay="1.5"
                                                style="visibility: visible; animation-name: bounceInDown;">
                                                <input type="checkbox" name="policy-check" id="policy-check"> <label
                                                    for="policy-check">I accept The <a
                                                        href="https://riztechnology.com/privacy-policy"
                                                        class="text-decoration-underline text-white">Privacy
                                                        Policy.</a></label>
                                            </div>
                                            <div class="mt-3 wow animate__ animate__bounceInDown" data-wow-delay="2.5"
                                                style="visibility: visible; animation-name: bounceInDown;">


                                                <button class="mainBtn2 py-2 mx-0 w-100 fs-5"> Submit Now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-end mt-lg-0 mt-3">
                                <div class="contactContent ">

                                    <h1 class="fs3 text-black  mb-4" data-wow-delay="0.3s">
                                        Get in touch with us <span class="fs4 text-black">for comprehensive IT
                                            services:</span> </h1>
                                    <p class="mb-4" data-wow-delay="0.6s">
                                        Please do not
                                        hesitate to contact us with any questions you may have. Our team is dedicated to
                                        helping you find the services that best meet your needs.
                                    </p>


                                    <a href="tel:021 111 749 749">
                                        <h5 class="card-title " data-wow-delay="0.9s">
                                            Call
                                            Us At UAN: <span class="text-purple fs-2">111-749-749</span></h5>
                                    </a>
                                    <a href="mailto:info@riztechnology.com">
                                        <h5 class="card-title " data-wow-delay="0.9s">
                                            Email
                                            Us At: <span class="text-purple fs-2">info@riztechnology.com</span></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="location_section">
                    <div class="container">
                        <div class="d-flex gap-4 justify-content-center flex-md-row flex-wrap  ">

                            <div class="location position-relative seperator   wow animate__ animate__fadeInUp animated"
                                data-wow-duration="0.5s"
                                style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" x="0px" y="0px" viewBox="0 0 138 172.5"
                                    enable-background="new 0 0 138 138" width="100px" height="100px"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M56.6975,55.1053h7.7201c0.26,0,0.52-0.1104,0.71-0.29c0.1801-0.1899,0.29-0.4502,0.29-0.71l-0.01-10.48   c0-0.5503-0.4501-1-1-1h-7.74c-0.27,0-0.52,0.1099-0.7101,0.2998c-0.1899,0.1899-0.2899,0.4399-0.2899,0.71l0.0299,10.4702   C55.6975,54.6551,56.1476,55.1053,56.6975,55.1053z M63.4076,44.6253l0.01,8.48h-5.73l-0.02-8.48H63.4076z">
                                        </path>
                                        <path
                                            d="M68.4775,55.1053h7.72c0.55,0,1-0.4502,1-1l0.02-10.4702c0-0.27-0.0999-0.52-0.2899-0.71s-0.4401-0.2998-0.7101-0.2998   h-7.74c-0.26,0-0.52,0.1099-0.71,0.2998c-0.1799,0.1802-0.29,0.4399-0.29,0.7002v10.48   C67.4775,54.6551,67.9276,55.1053,68.4775,55.1053z M69.4775,44.6253h5.74l-0.02,8.48h-5.72V44.6253z">
                                        </path>
                                        <path
                                            d="M80.2676,55.1053h7.72c0.55,0,0.99-0.4399,1-1l0.04-10.4702c0-0.27-0.1-0.52-0.29-0.71s-0.44-0.2998-0.71-0.2998h-7.74   c-0.55,0-0.99,0.4497-1,1l-0.02,10.48c0,0.2598,0.1001,0.52,0.29,0.71C79.7476,54.9949,79.9976,55.1053,80.2676,55.1053z    M81.2876,44.6253h5.74l-0.04,8.48h-5.72L81.2876,44.6253z">
                                        </path>
                                        <path
                                            d="M133,130.1048h-4.9924l-5.72-80.8696c-0.03-0.5298-0.47-0.9302-0.99-0.9302h-8.75c-0.13-3.3301-0.58-6.6201-1.39-9.79   c0.0498-0.2156-0.0055-0.4714-0.05-0.5596c-5.09-19.1802-21.31-32.0605-40.3901-32.0605c-18.8099,0-35.0499,12.9102-40.5,32.1904   c-0.7964,0.7964-1.7148,8.0658-1.8499,10.2197h-9.1801c-0.53,0-0.9701,0.4102-1,0.9302l-5.38,80.8696H5c-0.5522,0-1,0.4482-1,1   c0,0.5527,0.4478,1,1,1c22.4825,0.0001,105.9379,0.0012,128,0c0.5522,0,1-0.4473,1-1C134,130.5531,133.5522,130.1048,133,130.1048z    M73.4976,90.1151c5.3101,4.75,13.17,15.9399,11.52,39.9897H61.6077C61.1576,125.244,59.7178,101.3753,73.4976,90.1151z    M70.7175,7.8948c17.6782,0,32.8118,11.6427,38.0801,29.2002c-19.8911-3.0958-54.8907-3.2701-76.3201,0.3799   C37.5672,20.5368,52.5739,7.8948,70.7175,7.8948z M31.7676,39.6351c22.8101-4.0498,58.06-3.5,77.49-0.4399   c0.75,2.9497,1.16,6,1.29,9.1099h-11.22c-0.55,0-1,0.4399-1,0.9902l-0.1,13.8301h-54.97l-0.09-13.8301   c0-0.5503-0.4501-0.9902-1-0.9902h-11.78C30.5676,45.3553,31.0276,42.4554,31.7676,39.6351z M20.1177,50.305h21.0599l0.08,13.8301   c0.01,0.5498,0.45,0.9902,1,0.9902h56.96c0.55,0,1-0.4404,1-0.9902l0.1-13.8301h20.04l5.65,79.7998h-38.99   c1.74-25.7798-7.28-37.3994-12.85-42.0596c-0.36-0.29-0.88-0.3101-1.25-0.02c-15.2899,11.6699-13.87,36.4194-13.3199,42.0796   h-44.78L20.1177,50.305z">
                                        </path>
                                    </g>
                                </svg>
                                <h3 class="fs9-1 mb-3"> Karachi
                                </h3>
                                <a class="" href="https://maps.app.goo.gl/jf5m3WAjaw7fYmsSA" target="_blank">
                                    <span><i class="fa-solid fa-location-dot text-purple"></i></span>
                                    <p>
                                        Suite # 412, 4th Floor,
                                        Panorama Centre 1,
                                        Fatima Jinnah Road Saddar.
                                    </p>
                                </a>

                            </div>
                            <div class="location position-relative seperator  wow animate__ animate__fadeInUp animated"
                                data-wow-duration="0.8s"
                                style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" x="0px" y="0px" viewBox="0 0 512 640"
                                    style="enable-background:new 0 0 512 512;" width="100px" height="125px"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M477.396,423.256h-1.485l-0.034-158.562l3.526-3.577c0.522-0.529,0.811-1.247,0.811-1.993l-0.048-7.257   c-0.014-1.55-1.271-2.797-2.818-2.797h-7.134v-6.732h5.003c1.553,0,2.818-1.261,2.818-2.814c0-1.553-1.265-2.814-2.818-2.814   h-3.079v-7.099c0-11.158-6.481-14.24-11.209-16.491c-0.687-0.326-1.375-0.653-2.041-1c-1.931-1.017-2.433-1.859-2.44-2.295   l-0.014-3.141c-0.007-1.55-1.271-2.801-2.818-2.801c-1.643,0.034-2.825,1.265-2.818,2.828l0.027,2.844   c-0.003,0.028-0.018,0.052-0.02,0.08c-0.014,0.216-0.495,1.069-2.453,2.096c-0.667,0.347-1.354,0.674-2.041,1   c-4.728,2.251-11.209,5.333-11.209,16.491v7.488h-2.007c-1.553,0-2.818,1.261-2.818,2.814c0,1.553,1.265,2.814,2.818,2.814h4.742   v6.732h-6.914c-1.546,0-2.804,1.247-2.818,2.794l-0.055,7.257c0,0.746,0.289,1.467,0.818,2l3.526,3.574l-0.159,51.31h-7.483v-2.776   c0-20.226-10.879-25.401-20.48-29.964c-1.388-0.667-2.776-1.32-4.117-2.027c-5.484-2.873-6.22-5.374-6.281-6.316   c-0.002-0.021-0.015-0.038-0.017-0.059l0.017-1.192c0.021-1.553-1.223-2.831-2.776-2.859c-1.457,0.014-2.831,1.223-2.859,2.776   l-0.007,1.746c0.062,0.763-0.213,3.484-6.281,6.666c-1.34,0.708-2.728,1.361-4.117,2.027c-9.601,4.563-20.48,9.738-20.48,29.964   v2.014h-7.595l-0.061-103.211l3.539-3.587c0.529-0.533,0.818-1.254,0.818-2L354,199.921c-0.014-1.546-1.271-2.794-2.818-2.794   h-11.834v-6.749h9.704c1.553,0,2.818-1.261,2.818-2.814c0-1.553-1.265-2.814-2.818-2.814h-3.099v-7.134   c0-11.185-6.495-14.278-11.237-16.532c-0.694-0.333-1.381-0.66-2.055-1.01c-2.165-1.137-2.488-4.258-2.467-4.804   c0.124-1.46-0.914-2.773-2.364-3.014c-0.79-0.158-1.594,0.076-2.206,0.57c-0.625,0.495-1.01,1.23-1.065,2.024   c-0.048,0.725-0.632,3.873-2.46,4.835c-0.667,0.35-1.361,0.677-2.055,1.007c-4.742,2.254-11.237,5.343-11.237,16.532v7.525h-2.021   c-1.553,0-2.818,1.261-2.818,2.814c0,1.553,1.265,2.814,2.818,2.814h9.374v6.749h-11.56c-1.546,0-2.804,1.247-2.818,2.797   l-0.048,7.285c0,0.746,0.289,1.464,0.818,1.996l3.553,3.605l0.231,18.725c-6.822-11.691-17.882-16.964-28.092-21.821   c-2.467-1.172-4.907-2.333-7.278-3.574c-10.175-5.347-11.972-10.322-12.14-12.814c-0.003-0.052-0.034-0.094-0.04-0.145l0.019-4.161   c0.007-1.557-1.247-2.821-2.801-2.828c-0.007,0-0.01,0-0.014,0c-1.55,0-2.807,1.251-2.814,2.801l-0.014,4.745   c0.172,2.127-0.673,7.718-12.137,13.738c-2.368,1.244-4.818,2.409-7.281,3.581c-10.508,5-21.895,10.476-28.654,22.906l0.247-20.009   l3.557-3.608c0.526-0.533,0.818-1.251,0.811-1.996l-0.052-7.281c-0.01-1.546-1.268-2.794-2.814-2.794h-11.563v-7.295h9.381   c1.553,0,2.814-1.261,2.814-2.814c0-1.553-1.261-2.814-2.814-2.814h-2.027v-7.522c0-11.188-6.491-14.278-11.233-16.535   c-0.694-0.33-1.381-0.656-2.048-1.007c-1.677-0.88-2.319-3.601-2.46-4.639c-0.003-0.069-0.003-0.134-0.01-0.196   c-0.103-1.553-1.44-2.79-2.993-2.622c-1.395,0.089-2.488,1.186-2.615,2.536c-0.021,0.155-0.027,0.316-0.021,0.478   c0.024,0.567-0.302,3.694-2.471,4.835c-0.663,0.347-1.35,0.674-2.045,1.003c-4.742,2.254-11.237,5.343-11.237,16.535v7.134h-3.106   c-1.553,0-2.814,1.261-2.814,2.814c0,1.553,1.261,2.814,2.814,2.814h9.707v7.295h-11.841c-1.546,0-2.804,1.247-2.814,2.794   l-0.052,7.281c-0.007,0.746,0.285,1.464,0.811,1.996l3.543,3.594l-0.057,102.063h-7.936c0.358-0.472,0.608-1.033,0.608-1.67v-5.587   c0-20.233-10.886-25.408-20.49-29.971c-1.388-0.667-2.77-1.32-4.103-2.021c-5.484-2.88-6.22-5.374-6.281-6.316   c-0.002-0.024-0.016-0.042-0.018-0.065l0.011-1.2c0.014-1.553-1.234-2.825-2.787-2.845c-0.01,0-0.021,0-0.027,0   c-1.543,0-2.801,1.244-2.814,2.79l-0.007,1.725c0.062,0.763-0.213,3.484-6.281,6.673c-1.337,0.708-2.722,1.361-4.113,2.027   c-9.597,4.563-20.477,9.738-20.477,29.964v4.824c0,0.637,0.25,1.198,0.608,1.67h-7.968l-0.011-51.31l3.526-3.577   c0.526-0.529,0.818-1.247,0.811-1.993l-0.048-7.257c-0.01-1.55-1.268-2.797-2.814-2.797h-6.924v-6.732h4.749   c1.553,0,2.814-1.261,2.814-2.814c0-1.553-1.261-2.814-2.814-2.814h-2.01v-7.488c0-11.158-6.474-14.24-11.202-16.491   c-0.691-0.326-1.378-0.653-2.041-1c-1.941-1.021-2.436-1.862-2.457-2.079c-0.001-0.008-0.006-0.015-0.006-0.022l0.006-2.926   c0.003-1.557-1.254-2.818-2.807-2.821c-0.003,0-0.003,0-0.007,0c-1.553,0-2.811,1.254-2.814,2.807v3.35   c-0.017,0.213-0.512,1.058-2.457,2.079c-0.663,0.347-1.35,0.673-2.041,1c-4.728,2.251-11.202,5.333-11.202,16.491v7.099H36.78   c-1.553,0-2.814,1.261-2.814,2.814c0,1.553,1.261,2.814,2.814,2.814h5.01v6.732h-7.141c-1.546,0-2.804,1.247-2.814,2.797   l-0.048,7.257c-0.007,0.746,0.285,1.464,0.811,1.993l3.526,3.577l-0.49,158.562h-1.033c-1.553,0-2.814,1.265-2.814,2.818   c0,1.553,1.261,2.818,2.814,2.818h42.221h124.87h108.146h124.866h0.007h42.685c1.553,0,2.818-1.265,2.818-2.818   C480.214,424.521,478.949,423.256,477.396,423.256z M448.731,217.817c0.756-0.361,1.505-0.718,2.234-1.103   c0.978-0.512,1.744-1.047,2.412-1.585c0.746,0.669,1.686,1.336,2.9,1.973c0.728,0.385,1.478,0.742,2.234,1.103   c4.646,2.21,7.993,3.804,7.993,11.405v7.099h-25.201c-0.186-0.046-0.366-0.108-0.564-0.114v-7.374   C440.738,221.621,444.085,220.026,448.731,217.817z M443.473,242.338h21.105v6.732h-21.105V242.338z M433.721,254.698h40.829   l0.021,3.295l-3.519,3.57c-0.515,0.526-0.811,1.237-0.811,1.976l0.034,159.717h-32.738l0.493-159.71   c0-0.742-0.296-1.457-0.818-1.986l-3.519-3.567L433.721,254.698z M431.902,423.256h-18.327c0.054-8.756,0.216-35.353,0.216-37.922   c0-5.374-2.928-9.182-8.027-10.453c-3.113-0.783-7.257-3.91-9.017-5.457c-1.1-0.969-2.811-0.907-3.862,0.144   c-0.845,0.845-5.354,4.46-8.756,5.312c-5.106,1.271-8.034,5.079-8.034,10.453c0,2.573-0.158,29.209-0.21,37.922h-10.185   c0.052-8.748,0.21-35.353,0.21-37.922c0-5.374-2.928-9.182-8.027-10.453c-3.319-0.832-7.615-4.206-8.989-5.436   c-1.113-1.01-2.831-0.935-3.876,0.117c-0.852,0.845-5.381,4.467-8.769,5.319c-5.099,1.271-8.027,5.079-8.027,10.453   c0,2.573-0.163,29.217-0.216,37.922h-15.346l0.008-5.112l0.215-96.505h119.336L431.902,423.256z M407.939,423.256h-26.418   c0.052-8.748,0.21-35.353,0.21-37.922c0-3.594,2.007-4.556,3.759-4.996c3.505-0.873,7.202-3.381,9.436-5.134   c2.227,1.725,5.931,4.254,9.477,5.134c1.746,0.44,3.752,1.402,3.752,4.996C408.156,387.907,407.993,414.551,407.939,423.256z    M360.065,423.256h-26.424c0.054-8.756,0.216-35.353,0.216-37.922c0-3.594,2.007-4.556,3.752-4.996   c3.532-0.88,7.216-3.381,9.443-5.134c2.192,1.691,5.931,4.247,9.47,5.134c1.746,0.44,3.752,1.402,3.752,4.996   C360.275,387.907,360.117,414.543,360.065,423.256z M285.815,423.256h-53.729c0.045-12.261,0.22-60.722,0.22-65.694   c0-6.309,2.873-10.096,8.783-11.573c6.903-1.725,14.443-7.271,18.033-10.254c3.532,2.859,11.137,8.501,18.147,10.254   c5.903,1.478,8.769,5.264,8.769,11.573C286.038,362.537,285.86,411.027,285.815,423.256z M278.63,340.532   c-7.807-1.959-17.288-10.268-17.686-10.618c-1.117-0.997-2.804-0.928-3.859,0.124c-1.014,1.024-9.969,8.639-17.36,10.494   c-8.415,2.096-13.047,8.144-13.047,17.03c0,4.974-0.176,53.465-0.22,65.694h-21.945l0.228-104.428c0-0.14-0.059-0.266-0.079-0.403   l0.075-52.082h102.157c0.076,0.305,0.191,0.582,0.359,0.837l-0.224,155.055l-0.002,1.021H291.45   c0.046-12.271,0.223-60.723,0.223-65.694C291.674,348.676,287.042,342.628,278.63,340.532z M362.99,313.991   c0-16.666,8-20.473,17.264-24.885c1.457-0.694,2.907-1.381,4.309-2.117c3.276-1.719,5.421-3.514,6.827-5.207   c1.398,1.473,3.373,2.987,6.156,4.444c1.402,0.735,2.852,1.423,4.309,2.117c9.264,4.412,17.264,8.219,17.264,24.885v2.776H362.99   V313.991z M314.442,177.225c0-7.632,3.361-9.233,8.02-11.45c0.763-0.361,1.519-0.722,2.247-1.106   c0.997-0.522,1.814-1.203,2.481-1.959c0.749,0.917,1.691,1.735,2.852,2.347c0.735,0.385,1.491,0.746,2.254,1.11   c4.481,2.134,8.02,3.818,8.02,11.45v7.134h-25.875V177.225z M321.796,190.378h11.917v6.749h-11.917V190.378z M311.728,211.604   c-0.014-0.728-0.302-1.426-0.818-1.945l-3.532-3.581l0.021-3.323h40.988l0.027,3.323l-3.532,3.581   c-0.522,0.529-0.818,1.24-0.818,1.979l0.061,104.366h-31.31l0.066-45.587c0.011-0.099,0.058-0.185,0.058-0.286v-9.797   c0-3.985-0.274-7.593-0.743-10.925L311.728,211.604z M236.165,216.14c2.533-1.203,5.048-2.402,7.481-3.68   c6.874-3.609,10.711-7.345,12.813-10.661c2.256,2.992,5.95,6.203,11.897,9.325c2.426,1.278,4.941,2.474,7.47,3.677   c14.097,6.707,27.507,13.105,30.734,34.833l0.137,11.079H204.761l0.026-2.112C205.807,230.672,220.545,223.573,236.165,216.14z    M171.127,178.218c0-7.635,3.543-9.319,8.027-11.45c0.759-0.364,1.512-0.722,2.244-1.106c1.182-0.622,2.124-1.436,2.866-2.34   c0.663,0.753,1.478,1.429,2.467,1.948c0.732,0.385,1.488,0.746,2.247,1.106c4.66,2.216,8.024,3.821,8.024,11.453v7.522h-25.875   V178.218z M177.728,190.98h11.92v7.295h-11.92V190.98z M166.563,210.81l-3.532-3.587l0.021-3.319h40.994l0.021,3.319l-3.532,3.587   c-0.512,0.519-0.804,1.213-0.811,1.941l-0.57,46.217c-0.028,0.905-0.093,1.758-0.093,2.702v4.869l-0.003,0.279   c0,0.006,0.003,0.012,0.003,0.018v3.294c0,0.073,0.036,0.135,0.042,0.207l-0.066,45.667h-31.718l0.057-103.218   C167.374,212.047,167.086,211.336,166.563,210.81z M92.602,314.334v-4.824c0-16.666,8.003-20.473,17.267-24.885   c1.46-0.694,2.907-1.381,4.312-2.117c3.273-1.72,5.417-3.515,6.821-5.209c1.396,1.472,3.37,2.985,6.15,4.446   c1.399,0.735,2.845,1.423,4.299,2.11c9.274,4.412,17.281,8.22,17.281,24.892v5.587c0,0.637,0.25,1.198,0.608,1.67H91.993   C92.351,315.532,92.602,314.972,92.602,314.334z M199.028,321.64l-0.146,101.617h-15.323c0.053-8.756,0.213-35.353,0.213-37.922   c0-5.374-2.924-9.182-8.024-10.453c-3.405-0.852-7.914-4.467-8.756-5.312c-1.051-1.065-2.749-1.134-3.869-0.144   c-1.756,1.546-5.903,4.673-9.01,5.457c-5.103,1.271-8.027,5.079-8.027,10.453c0,2.573-0.163,29.217-0.216,37.922h-10.192   c0.054-8.756,0.216-35.353,0.216-37.922c0-5.374-2.924-9.182-8.024-10.453c-3.405-0.852-7.914-4.467-8.756-5.312   c-1.048-1.065-2.749-1.134-3.869-0.144c-1.756,1.546-5.903,4.673-9.01,5.457c-5.103,1.271-8.027,5.079-8.027,10.453   c0,2.573-0.163,29.217-0.216,37.922H79.636L79.614,321.64H199.028z M177.93,423.256h-26.431c0.054-8.756,0.216-35.353,0.216-37.922   c0-3.594,2.01-4.556,3.763-4.996c3.539-0.88,7.247-3.409,9.474-5.134c2.23,1.753,5.931,4.261,9.436,5.134   c1.749,0.44,3.756,1.402,3.756,4.996C178.144,387.907,177.983,414.551,177.93,423.256z M130.05,423.256h-26.428   c0.054-8.756,0.216-35.353,0.216-37.922c0-3.594,2.01-4.556,3.763-4.996c3.539-0.88,7.247-3.409,9.474-5.134   c2.23,1.753,5.931,4.261,9.436,5.134c1.749,0.44,3.756,1.402,3.756,4.996C130.266,387.907,130.103,414.551,130.05,423.256z    M53.483,218.205c0.759-0.361,1.512-0.718,2.237-1.1c1.216-0.638,2.158-1.307,2.904-1.974c0.667,0.536,1.429,1.07,2.405,1.582   c0.728,0.385,1.481,0.742,2.24,1.103c4.639,2.21,7.993,3.804,7.993,11.405v7.372c-0.201,0.006-0.382,0.069-0.571,0.115H45.491   v-7.099C45.491,222.009,48.844,220.415,53.483,218.205z M47.418,242.338h21.105v6.732H47.418V242.338z M40.944,261.564l-3.522-3.57   l0.024-3.295h40.833l0.024,3.295l-3.519,3.57c-0.522,0.526-0.811,1.237-0.811,1.976l0.034,159.717H41.262l0.493-159.71   C41.759,262.804,41.467,262.093,40.944,261.564z">
                                        </path>
                                        <path
                                            d="M258.576,158.452c13.738,0,26.665-7.336,33.737-19.15c0.625-1.058,0.502-2.402-0.316-3.319   c-0.832-0.921-2.13-1.21-3.264-0.691c-4.371,1.976-9.03,2.979-13.841,2.979c-18.556,0-33.655-15.099-33.655-33.658   c0-6.079,1.643-12.041,4.752-17.243c0.632-1.055,0.505-2.398-0.316-3.316c-0.821-0.924-2.144-1.206-3.258-0.691   c-14.051,6.35-23.126,20.404-23.126,35.802C219.289,140.828,236.914,158.452,258.576,158.452z M237.34,93.067   c-1.144,3.721-1.732,7.615-1.732,11.546c0,21.662,17.621,39.287,39.283,39.287c2.447,0,4.866-0.223,7.237-0.667   c-6.206,6.11-14.556,9.591-23.552,9.591c-18.559,0-33.658-15.099-33.658-33.658C224.918,108.922,229.608,99.373,237.34,93.067z">
                                        </path>
                                    </g>
                                </svg>
                                <h3 class="fs9-1 mb-3"> Lahore
                                </h3>
                                <a class="" href="https://maps.app.goo.gl/dZR2Y5dXp8hMJ2u29" target="_blank">
                                    <span><i class="fa-solid fa-location-dot text-purple"></i></span>
                                    <p>Office No.3, 2nd Floor, IT
                                        Tower Hali Road, Gulberg
                                        III.</p>
                                </a>

                            </div>
                            <div class="location position-relative seperator  wow animate__ animate__fadeInUp animated"
                                data-wow-duration="1s"
                                style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" x="0px" y="0px" viewBox="0 0 138 172.5"
                                    enable-background="new 0 0 138 138" xml:space="preserve" width="100px"
                                    height="125px">
                                    <g>
                                        <path
                                            d="M133,112.2753h-4.6799l-1.5-4.0903c0-0.1-0.0094-82.2253-0.04-76.9697l-3.6901-15.75c-0.11-0.4502-0.51-0.77-0.98-0.77   c-0.4601,0-0.86,0.3198-0.97,0.77c-3.1888,13.5886,0.3204-1.3831-3.7101,15.8198c-0.0484,0.2907-0.0095-3.7786-0.02,76.8999   l-0.4199,1.1401c-19.207-45.2834-10.0206-23.6252-12.61-29.73l-0.0033-0.0078c0.0036-49.7577,0.02-46.0838-0.0267-46.332   l-3.71-15.5703c-0.1-0.4497-0.51-0.77-0.9701-0.77c-0.46,0-0.8699,0.3203-0.97,0.77c-4.0472,16.9965-3.7251,15.5509-3.7373,15.8252   v39.7764C79.3386,64.0953,85.305,67.6052,69.7,58.4252l-0.001-0.0005V49.411c0-0.4678-0.3237-0.8721-0.7793-0.9756   c-0.4541-0.1016-0.9219,0.123-1.123,0.5449c-1.2627,2.6445-2.127,2.8501-2.3618,2.8501s-1.0991-0.2056-2.3613-2.8501   c-0.2007-0.4219-0.6665-0.647-1.123-0.5449c-0.4556,0.1035-0.7793,0.5078-0.7793,0.9756v9.333l-0.0012,0.001L39.7732,72.7533   c-0.0148-40.7379,0.0281-39.1466-0.0232-39.4585c0.1-0.0976-1.7207-7.2676-3.71-15.6099c-0.1101-0.4497-0.51-0.77-0.97-0.77   c-0.4701,0-0.8701,0.3203-0.9801,0.77c-3.866,16.3034-3.73,15.5853-3.73,15.8101c-0.0011,61.631-0.0008,42.5602-0.0009,46.3823   c-0.1349,0.3887-9.9724,28.7253-10.1191,29.1479c-0.0373-0.1045-0.3411-0.9546-0.3037-0.8501   c-0.0067-80.8159,0.0304-76.7123-0.0264-76.9102c-5.7261-24.3859-2.89-12.3077-3.71-15.7998c-0.1-0.4502-0.51-0.77-0.97-0.77   s-0.87,0.3198-0.97,0.77c-0.82,3.4924,2.0161-8.5861-3.71,15.7998c-0.0572,0.1994-0.0196-3.9033-0.0273,76.9126l-0.0027,0.0073   l-1.49,4.0903H5c-0.55,0-1,0.4497-1,1v9.0298c0,0.5503,0.45,1,1,1h128c0.55,0,1-0.4497,1-1v-9.0298   C134,112.725,133.55,112.2753,133,112.2753z M124.8201,107.3651h-5.4102V32.4852h5.4102V107.3651z M119.11,109.3651   c0.1485,0,5.9646,0,5.7101,0h0.2999l1.0699,2.9102c-0.2018,0-8.4729,0-7.9399,0l-0.11-0.2603L119.11,109.3651z M98.9905,112.1351   v-2.7695l2.6995,2.7695H98.9905z M96.9905,112.1449c-0.1515,0-7.9465,0-7.4277,0V99.6981   c1.6695,1.7115-4.1044-4.2076,7.5527,7.7427C97.0424,107.5799,97.0402,107.7732,96.9905,112.1449z M87.5627,112.1449h-8.8623   V88.5555c1.5918,1.633-4.2808-4.3918,8.863,9.0928C87.5635,97.6498,87.5629,108.9408,87.5627,112.1449z M76.7004,112.1449h-9.6821   V76.5731l0.0017,0.002L76.7,86.5052l0.0005,0.0005V112.1449z M65.0183,75.702v36.4429h-8.4526   c-0.1971-27.4216,0.4232-26.5403-0.47-27.1147c5.2586-5.5533,3.7372-3.9467,8.9343-9.4351l0.0127-0.0132   C65.0375,75.6229,65.0183,75.6595,65.0183,75.702z M54.5657,112.1449h-8.4993c0.0976-0.3929,0.0172,0.9472,0.0471-15.835   c0-0.2056-0.0769-0.3857-0.1833-0.5444c5.1095-5.3939,3.5826-3.782,8.6355-9.1162V112.1449z M44.1606,112.1449h-6.655   c-0.0921-6.5311,0.2102-6.6796-0.248-7.2168c0.1292-0.1366,6.9493-7.3456,6.8524-7.2432l0.0035-0.0039   C44.1437,113.1675,44.0604,111.7414,44.1606,112.1449z M35.5056,112.1449h-5.0857l5.0857-5.3647V112.1449z M122.11,20.0653   l2.4501,10.4199h-4.8901L122.11,20.0653z M102.3767,34.5052v43.148l-5.4141-3.1865V34.5052H102.3767z M99.6699,22.2352   c0.0235,0.0989-0.2807-1.181,2.4401,10.2646h-4.88C99.9504,21.0553,99.6464,22.3341,99.6699,22.2352z M102.37,79.975   l9.9366,23.4424L71.4983,61.8041L71.5,61.805L102.37,79.975z M65.4348,53.8304c0.7944,0,1.5454-0.355,2.2642-1.0767v4.4907   l-1.609-0.9497c-0.0199-0.0098-0.0499-0.0298-0.08-0.0396c-0.0195-0.0112-0.0414-0.0156-0.0615-0.0254   c-0.0439-0.0234-0.0895-0.041-0.137-0.0566c-0.1036-0.0347-0.2087-0.0581-0.3115-0.0581c-0.01,0-0.01,0-0.02,0s-0.01,0-0.02,0   c-0.0601,0-0.13,0.0098-0.1899,0.0298c-0.0601,0.0103-0.13,0.04-0.1901,0.0601c-0.0399,0.02-0.09,0.04-0.13,0.0703l-1.7788,1.1587   v-4.6797C63.8894,53.4754,64.6404,53.8304,65.4348,53.8304z M32.3591,34.5052h5.4141v39.5581   c-2.5336,1.6577-5.5383,3.6238-5.4141,3.5425V34.5052z M35.0701,22.2352c0.0235,0.0989-0.2807-1.181,2.4399,10.2646h-4.89   C35.3517,21.0553,35.0465,22.3341,35.0701,22.2352z M32.46,79.9252l27.12-17.7402l0.0052-0.0034   c-20.5908,22.8359-29.9177,33.2358-34.1536,38.0088C25.4677,100.0884,32.0855,81.0443,32.46,79.9252z M23.7064,105.1551   c1.6558-2,27.5276-30.7285,41.8241-46.5801l48.9121,49.8765l1.5374,3.6333l-0.02,0.0601h-11.47l-38.25-39.23   c-0.1899-0.1997-0.49-0.3096-0.72-0.2998c-0.27,0-0.53,0.1099-0.72,0.3101l-37.1201,39.2197H21.38l-0.05-0.1396L23.7064,105.1551z    M12.5227,32.4901h5.4136v74.875h-5.4136V32.4901z M15.23,20.0653l2.4399,10.4199H12.78L15.23,20.0653z M12.22,109.3651h6.02   l0.97,2.6602l-0.09,0.25h-7.9601L12.22,109.3651z M132,121.305H6v-7.0298h3.38c0.2307,0.0924,11.4691,0.0924,11.7,0   c11.9348,0,27.2454,0,34.1884,0c0.2532,0.0803,0.3415,0.0803,0.5947,0c40.7713,0,70.813,0.0238,76.137,0V121.305z">
                                        </path>
                                    </g>
                                </svg>
                                <h3 class="fs9-1 mb-3"> Islamabad
                                </h3>
                                <a class="" href="https://maps.app.goo.gl/rFKXqMZGJUNfYREeA" target="_blank">
                                    <span><i class="fa-solid fa-location-dot text-purple"></i></span>
                                    <p>Office No. 19 &amp; 20, 3rd Floor,

                                        Pakland Business Center,

                                        I-8 Markaz.</p>
                                </a>

                            </div>



                            <div class="location seperator   position-relative   wow animate__ animate__fadeInUp animated"
                                data-wow-duration="1.3s"
                                style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0"
                                    width="100px" height="120px">
                                    <path
                                        d="m86.699 95.77c-0.80078-0.089843-1.5898-0.23047-2.3906-0.33984-3.5312-0.48828-7.0586-1-10.59-1.5-2.4688-0.35156-4.9414-0.69922-7.3984-1.0703-0.10937-0.019531-0.25-0.21094-0.26953-0.32812-0.039062-0.28125-0.03125-0.57812-0.011719-0.85938 0.019532-0.37109-0.12109-0.51953-0.5-0.51172-0.58984 0.019532-1.1797 0.011719-1.8398 0.011719v-1.1016c0-0.78125-0.011719-1.5703 0.011719-2.3516 0.011718-0.37891-0.12109-0.51953-0.5-0.5-0.46094 0.019531-0.92969 0.011719-1.4609 0.011719v-0.57812-11c0-0.60156-0.019531-0.60938-0.62109-0.60938h-1.2305v-0.57031c0-3.3789-0.011719-6.7617 0.011718-10.141 0-0.48047-0.17188-0.62109-0.60938-0.60156-0.41016 0.03125-0.82031 0.011719-1.2891 0.011719v-0.87891c0-4.0508-0.011719-8.1016-0.011719-12.148 0-0.62891-0.03125-0.66016-0.64062-0.66016h-1.1016v-0.60156-12.441c0-0.71875-0.039062-0.76172-0.75-0.76172h-1.0703v-0.58984-10.09c0-0.71094 0-0.71094-0.71094-0.71094h-0.62891v-0.60938c0-1.7305-0.03125-3.4609 0.011719-5.1914 0.019531-0.69922-0.10156-1.2891-0.62891-1.7617-0.28125-0.23828-0.33984-0.53906-0.32812-0.89844 0.011718-1.2812 0.011718-2.5586-0.011719-3.8398 0-0.17969-0.10156-0.37891-0.21094-0.53906-0.39844-0.64844-0.80859-1.2383-0.78125-2.0898 0.070312-1.8398 0.058593-3.6797 0-5.5195-0.011719-0.41016-0.33984-0.80078-0.55859-1.2891-0.48828 0.5-0.80859 0.87891-0.78906 1.5273 0.058594 1.7109-0.03125 3.4297 0.039063 5.1406 0.039062 0.87891-0.33984 1.5312-0.76953 2.1992-0.10937 0.17188-0.19922 0.39062-0.21094 0.60156-0.019531 1.3086 0.011719 2.6289-0.019531 3.9414-0.011719 0.26172-0.10938 0.57031-0.28125 0.76172-0.41016 0.44922-0.57031 0.92188-0.55859 1.5508 0.050781 1.8086 0.019531 3.6211 0.019531 5.4297 0 0.16016-0.011719 0.30859-0.019531 0.51172-0.30859 0-0.58984 0.019532-0.87109-0.011718-0.32812-0.039063-0.42969 0.10937-0.42188 0.41016v0.33984c0 3.4414-0.011719 6.8906-0.011719 10.328v0.39844c-0.51953-0.039062-1.0195-0.078125-1.5781-0.12109v13.859c-0.44922 0-0.83984 0.03125-1.2305-0.011719-0.41016-0.039062-0.51953 0.078126-0.51953 0.48828 0.011718 4.1992 0 8.3906 0 12.59v0.69922c-0.5 0-0.96875 0.03125-1.4414-0.011718-0.44922-0.03125-0.60156 0.089843-0.60156 0.57812 0.019531 3.4297 0.011719 6.8516 0.011719 10.281 0 0.12891-0.019532 0.25-0.03125 0.44141-0.46875 0-0.92969 0.019531-1.3906-0.011719-0.44141-0.03125-0.57812 0.12109-0.57812 0.57031 0.019531 3.6797 0.011718 7.3711 0.011718 11.051v0.55859c-0.58984 0-1.1289 0.011718-1.6602-0.011719-0.33984-0.011719-0.44922 0.12109-0.44922 0.44922 0.011719 1.1484 0 2.3008 0 3.5117-0.64062 0-1.2383 0.03125-1.8398-0.011718-0.44141-0.03125-0.57031 0.14844-0.53906 0.55859 0.019531 0.35156 0 0.69922 0 1.1602-0.28906-0.078126-0.51172-0.14063-0.73828-0.19141-0.12109-0.019531-0.25-0.03125-0.37109-0.011719-3.0391 0.44141-6.0703 0.89063-9.1094 1.3398-3.3398 0.48828-6.6914 0.89844-10.012 1.5-0.48047 0.089844-0.96094 0.14844-1.4414 0.19922-0.03125 0.19141-0.12109 0.71094-0.19922 1.1914h74.039c-0.14844-0.36328-0.24609-0.74609-0.32812-1.125zm-22.027-3.3984c0.011719 0.12109 0.03125 0.25 0.039063 0.42188h-2.9883c0.011719-0.14844 0.011719-0.28125 0.019532-0.42188zm-2.2734-3.9219v2.6602c0 0.5-0.37891 0.28125-0.67188 0.35938v-2.3984h-0.67969v3.7109h-1.2188v-4.3398h2.5703zm-1.9375-12.238v0.57812c0 3.3594-0.011719 6.7188 0.011718 10.078 0 0.46875-0.12109 0.69922-0.69141 0.62109v-10.41c-0.26172 0.019531-0.46875 0.039063-0.73047 0.050781v15.648l-1.0508 0.003906v-16.57zm-1.9414-11.289v10.25c-0.17188 0.03125-0.33984 0.070313-0.55859 0.10938v-9.4297c-0.26172 0.019532-0.46094 0.03125-0.69922 0.050782v26.879h-1.2617v-27.859zm-2.5312-0.91016v-2.4297h0.64844v2.3398c-0.21484 0.027344-0.41797 0.058594-0.64844 0.089844zm0.68359-12.75v9.0508c-0.21875 0.011719-0.44141 0.019531-0.71094 0.039062v-8.5703c-0.26953 0.011719-0.48828 0.019531-0.73828 0.03125v8.5586h-1.1602v-9.1094zm-1.4922 10.438v31.102h-1.1211v-31.102zm-1.6211-24.277c0.42969 0 0.85938-0.050781 1.3516-0.078125 0.011719 0.21094 0.03125 0.39844 0.03125 0.57812 0 3.9102 0 7.8086-0.011718 11.719 0 0.69141 0 0.69141-0.75 0.66016v-12.242c-0.35156 0.058594-0.60938 0.10938-0.89844 0.16016v22.191h-0.85938v-23.289h0.64844c-0.011718 0.03125-0.019531 0.070312-0.03125 0.10156 0.17969 0.066406 0.35156 0.19922 0.51953 0.19922zm-0.28906 24.316v31.02h-0.83984v-31.02zm-0.16016-35.75v9.8398c-0.19922 0.011719-0.42969 0.03125-0.71875 0.050781v-0.60156c0-1.9805 0.011719-3.9688 0.011719-5.9492 0-1.1211-0.30859-1.4492-1.4297-1.5312-0.089844-0.011719-0.19141-0.019531-0.30859-0.03125v-1.7812zm-3.5703 34.441v-23.281h2.0703v23.281zm2.0703 1.332v30.988h-2.0703v-30.988zm-2.0703-25.902c-0.011718-0.19141-0.03125-0.35938-0.03125-0.53125-0.011718-1.9805-0.011718-3.9609-0.011718-5.9414 0-0.62109 0.070312-0.69141 0.69141-0.69141 0.30078 0 0.60938 0 0.91016 0.011719 0.33984 0.011719 0.53906 0.19922 0.53906 0.55078v6.6094l-2.0977 0.003906zm1.0625-11.121v-4.6406c1.3594 0.87109 1.3594 0.87891 1.3594 2.5117v2.1289zm-1.0508-6.6484c0.32031-0.28125 0.39062-0.60938 0.37891-1.0195-0.019532-1.1992 0.03125-2.3984-0.019532-3.6016-0.019531-0.60156 0.23047-1.0195 0.55859-1.5117 0.30078 0.44141 0.55859 0.80859 0.53906 1.3594-0.039062 1.2305 0 2.4688-0.019531 3.6992-0.011719 0.42969 0.089844 0.78125 0.42969 1.0586 0.5 0.42188 0.69922 0.92969 0.48047 1.6289-0.35156-0.23828-0.71094-0.44922-1.0508-0.71094-0.28906-0.21875-0.51953-0.28125-0.83984-0.050782-0.28125 0.19922-0.60937 0.33984-0.91016 0.5-0.20703-0.58203 0.050782-1 0.45312-1.3516zm-0.12109 2.3789c0.25-0.10156 0.46875-0.26953 0.73828-0.39844-0.44922 0.55859-0.26172 1.1992-0.26953 1.8203-0.019532 0.94141-0.011719 1.8789-0.011719 2.8398h-0.85938v-0.78125c0-0.92969 0.019531-1.8594-0.011719-2.7891-0.015625-0.33984 0.085937-0.55078 0.41406-0.69141zm-1.5312 5.5117h1.9883c0 0.55078 0.011719 1.0781-0.011719 1.6211 0 0.078126-0.14062 0.19141-0.23828 0.23047-0.73047 0.26172-0.87891 0.46094-0.87891 1.2188v6.7617l-0.85937-0.003906zm-1.707 11.34c0.42969 0.039063 0.85156 0.078126 1.2695 0.12891 0.28906 0.039062 0.48828 0.011719 0.41016-0.35938h0.83984v23.32h-1.1484l-0.003906-22.359h-0.73828v12.281c-0.23828-0.050781-0.42969-0.078125-0.64062-0.12891v-12.883zm2.5391 24.43v31.031h-1.1406v-31.031zm-4.2695-10.512h2.3594v9.1406h-0.87891v-8.5586h-0.73047v8.5195h-0.75zm2.3398 10.441v31.121h-0.87109v-31.121zm-1.6289-0.078126v2.4492c-0.75-0.10938-0.75-0.10938-0.75-0.80078v-1.6484zm-2.5625 3.4688c0-0.03125 0.011719-0.058593 0.03125-0.14062h2.5312v27.859h-1.3008v-26.867h-0.73828v9.3789c-0.32031-0.039062-0.53906-0.050781-0.53906-0.42188 0.015625-3.2773 0.007812-6.5391 0.015625-9.8086zm-4.1289 23.32h2.6094c0-0.44141 0.21094-0.89844-0.48047-0.92188v-11.258h2.4609v16.578h-1.1914v-15.66h-0.71094v15.66h-1.5v-3.7305h-0.75v2.3711c-0.058594 0.019531-0.12109 0.039062-0.17188 0.070312-0.078125-0.12109-0.23828-0.23828-0.23828-0.37109-0.039062-0.89062-0.027343-1.7773-0.027343-2.7383zm-2.3008 4c0.82812 0 1.6602-0.011719 2.4883 0.011719 0.10938 0 0.21094 0.17188 0.30859 0.26953-0.03125 0.050781-0.058593 0.089844-0.089843 0.14062-0.83984 0-1.6914 0.011719-2.5312-0.011719-0.10938 0-0.21094-0.19922-0.30859-0.30078 0.042969-0.039062 0.09375-0.078125 0.13281-0.10938zm-15.102 3.4688-0.011719-0.078125c2.0898-0.28906 4.1719-0.58984 6.2617-0.89062 1.8789-0.26953 3.7617-0.55859 5.6484-0.80859 0.32031-0.039062 0.66016 0.019531 1 0.019531 10.41 0 20.809-0.019531 31.219 0.019532 1.4609 0.011718 2.9219 0.30859 4.3789 0.51172 2.5195 0.33984 5.0391 0.69141 7.5508 1.0391 0.25 0.03125 0.48828 0.089844 0.73047 0.19141z">
                                    </path>
                                </svg>
                                <h3 class="fs9-1 mb-3"> United Arab Emirates </h3>
                                <a class="" href="https://maps.app.goo.gl/ma2xLU1gS16BDcdt8" target="_blank">
                                    <span><i class="fa-solid fa-location-dot text-purple"></i></span>
                                    <p>Building A1, Dubai Digital Park, Silicon Oasis, Dubai.</p>
                                </a>

                            </div>
                            <div class="location   position-relative  wow animate__ animate__fadeInUp animated"
                                data-wow-duration="1.6s"
                                style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" x="0px" y="0px" viewBox="0 0 100 125"
                                    enable-background="new 0 0 100 100" width="100px" height="120px"
                                    xml:space="preserve">
                                    <path
                                        d="M95.308,68.127c-0.024-0.495-0.425-0.889-0.92-0.903c-0.045-0.001-2.08-0.063-5.056-0.132V46.504l1.025-3.023   c0.033-0.098,0.051-0.201,0.051-0.305v-13.94c0-0.076-0.01-0.152-0.027-0.226l-1.522-6.226c-0.104-0.425-0.484-0.724-0.922-0.725   h-0.001c-0.437,0-0.817,0.298-0.922,0.722l-0.866,3.496l-3.873-8.208c-0.1-0.212-0.274-0.379-0.49-0.47l-2.617-1.104   c-0.475-0.201-1.031,0.018-1.239,0.495l-3.631,8.307l-1.33-4.238c-0.127-0.407-0.498-0.656-0.936-0.666   c-0.426,0.013-0.791,0.308-0.893,0.722l-1.63,6.587c-0.019,0.075-0.028,0.151-0.028,0.228v6.269l-39.291,3.383v-2.366   c0-0.084-0.011-0.168-0.034-0.25l-1.532-5.628c-0.112-0.413-0.486-0.699-0.914-0.701c-0.001,0-0.002,0-0.003,0   c-0.426,0-0.801,0.285-0.915,0.695l-0.863,3.1l-3.474-7.566c-0.121-0.264-0.357-0.458-0.64-0.527l-2.525-0.612   c-0.427-0.103-0.869,0.099-1.069,0.49l-4.029,7.855l-1.208-4.146c-0.118-0.406-0.49-0.685-0.912-0.685c-0.004,0-0.009,0-0.014,0   c-0.427,0.006-0.798,0.297-0.906,0.71l-1.467,5.639c-0.021,0.078-0.031,0.159-0.031,0.239v13.299c0,0.124,0.024,0.247,0.072,0.362   l1.191,2.891v17.487c-2.349,0.023-4.267,0.073-5.71,0.152c-0.496,0.026-0.888,0.432-0.898,0.929L4.05,81.447   c-0.005,0.253,0.09,0.497,0.266,0.679c0.176,0.183,0.417,0.287,0.669,0.291c1.624,0.025,3.208,0.036,4.744,0.036   c14.17,0,24.388-0.987,24.489-0.997c0.494-0.048,0.867-0.468,0.857-0.964l-0.132-6.836c3.486-0.781,8.472-1.818,13.005-2.469   c7.079,0.641,14.764,2.21,17.15,2.72l-0.125,8.284c-0.007,0.462,0.318,0.861,0.771,0.947c0.095,0.019,2.326,0.441,4.09,0.441   c1.686,0,13.084-0.22,13.559-0.229c0.283-0.003,6.988-0.076,11.767-0.894c0.474-0.081,0.812-0.503,0.789-0.982L95.308,68.127z    M87.208,67.046v-3.311c0.005-0.492-0.024-3.005-1.118-4.109c-0.755-0.763-1.97-0.745-2.715,0.013   c-1.06,1.077-1.075,3.404-1.067,3.844v3.48c-0.085-0.001-0.17-0.002-0.255-0.003V45.206l1.637-3.237   c0.067-0.133,0.103-0.28,0.103-0.429V29.175l2.271,1.136v12.691c0,0.124,0.024,0.246,0.071,0.36l1.298,3.172V67.05   C87.358,67.049,87.283,67.047,87.208,67.046z M85.307,67.009c-0.362-0.006-0.729-0.013-1.1-0.019v-3.524   c-0.019-1.086,0.259-2.357,0.508-2.525c0.277,0.171,0.604,1.446,0.592,2.784V67.009z M66.093,67.222L44.91,67.24l-16.251,0.542   V50.925l1.424-2.732c0.071-0.135,0.108-0.286,0.108-0.439v-3.608l39.291-2.981v1.44c0,0.141,0.031,0.28,0.092,0.407l1.538,3.246   v20.705C68.861,67.011,67.183,67.098,66.093,67.222z M25.466,36.19v1.799l-3.804,0.328v-3.148L25.466,36.19z M19.762,39.351v3.021   v3.809l-0.647,1.242l-0.647-1.242V33.469l0.657-2.416l0.637,2.288V39.351z M16.613,33.047l-0.817,0.064l1.703-3.319L16.613,33.047z    M20.064,49.711l1.49-2.857c0.071-0.136,0.108-0.287,0.108-0.439v-2.89l3.804,0.739v3.491c0,0.132,0.027,0.262,0.081,0.382   l1.212,2.756v16.953l-0.506,0.017l-0.006-1.95c0.09-1.622-0.387-4.416-2.752-4.597c-0.689-0.054-1.303,0.167-1.786,0.632   c-1.201,1.159-1.171,3.494-1.153,3.912v2.048c-0.158-0.002-0.324-0.004-0.491-0.007V49.711z M24.4,72.846v-3.022l19.348-0.645   C40.828,69.531,31.693,70.74,24.4,72.846z M28.291,47.521l-0.509,0.978l-0.416-0.944v-3.194l0.925-0.07V47.521z M22.455,67.937   l-0.001-2.116c-0.03-0.759,0.13-2.079,0.573-2.506c0.077-0.075,0.156-0.125,0.323-0.105c0.937,0.071,1.027,2.068,0.998,2.651   l0.004,2.065l-0.897,0.03C23.41,67.954,23.05,67.947,22.455,67.937z M29.311,73.551c-0.001,0.005-0.004,0.009-0.006,0.014l-0.058,0   C29.269,73.56,29.29,73.556,29.311,73.551z M74.551,43.011c0.061-0.127,0.092-0.266,0.092-0.407V29.326l3.771-0.297v12.51   c0,0.149,0.035,0.295,0.103,0.428l1.636,3.237v21.732c-1.378-0.013-2.76-0.021-4.099-0.021c-1.094,0-2.1,0.006-3.041,0.017V46.258   L74.551,43.011z M83.759,26.472l-0.51-1.889l1.356,2.875l-0.813-0.407v-0.332C83.792,26.636,83.78,26.552,83.759,26.472z    M81.891,26.845v14.468l-0.789,1.561l-0.788-1.561V26.989l0.799-3.027L81.891,26.845z M87.93,26.986l0.578,2.364v13.669   L88.3,43.636l-0.336-0.821V29.724c0-0.352-0.194-0.674-0.503-0.838L87.93,26.986z M79.295,18.61l1.418,0.598l0.081,0.173   c-0.294,0.101-0.528,0.342-0.611,0.656l-1.738,6.587c-0.021,0.079-0.031,0.16-0.031,0.242v0.257l-2.942,0.232L79.295,18.61z    M71.383,28.046l0.788-3.185l0.904,2.882c-0.2,0.175-0.333,0.421-0.333,0.705v13.943l-0.68,1.435l-0.68-1.435v-2.25v-1.745V28.046z    M69.482,37.518l-47.82,3.825v-1.121l47.82-4.117V37.518z M28.291,35.343v2.402l-0.925,0.08v-2.363c0-0.19-0.064-0.365-0.163-0.516   l0.495-1.779L28.291,35.343z M19.572,25.752l1.35,0.327l3.627,7.898l-2.888-0.776c-0.001-0.082-0.011-0.164-0.034-0.243   l-1.598-5.737c-0.109-0.392-0.457-0.662-0.859-0.686L19.572,25.752z M11.556,33.953l0.569-2.187l0.543,1.862   c-0.148,0.168-0.241,0.386-0.241,0.626v12.614l-0.487,1.004l-0.383-0.931V33.953z M12.819,50.413l1.413-2.911   c0.063-0.129,0.096-0.271,0.096-0.415V35.133l2.239-0.176v11.457c0,0.153,0.037,0.304,0.108,0.439l1.489,2.857v18.169   c-1.325-0.013-2.795-0.022-4.29-0.022c-0.362,0-0.709,0.001-1.055,0.002V50.413z M33.159,79.643   c-3.036,0.258-13.651,1.051-27.189,0.887l0.222-10.652c1.915-0.08,4.493-0.12,7.682-0.12c3.582,0,7.027,0.052,8.625,0.081v4.695   c0,0.253,0.101,0.494,0.279,0.673s0.429,0.256,0.674,0.277l6.78-0.021c0.517-0.002,0.936-0.416,0.945-0.932   c0.446-0.108,1.074-0.258,1.873-0.444L33.159,79.643z M46.125,69.138l19.046-0.015l-0.043,2.847   C62.081,71.328,53.479,69.619,46.125,69.138z M83.366,81.451c-0.118,0.003-11.864,0.229-13.531,0.229   c-0.984,0-2.181-0.155-2.949-0.274l0.188-12.368c1.84-0.147,4.853-0.221,8.98-0.221c6.82,0,14.786,0.207,17.398,0.28l0.559,11.62   C89.446,81.385,83.439,81.451,83.366,81.451z">
                                    </path>
                                </svg>
                                <h3 class="fs9-1 mb-3"> United Kingdom </h3>
                                <a class="" href="https://maps.app.goo.gl/9R53oyPk71tp5HST7" target="_blank">
                                    <span><i class="fa-solid fa-location-dot text-purple"></i></span>
                                    <p>35 Stockwell Green, SW9 9HZ, London</p>
                                </a>

                            </div>

                        </div>
                    </div>
                </section>
                <footer class="text-center text-lg-start bg-footer text-muted">

                    <!-- Section: Links  -->

                    <section class="">
                        <div class="container text-center text-lg-start ">
                            <!-- Grid row -->
                            <div class="row py-5 gap-lg-0 gap-5">
                                <!-- Grid column -->
                                <div class="col-lg-4 pe-lg-5">
                                    <!-- Content -->
                                    <img src="https://riztechnology.com/assets/images/logo/footerLogo.png" alt="">
                                    <p class="py-3 footerContent">
                                        Riz Technology is wholeheartedly committed to establishing a distinguished
                                        reputation as a
                                        premier provider of dependable and cutting-edge IT solutions and services. Our
                                        expertise
                                        lies in delivering innovative, customized IT solutions designed to address the
                                        ever-changing
                                        demands of modern businesses while ensuring sustainable growth, long-term value,
                                        and
                                        operational&nbsp;excellence.
                                    </p>
                                    <div class="social-icons">
                                        <a href="https://www.linkedin.com/company/riz-technology"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="https://www.facebook.com/RizTechnology"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/MyCompanyTwitter" class="ms-2"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                        <a href="https://www.instagram.com/riztechnology/" class="ms-2"><i
                                                class="fa-brands fa-instagram"></i></a>
                                        <a href="https://www.youtube.com/@Riz-Technology/community" class="ms-2"><i
                                                class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-lg-3 ">
                                    <!-- Links -->
                                    <h5 class="text-uppercase fw-bold ">
                                        Services
                                    </h5>

                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/data-centre" class="text-reset ">
                                            Data Center
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/sla-management" class="text-reset ">
                                            SLA Management
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/software-application"
                                            class="text-reset ">
                                            Software Applications
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/it-services" class="text-reset ">
                                            IT Services
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/hardware-sales-maintenance"
                                            class="text-reset ">
                                            Hardware Sales &amp; Maintenance
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/support-services"
                                            class="text-reset ">
                                            Support Services
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/system-integration-enterprise"
                                            class="text-reset ">
                                            System Integration Enterprise
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/enterprise-it-support"
                                            class="text-reset ">
                                            Enterprise IT Support
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/server-management"
                                            class="text-reset ">
                                            Server Management
                                        </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/services/power-solutions"
                                            class="text-reset ">
                                            Power Solutions

                                        </a>
                                    </p>
                                </div>
                                <!-- Grid column -->


                                <!-- Grid column -->
                                <div class="col-lg-3 ">
                                    <!-- Links -->
                                    <h5 class="text-uppercase fw-bold ">
                                        Company
                                    </h5>


                                    <p class="mt-3">
                                        <a href="https://riztechnology.com" class="text-reset ">
                                            Home</a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/about-us" class="text-reset ">
                                            About Us</a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/why-us" class="text-reset ">
                                            Why Us</a>
                                    </p>

                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/products" class="text-reset ">
                                            Products</a>
                                    </p>

                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/partners" class="text-reset ">
                                            Our Reliable Partners </a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/awards" class="text-reset ">
                                            Awards &amp; Certification</a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/gallery" class="text-reset ">
                                            Our Gallery</a>
                                    </p>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/careers" class="text-reset ">
                                            Careers</a>
                                    </p>

                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-lg-2 ">

                                    <h5 class="text-uppercase fw-bold op-0">
                                        Company
                                    </h5>
                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/our-blogs" class="text-reset ">
                                            Our Blogs</a>
                                    </p>

                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/events" class="text-reset ">
                                            Events &amp; News</a>
                                    </p>

                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/team" class="text-reset ">
                                            Team</a>
                                    </p>



                                    <p class="mt-3">
                                        <a href="https://riztechnology.com/success-stories" class="text-reset ">
                                            Success Stories</a>
                                    </p>
                                </div>
                                <!-- Grid column -->


                            </div>
                            <!-- Grid row -->
                        </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <div class="py-3 footerbottom">
                        <div class=" customContainer">
                            <div class="row pt-3">


                                <div class="col-md-8 copyright-year text-white">

                                    Copyright © <span id="currentYear">2025</span> All Right Reserved |
                                    Design &amp; Developed By
                                    <a href="https://www.fossphorus.com" class="ms-2 position-relative">
                                        <img src="https://www.fossphorus.com/signature/fp/fp-logo.png"
                                            alt="fossphorus-logo" width="25px"> Fossphorus
                                        <div class="confetti-container" id="confetti-container">
                                            <div class="confetti"
                                                style="--i: 0; --p: 0; --random: 0.10859578630022926; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 1; --p: 0.0625; --random: 0.09528349228372757; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 2; --p: 0.125; --random: 0.3444935509908913; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 3; --p: 0.1875; --random: 0.39832856025209273; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 4; --p: 0.25; --random: 0.4580602983679154; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 5; --p: 0.3125; --random: 0.9721239695331383; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 6; --p: 0.375; --random: 0.4797261912926726; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 7; --p: 0.4375; --random: 0.9731587745243918; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 8; --p: 0.5; --random: 0.9162527813467705; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 9; --p: 0.5625; --random: 0.509181567451072; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 10; --p: 0.625; --random: 0.017036130903743008; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 11; --p: 0.6875; --random: 0.7118697390989766; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 12; --p: 0.75; --random: 0.5852024739996289; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 13; --p: 0.8125; --random: 0.25624732785889537; --color: #fff;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 14; --p: 0.875; --random: 0.24427114933200322; --color: #df1f2c;">
                                            </div>
                                            <div class="confetti"
                                                style="--i: 15; --p: 0.9375; --random: 0.019043264884845534; --color: #fff;">
                                            </div>
                                        </div>
                                    </a>

                                    <style scoped="">
                                    .confetti-container {
                                        position: absolute;
                                        top: -5%;
                                        left: 15%;
                                        transform: translate(-52%, -50%);
                                        width: 100px;
                                        height: 100px;
                                        pointer-events: none;
                                        opacity: 0;
                                        transition: opacity 0.3s;
                                    }

                                    a:hover .confetti-container {
                                        opacity: 1;
                                    }

                                    .confetti {
                                        position: absolute;
                                        top: 0;
                                        left: 50%;
                                        width: calc(60px + (var(--p) * 200px) + calc(var(--random) * 10%));
                                        height: calc((var(--random) * 120px) + 170px);
                                        border-radius: 40% 90% 0 0;
                                        pointer-events: none;
                                    }

                                    .confetti:nth-child(even) {
                                        transform: scale(-1, 1);
                                        left: auto;
                                        right: 50%;
                                    }

                                    .confetti::before {
                                        content: "";
                                        display: block;
                                        width: 12px;
                                        height: 6px;
                                        background-color: var(--color);
                                        animation: confetti 2s cubic-bezier(0.5, 0, 0.5, 1) both,
                                            confetti-opacity 2s cubic-bezier(0.5, 0, 0.5, 1) both;
                                        animation-duration: calc(1.4s + (var(--random) * 0.5s));
                                        animation-delay: calc(0.6s * (var(--random) - 0.5) * 2);
                                        animation-iteration-count: infinite;
                                        offset-path: padding-box;
                                    }

                                    @keyframes confetti-opacity {
                                        0% {
                                            opacity: 0;
                                        }

                                        20%,
                                        40% {
                                            opacity: 1;
                                        }

                                        95%,
                                        100% {
                                            opacity: 0;
                                        }
                                    }

                                    @keyframes confetti {
                                        0% {
                                            offset-distance: -10%;
                                            offset-rotate: 0turn;
                                        }

                                        100% {
                                            offset-distance: 38%;
                                            offset-rotate: calc(4turn + var(--random) * 2turn);
                                        }
                                    }
                                    </style>


                                </div>
                                <div class="col-lg-4 col-md-5 text-end px-0"><a
                                        href="https://riztechnology.com/privacy-policy">Privacy
                                        Policy</a> | <a href="https://riztechnology.com/terms-and-conditions">Terms
                                        &amp;
                                        Conditions</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Copyright -->
                </footer>

            </main>



        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/ScrollTrigger.min.js"></script>
    <script src="./assets/js/smooth.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script type="text/javascript">
    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    </script>

</body>

</html>