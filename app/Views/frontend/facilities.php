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

<!-- facilities Start -->
<div class="container-xxl pt-5 pb-5" id='facilities'>
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Facilities</h6>
            <h1 class="mb-5 title">Our Facilities</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card  h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>WorldWide Tours</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class=" card h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="facilities-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum at elitr sed ipsujusto dolor sed clita amet diam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- facilities End -->


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>