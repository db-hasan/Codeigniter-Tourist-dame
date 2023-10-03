<?= $this->extend('includes/header.php') ?>

<?= $this->section('content') ?>
<section id="booking-banner">
    <div class="banner-overlay">
        <div class="text-light banner-title">
            <h1 class="">Enjoy Your Vacation With Us</h1>
        </div>
    </div>
</section>
<div id="booking">
    <div class="container-fluid pt-5">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Packages</h6>
            <h1 class="mb-4 title">Choose Packages</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 ps-3">
                <form action="" method="post">
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
                    <div class="input-group pb-3">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 add-package">
                <div class="custom-scrollbar">
                    <div class="scroll-content">
                        <div class="row py-3 ">
                            <div class="col-sm-4 pb-3">
                                <img src="<?php echo base_url('public/assets/images/single.jpg');?>"
                                    class="card-img-top h-100 rounded" alt="...">
                            </div>
                            <div class="col-sm-8 pb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="booking-sub-title">Regular Package</h2>
                                    <div class="pe-3">
                                        <button type="submit" class="btn btn-outline-success">Add Now</button>
                                    </div>
                                </div>
                                <ul class="amenities mb-0">
                                    <li><span>✓</span> Welcome Drink</li>
                                    <li><span>✓</span> AC Transport</li>
                                    <li><span>✓</span> Wi-Fi</li>
                                    <li><span>✓</span> Newspaper</li>
                                    <li><span>✓</span> Breakfast</li>
                                </ul>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="package-price">Price: <span> $350</span></h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row py-3">
                            <div class="col-sm-4 pb-3">
                                <img src="<?php echo base_url('public/assets/images/doble.jpg');?>"
                                    class="card-img-top h-100 rounded" alt="...">
                            </div>
                            <div class="col-sm-8 pb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="booking-sub-title">Couple Package</h2>
                                    <div class="pe-3">
                                        <button type="submit" class="btn btn-outline-success">Add Now</button>
                                    </div>
                                </div>
                                <ul class="amenities mb-0">
                                    <li><span>✓</span> Welcome Drink</li>
                                    <li><span>✓</span> AC Transport</li>
                                    <li><span>✓</span> Wi-Fi</li>
                                    <li><span>✓</span> Newspaper</li>
                                    <li><span>✓</span> Breakfast</li>
                                </ul>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="package-price">Price: <span> $350</span></h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row py-3">
                            <div class="col-sm-4 pb-3">
                                <img src="<?php echo base_url('public/assets/images/doble.jpg');?>"
                                    class="card-img-top h-100 rounded" alt="...">
                            </div>
                            <div class="col-sm-8 pb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="booking-sub-title">Family Package</h2>
                                    <div class="pe-3">
                                        <button type="submit" class="btn btn-outline-success">Add Now</button>
                                    </div>
                                </div>
                                <ul class="amenities mb-0">
                                    <li><span>✓</span> Welcome Drink</li>
                                    <li><span>✓</span> AC Transport</li>
                                    <li><span>✓</span> Wi-Fi</li>
                                    <li><span>✓</span> Newspaper</li>
                                    <li><span>✓</span> Breakfast</li>
                                </ul>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="package-price">Price: <span> $350</span></h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row py-3">
                            <div class="col-sm-4 pb-3">
                                <img src="<?php echo base_url('public/assets/images/doble.jpg');?>"
                                    class="card-img-top h-100 rounded" alt="...">
                            </div>
                            <div class="col-sm-8 pb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="booking-sub-title">Group Package</h2>
                                    <div class="pe-3">
                                        <button type="submit" class="btn btn-outline-success">Add Now</button>
                                    </div>
                                </div>

                                <p>For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft of a
                                    thoughtfully
                                </p>
                                <ul class="amenities mb-0">
                                    <li><span>✓</span> Welcome Drink</li>
                                    <li><span>✓</span> AC Transport</li>
                                    <li><span>✓</span> Wi-Fi</li>
                                    <li><span>✓</span> Newspaper</li>
                                    <li><span>✓</span> Breakfast</li>
                                </ul>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="package-price">Price: <span> $350</span></h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row py-3">
                            <div class="col-sm-4 pb-3">
                                <img src="<?php echo base_url('public/assets/images/single.jpg');?>"
                                    class="card-img-top h-100 rounded" alt="...">
                            </div>
                            <div class="col-sm-8 pb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="booking-sub-title">Business Package</h2>
                                    <div class="pe-3">
                                        <button type="submit" class="btn btn-outline-success">Add Now</button>
                                    </div>
                                </div>
                                <ul class="amenities mb-0">
                                    <li><span>✓</span> Welcome Drink</li>
                                    <li><span>✓</span> AC Transport</li>
                                    <li><span>✓</span> Wi-Fi</li>
                                    <li><span>✓</span> Newspaper</li>
                                    <li><span>✓</span> Breakfast</li>
                                </ul>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="package-price">Price: <span> $350</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end bg-success-subtle Checkout">
        <div class="p-3">
            <button type="button" class="btn btn-outline-danger">Close</button>
        </div>
        <div class="p-3 me-3">
            <button type="button" class="btn btn-outline-success"><a class="text-decoration-none"
                    href="/signins">Checkout</a></button>
        </div>
    </div>
</div>


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>