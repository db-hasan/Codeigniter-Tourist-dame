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
        <div class="row pb-5">
            <div class="col service-images">
                <img src="<?php echo base_url('public/assets/images/travel.jpg');?>" class="card-img-top" alt="...">
            </div>
            <div class="col">
                <h2 class="sub-title">Transport & Travel Service</h2>
                <p>For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft of a thoughtfully
                    designed spacious room with all the necessary availabilities that will surely ensure your peace of
                    mind during the stay. The en-suite bath gives you homelike comfort with the availability of hot
                    water and modern bath-fittings. A wardrobe to give space to your clothes, a telephone for emergency
                    access, comfortable couches for visitors to accompany you over a coffee, and high-speed internet
                    access that gives wings to your work.Deluxe Single:</p>
                <ul class="amenities">
                    <li><span>✓</span> Welcome Drink</li>
                    <li><span>✓</span> AC Transport</li>
                    <li><span>✓</span> Wi-Fi</li>
                    <li><span>✓</span> Newspaper</li>
                    <li><span>✓</span> Breakfast</li>
                </ul>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col">
                <h2 class="sub-title">5* Resort & Food Service</h2>
                <p>For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft of a thoughtfully
                    designed spacious room with all the necessary availabilities that will surely ensure your peace of
                    mind during the stay. The en-suite bath gives you homelike comfort with the availability of hot
                    water and modern bath-fittings. A wardrobe to give space to your clothes, a telephone for emergency
                    access, comfortable couches for visitors to accompany you over a coffee, and high-speed internet
                    access that gives wings to your work.Deluxe Single:</p>
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
            <div class="col">
                <img src="<?php echo base_url('public/assets/images/resort.jpg');?>" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="row">
            <div class="col service-images">
                <img src="<?php echo base_url('public/assets/images/health.avif');?>" class="card-img-top" alt="...">
            </div>
            <div class="col">
                <h2 class="sub-title">Health & Social Safety</h2>
                <p>For a single person, this deluxe single is just a perfect fit. Enjoy 352 sqft of a thoughtfully
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

</div>
</div>
<!-- Service End -->


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>