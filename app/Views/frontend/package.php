<?= $this->extend('includes/header.php') ?>

<?= $this->section('content') ?>
<section id="banner">
    <div class="overlay">
        <div class="container">
            <div class="text-light text-center">
                <h1 class="">Enjoy Your Vacation With Us</h1>
                <p class="">Non Profit Student Organization for Skill Development</p>
            </div>
        </div>
    </div>
</section>

<!-- Packages Start -->
<div class="container-xxl p-5">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Packages</h6>
            <h1 class="mb-4 title">Our Packages</h1>
        </div>
        <div class="row  g-4">
            <div class="col-md-6 col-lg-4 ">
                <div class="card  h-100 package">
                    <img src="<?php echo base_url('public/assets/images/img3.jpg');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Europe Tour</h5>
                        <div class="row">
                            <p class="col-md-4 package-item">
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star-half-stroke rating"></i>
                                <i class="fa-regular fa-star rating"></i>
                            </p>
                            <p class="col package-item">
                                <span class="explore-price">$500-$3000</span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price">Package</span>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col package-item">
                                <span class="explore-price-box">
                                    From
                                    <span class="explore-date">10/08/1996</span>
                                </span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price-box">
                                    To Date
                                    <span class="explore-date">15/08/1996</span>
                                </span>
                            </p>
                        </div>
                        <p class="text">Travel Price Depended to Package. Please Choose a Package Before
                            <strong class="booking-date">09/08/2023</strong>
                            and Enjoy Your Vacation</p>
                        <hr>
                        <div class="row">
                            <a class="col package-status open">Open Now</a>
                            <a class="col Chose-package " href="">Choose Package</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card  h-100 package">
                    <img src="<?php echo base_url('public/assets/images/img1.jpg');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">France Tour</h5>
                        <div class="row">
                            <p class="col-md-4 package-item">
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star-half-stroke rating"></i>
                                <i class="fa-regular fa-star rating"></i>
                            </p>
                            <p class="col package-item">
                                <span class="explore-price">5$-300$</span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price">Package</span>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col package-item">
                                <span class="explore-price-box">
                                    From
                                    <span class="explore-date">10/08/1996</span>
                                </span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price-box">
                                    To Date
                                    <span class="explore-date">15/08/1996</span>
                                </span>
                            </p>
                        </div>
                        <p class="text">Travel Price Depended to Package. Please Choose a Package Before
                            <strong class="booking-date">09/08/2023</strong>
                            and Enjoy Your Vacation</p>
                        <hr>
                        <div class="row">
                            <a class="col package-status open">Open Now</a>
                            <a class="col Chose-package " href="">Choose Package</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card  h-100 package">
                    <img src="<?php echo base_url('public/assets/images/img2.jpg');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Canada Tour</h5>
                        <div class="row">
                            <p class="col package-item">
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star-half-stroke rating"></i>
                                <i class="fa-regular fa-star rating"></i>
                            </p>
                            <p class="col package-item">
                                <span class="explore-price">5$-300$</span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price">Package</span>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col package-item">
                                <span class="explore-price-box">
                                    From
                                    <span class="explore-date">10/08/1996</span>
                                </span>
                            </p>
                            <p class="col package-item last">
                                <span class="explore-price-box">
                                    To Date
                                    <span class="explore-date">15/08/1996</span>
                                </span>
                            </p>

                        </div>
                        <p class="text">Travel Price Depended to Package. Please Choose a Package Before
                            <strong class="booking-date">09/08/2023</strong>
                            and Enjoy Your Vacation</p>
                        <hr>
                        <div class="row">
                            <a class="col package-status close">Close Now</a>
                            <a class="col Chose-package " href="">Choose Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Packages End -->




<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>