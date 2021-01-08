<?php
include '../views/includes/header.php';
?>


<main class="main">
    <div class="main-container">
        <div class="main-content">
            <h1>ALTERMA.MX</h1>
            <h2>A graphic design studio, with you in mind.</h2>
            <p>Be a brand above.</p>
            <button class="main-btn"><a href="/">Know us.</a></button>
        </div>
        <div class="main-image-container">
            <img class="main-img" id='main-img' src="<?php echo URLROOT; ?>/assets/images/design.jpg" alt="design">
        </div>
    </div>
    <div class="services-section" id="services-section">
        <h1>Our Services</h1>
        <div class="services-container">
            <div class="services-card">
                <h2>Studio photoshoots.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi animi rerum eaque, veniam odio quasi officiis molestias.
                    Optio fugit assumenda nesciunt asperiores, est aliquid quibusdam cum?</p>
                <button><a class="contact-link " href="<?php echo URLROOT; ?>/views/pages/contact.php">Contact
                        Us!</a></button>
            </div>
            <div class="services-card">
                <h2>Outdoor photoshoots.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi animi rerum eaque, veniam odio quasi officiis molestias.
                    Optio fugit assumenda nesciunt asperiores, est aliquid quibusdam cum?</p>
                <button><a class="contact-link" href="<?php echo URLROOT; ?>/views/pages/contact.php">Contact
                        Us!</a></button>
            </div>
            <div class="services-card">
                <h2>Graphic Design.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi animi rerum eaque, veniam odio quasi officiis molestias.
                    Optio fugit assumenda nesciunt asperiores, est aliquid quibusdam cum?</p>
                <button><a class="contact-link" href="<?php echo URLROOT; ?>/views/pages/contact.php">Contact
                        Us!</a></button>
            </div>
        </div>
        <div class="event-container">
            <h1 class="events-title">Events</h1>
            <h3 class="year">2020</h3>
            <div class="event">
                <div class="event-left">
                    <div class="event-date">
                        <div class="date">8</div>
                        <div class="month">Jan</div>
                    </div>
                </div>
                <div class="event-right">
                    <h3 class="event-title">Conferencia Mensual</h3>
                    <div class="event-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ratione accusamus nisi,
                        nulla
                        dolore ducimus illo assumenda.
                    </div>
                    <div class="event-timing">
                        <img src="<?php echo URLROOT; ?>/images/time.png">16:00
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="event-date">
                        <div class="date">8</div>
                        <div class="month">Jan</div>
                    </div>
                </div>
                <div class="event-right">
                    <h3 class="event-title">Conferencia Mensual</h3>
                    <div class="event-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ratione accusamus nisi,
                        nulla
                        dolore ducimus illo assumenda.
                    </div>
                    <div class="event-timing">
                        <img src="<?php echo URLROOT; ?>/images/time.png"> 10:00
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="event-date">
                        <div class="date">8</div>
                        <div class="month">Jan</div>
                    </div>
                </div>
                <div class="event-right">
                    <h3 class="event-title">Conferencia Mensual</h3>
                    <div class="event-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ratione accusamus nisi,
                        nulla
                        dolore ducimus illo assumenda.
                    </div>
                    <div class="event-timing">
                        <img src="<?php echo URLROOT; ?>/images/time.png"> 10:00
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-links">
                <div class="footer-link-wrapper">
                    <div class="footer-link-items">
                        <h2>About Us</h2>
                        <a href="/">About ALTERMA.MX</a>
                        <a href="/">Testimonials</a>
                        <a href="/">Collaborations</a>
                        <a href="/">Terms of service</a>
                    </div>
                </div>
                <div class="footer-link-wrapper">
                    <div class="footer-link-items">
                        <h2>Meet us!</h2>
                        <a href="/">Owner</a>
                        <a href="/">Photographer</a>
                        <a href="/">Videographer</a>
                        <a href="/">Terms of service</a>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <div class="social-media-wrapper">
                    <div class="footer-logo">
                        <a href="/" class="" id="footer-logo">
                            <i class="fab fa-accusoft"></i>ALTERMA.MX</a>
                    </div>
                    <p class="website-rights">
                        ALTERMA.MX All rights reserved.
                    </p>
                    <div class="social-icons">
                        <a href="" class="social-icon-link" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="" class="social-icon-link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="social-icon-link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon-link" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>