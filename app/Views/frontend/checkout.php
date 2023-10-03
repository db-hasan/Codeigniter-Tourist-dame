<?= $this->extend('includes/header.php') ?>

<?= $this->section('content') ?>
<section id="booking-banner">
    <div class="banner-overlay">
        <div class="text-light banner-title">
            <h1 class="">Please Make Sure Payment</h1>
        </div>
    </div>
</section>
<div id="checkout">
    <div class="container-fluid pt-5">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Checkout</h6>
            <h1 class="mb-4 title">Checkout Now</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 ps-3 checkout">
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
            <div class="col-lg-8">
                <form action="" method="post">
                    <div class="row g-4">
                        <h4 class="mb-3">Payment method</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked
                                    required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-body-secondary">First name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-body-secondary">Last name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="2020 2316 25682"
                                    required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                            <button class="w-100 btn btn-lg mb-3 singbutton" type="submit">Continue to
                                checkout</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<?= $this->include('includes/footer.php') ?>
<?= $this->endSection() ?>