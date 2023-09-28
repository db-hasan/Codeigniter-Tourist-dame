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
<div class="container-xxl pt-5 pb-2">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Packages</h6>
            <h1 class="mb-5 title">Our Packages</h1>
        </div>
        <div class="row  g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card  h-100">
                    <img src="<?php echo base_url('public/assets/images/img2.jpg');?>" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Europe Tour</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card  h-100">
                    <img src="<?php echo base_url('public/assets/images/img1.jpg');?>" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Europe Tour</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card  h-100">
                    <img src="<?php echo base_url('public/assets/images/img3.jpg');?>" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Europe Tour</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This codsfdsfntent is a little This codsfdsfntent is a littbit longer.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Packages End -->


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>