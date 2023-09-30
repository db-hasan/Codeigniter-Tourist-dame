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
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 px-5">
                <form action="" method="post" id="booking">
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">location</h6>
                                <small class="text-body-secondary">Resort Name</small>
                            </div>
                            <span class="text-body-secondary">Canada</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Package</h6>
                                <small class="text-body-secondary">Room Type</small>
                            </div>
                            <span class="text-body-secondary">Regular Package</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">List of Person</h6>
                                <small class="text-body-secondary">Add Person</small>
                            </div>
                            <input type="text" class="form-control" placeholder="">
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>Brief description</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-danger booking-btn">Danger</button>
                        <button type="button" class="btn btn-outline-success booking-btn">Success</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="row pb-5">
                    <div class="col service-images">
                        <img src="<?php echo base_url('public/assets/images/travel.jpg');?>" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="col">
                        <h2 class="sub-title">Regular Package</h2>
                        <p>For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft of a
                            thoughtfully
                        </p>
                        <ul class="amenities">
                            <li><span>✓</span> Welcome Drink</li>
                            <li><span>✓</span> AC Transport</li>
                            <li><span>✓</span> Wi-Fi</li>
                            <li><span>✓</span> Newspaper</li>
                            <li><span>✓</span> Breakfast</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">Regular Package</div>
                                    <div class="col-sm-6">Price : $50</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">Couple Package</div>
                                    <div class="col-sm-6">Price : $90</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">Family Package</div>
                                    <div class="col-sm-6">Price : Up to $130</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">Group Package</div>
                                    <div class="col-sm-6">Price : Up to $130</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">Business Package</div>
                                    <div class="col-sm-6">Price : Up to $140</div>
                                </div>
                            </div>
                        </div> -->

    <script src=" <?php echo base_url('public/assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src=" <?php echo base_url('public/assets/js/main.js')?>"></script>
</body>

</html>