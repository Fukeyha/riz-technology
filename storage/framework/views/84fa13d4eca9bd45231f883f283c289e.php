<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <a href="/">
                                <!-- Replace with your logo -->
                                <img src="<?php echo e(asset('assets/img/Riz-Logo-01.png')); ?>" alt="Logo" class="img-fluid" style="max-height: 80px;">
                            </a>
                        </div>

                        <!-- Laravel auth content -->
                        <?php echo e($slot); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Test\Downloads\riz-technology\riz-technology\resources\views/layouts/guest.blade.php ENDPATH**/ ?>