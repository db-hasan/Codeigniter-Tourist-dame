<?= $this->extend('includes/header.php') ?>

<?= $this->section('content') ?>
<section id="service-banner">
    <div class="banner-overlay">
        <div class="text-light banner-title">
            <h1 class="">Service</h1>
        </div>
    </div>
</section>

<!-- Service Start -->
<section class="container-xxl pt-5" id="service">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Services</h6>
            <h1 class="mb-4 title">Our Services</h1>
        </div>
    </div>
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-6 pb-3">
                <img src="<?php echo base_url('public/assets/images/travel.jpg');?>" class="card-img-top h-100 rounded"
                    alt="...">
            </div>
            <div class="col-md-6 pb-3">
                <h2 class="sub-title">Transport & Travel Service</h2>
                <p class="service-content">For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft
                    of a thoughtfully
                    designed spacious room with all the necessary availabilities that will surely ensure your peace of
                    mind during the stay. The en-suite bath gives you homelike comfort with the availability of hot:</p>
                <ul class="amenities">
                    <li><span>✓</span> Welcome Drink</li>
                    <li><span>✓</span> AC Transport</li>
                    <li><span>✓</span> Wi-Fi</li>
                    <li><span>✓</span> Newspaper</li>
                    <li><span>✓</span> Breakfast</li>
                </ul>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 pb-3">
                <h2 class="sub-title">5* Resort & Food Service</h2>
                <p class="service-content">For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft
                    of a thoughtfully
                    designed spacious room with all the necessary availabilities that will surely ensure your peace of
                    mind during the stay. The en-suite bath gives you homelike comfort with the availability of hot:</p>
                <ul class="amenities">
                    <li><span>✓</span> Welcome Drink</li>
                    <li><span>✓</span> Fruit Basket</li>
                    <li><span>✓</span> Newspaper</li>
                    <li><span>✓</span> Swimming Pool</li>
                    <li><span>✓</span> Health Club</li>
                    <li><span>✓</span> Wi-Fi</li>
                    <li><span>✓</span> Breakfast</li>
                    <li><span>✓</span> Buffet Dinner</li>
                    <li><span>✓</span> Buffet Dinner</li>
                </ul>
            </div>
            <div class="col-md-6 pb-3">
                <img src="<?php echo base_url('public/assets/images/resort.jpg');?>" class="card-img-top h-100 rounded"
                    alt="...">
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 pb-3">
                <img src="<?php echo base_url('public/assets/images/health.avif');?>" class="card-img-top h-100 rounded"
                    alt="...">
            </div>
            <div class="col-md-6 pb-3">
                <h2 class="sub-title">Health & Social Safety</h2>
                <p class="service-content">For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft
                    of a thoughtfully
                    designed spacious room with all the necessary availabilities that will surely ensure your peace of
                    mind during the stay. The en-suite bath gives you homelike comfort with the availability of hot
                    water and modern bath-fittings. A wardrobe to give space to your clothes, a telephone for emergency
                    access, comfortable couches for visitors to accompany you over a coffee, and high-speed internet
                    access that gives wings to your work.Deluxe Single:</p>
                <ul class="amenities">
                    <li><span>✓</span> First Aid Box</li>
                    <li><span>✓</span> Pressure Machine</li>
                    <li><span>✓</span> Medicine</li>
                    <li><span>✓</span> Travel Guides</li>
                    <li><span>✓</span> Security Guard</li>
                </ul>
            </div>
        </div>
    </div>

</section>
<!-- Service End -->


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>