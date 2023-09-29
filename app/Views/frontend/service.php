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

<!-- Service Start -->
<div class="container-xxl pt-4 pb-2">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Services</h6>
            <h1 class="mb-4 title">Our Services</h1>
        </div>
    </div>
    <div class="container">
        <div class="row service">
            <div class="col">
                <img src="<?php echo base_url('public/assets/images/travel.jpg');?>" class="card-img-top" alt="...">
            </div>
            <div class="col">
                <div class="title">Travel</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="title">Resort</div>
            </div>
            <div class="col">
                <img src="<?php echo base_url('public/assets/images/travel.jpg');?>" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

</div>
</div>
<!-- Service End -->


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>