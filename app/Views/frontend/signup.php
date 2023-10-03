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
    <div id="signin">
        <div class="d-flex justify-content-center align-middle p-3 sign-overlay">
            <div class="card singin">
                <img src="<?php echo base_url('public/assets/images/login.webp');?>" class="card-img-top card-img"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title py-4">Sing In</h5>
                    <form action="" method="post">
                        <div class="from-group mb-3 d-md-flex">
                            <div class="w-50 d-flex justify-content-start pe-3">
                                <input type="text" class="form-control" placeholder="First Name" require>
                            </div>
                            <div class="w-50 d-flex justify-content-end ps-3">
                                <input type="text" class="form-control" placeholder="Last name" require>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" require>
                        </div>
                        <div class="from-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" require id="">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Phone Number" require>
                        </div>
                        <div class="from-group mb-3 d-md-flex">
                            <div class="w-50 d-flex justify-content-start pe-3">
                                <input type="text" class="form-control" placeholder="1234 Main St" require>
                            </div>
                            <div class="w-50 d-flex justify-content-end ps-3">
                                <input type="text" class="form-control" placeholder="Bogura" require>
                            </div>
                        </div>
                        <div class="from-group mb-3 d-md-flex">
                            <div class="w-100 d-flex justify-content-start ">
                                <input type="checkbox" class="rememberbutton">
                                <label class="rememberbutton" for="">I'm Agree <a href="">Terms & Conditions</a></label>
                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <button type="submit" class="btn w-100 singbutton"><a href="/">Create Account and
                                    Continue</a></button>
                        </div>
                    </form>
                    <p class="signup-login">I've account? <a href="/signup"><strong>login Now</strong></a></p>
                </div>
            </div>
        </div>
    </div>


    <script src=" <?php echo base_url('public/assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src=" <?php echo base_url('public/assets/js/main.js')?>"></script>
</body>

</html>