<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(config('app.name', 'riz technology')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick-theme.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/utility.css')); ?>">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-white">
            <div class="container pt-2 pb-3 border-bottom">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo e(asset('assets/img/Riz-Logo-01.png')); ?>" alt="Riz Technology Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto gap-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary-light" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Why Us</a>
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

                    <a href=" Us">
                        <span> <i class="ri-mail-ai-fill me-1 fs-5"></i>
                            Contact Us</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>




    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/gsap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ScrollTrigger.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/smooth.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Test\riz\resources\views/welcome.blade.php ENDPATH**/ ?>