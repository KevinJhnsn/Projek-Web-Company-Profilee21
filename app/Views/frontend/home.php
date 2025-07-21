<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section Enhanced -->
<section id="home" class="hero-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay="0.3s">Crafting Digital Excellence with WillPerfect Studio</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.5s">Your trusted partner for innovative web development and software solutions that drive business growth</p>
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.7s">
                        <a href="#services" class="btn btn-primary me-3">Explore Services</a>
                        <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <div class="hero-img">
                    <img src="https://i.pinimg.com/736x/e5/60/a1/e560a10150384bb607881dc0620324d6.jpg" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Enhanced -->
<section id="about" class="about-section section-padding">
    <div class="container">
        <?= $this->include('frontend/partials/about') ?>
    </div>
</section>

<!-- Services Enhanced -->
<section id="services" class="services-section section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Our Expertise</span>
                    <h2>Digital Solutions That Drive Growth</h2>
                    <p class="mt-3">Comprehensive web and software development services to transform your business</p>
                </div>
            </div>
        </div>
        <?= $this->include('frontend/partials/services') ?>
    </div>
</section>

<!-- Products Enhanced -->
<section id="products" class="products-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Our Products</span>
                    <h2>Quality Solutions</h2>
                </div>
            </div>
        </div>
        <?= $this->include('frontend/partials/products') ?>
    </div>
</section>

<!-- Portfolio Enhanced -->
<section id="portfolio" class="portfolio-section section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Our Masterpieces</span>
                    <h2>Innovative Digital Solutions</h2>
                    <p class="mt-3">Discover how we've helped businesses transform through technology</p>
                </div>
            </div>
        </div>
        <?= $this->include('frontend/partials/portfolio') ?>
    </div>
</section>

<!-- Testimonials Enhanced -->
<section id="testimonials" class="testimonials-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Client Success Stories</span>
                    <h2>Trusted by Industry Leaders</h2>
                    <p class="mt-3">Hear what our clients say about working with WillPerfect Studio</p>
                </div>
            </div>
        </div>
        <?= $this->include('frontend/partials/testimonials') ?>
    </div>
</section>

<!-- Contact Enhanced -->
<section id="contact" class="contact-section section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Let's Collaborate</span>
                    <h2>Get in Touch</h2>
                    <p class="mt-3">Ready to start your project? Contact us today for a free consultation.</p>
                </div>
            </div>
        </div>
        <?= $this->include('frontend/partials/contact') ?>
    </div>
</section>

<?= $this->endSection() ?>