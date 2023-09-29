<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('public/assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div id='header'>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand brand" href="/">
                    <h1><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class='col-md-12'>
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/service">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/package">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/facilities">Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/booking">Booking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <?= $this->renderSection('content') ?>

    <script src=" <?php echo base_url('public/assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src=" <?php echo base_url('public/assets/js/main.js')?>"></script>
</body>

</html>