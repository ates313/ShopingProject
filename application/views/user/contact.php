

<?php $this->load->view('user/includes/headStyleCss'); ?>




<!-- app -->
<div id="app">
    <!-- Header -->
    <?php $this->load->view('user/includes/headerTopStyle'); ?>
    <?php $this->load->view('user/includes/headerMidStyle'); ?>
    <?php $this->load->view('user/includes/responsiveButtons'); ?>
    <?php $this->load->view('user/includes/miniCart'); ?>
    <?php $this->load->view('user/includes/headerBottomStyle'); ?>

    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Contact</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Contact-Page -->
    <div class="page-contact u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="touch-wrapper">
                        <h1 class="contact-h1">Get In Touch With Us</h1>
                        <form>
                            <div class="group-inline u-s-m-b-30">
                                <div class="group-1 u-s-p-r-16">
                                    <label for="contact-name">Your Name
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="contact-name" class="text-field" placeholder="Name">
                                </div>
                                <div class="group-2">
                                    <label for="contact-email">Your Email
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="contact-email" class="text-field" placeholder="Email">
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="contact-subject">Subject
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="contact-subject" class="text-field" placeholder="Subject">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="contact-message">Message:</label>
                                <textarea class="text-area" id="contact-message"></textarea>
                            </div>
                            <div class="u-s-m-b-30">
                                <button type="submit" class="button button-outline-secondary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="information-about-wrapper">
                        <h1 class="contact-h1">Information About Us</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, tempora, voluptate. Architecto aspernatur, culpa cupiditate deserunt dolore eos facere in, incidunt omnis quae quam quos, similique sunt tempore vel vero.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, tempora, voluptate. Architecto aspernatur, culpa cupiditate deserunt dolore eos facere in, incidunt omnis quae quam quos, similique sunt tempore vel vero.
                        </p>
                    </div>
                    <div class="contact-us-wrapper">
                        <h1 class="contact-h1">Contact Us</h1>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Location</h6>
                            <span>4441 Jett Lane</span>
                            <span>Bellflower, CA 90706</span>
                        </div>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Email</h6>
                            <span>contact@domain.com</span>
                        </div>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Telephone</h6>
                            <span>+111-444-989</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-s-p-t-80">
            <div id="map"></div>
        </div>
    </div>
    <!-- Contact-Page /- -->
    <!-- Footer -->
    <?php $this->load->view('user/includes/footerStyle'); ?>
    <!-- Footer /- -->
    <!-- Dummy Selectbox -->
    <div class="select-dummy-wrapper">
        <select id="compute-select">
            <option id="compute-option">All</option>
        </select>
    </div>
    <!-- Dummy Selectbox /- -->
    <!-- Responsive-Search -->
    <div class="responsive-search-wrapper">
        <button type="button" class="button ion ion-md-close" id="responsive-search-close-button"></button>
        <div class="responsive-search-container">
            <div class="container">
                <p>Start typing and press Enter to search</p>
                <form class="responsive-search-form">
                    <label class="sr-only" for="search-text">Search</label>
                    <input id="search-text" type="text" class="responsive-search-field" placeholder="PLEASE SEARCH">
                    <i class="fas fa-search"></i>
                </form>
            </div>
        </div>
    </div>
    <!-- Responsive-Search /- -->
</div>
<!-- app /- -->
<!-- Google-Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-MO9uPLS-ApTqYs0FpYdVG8cFwdq6apw"></script>
<!--[if lte IE 9]>
<div class="app-issue">
    <div class="vertical-center">
        <div class="text-center">
            <h1>You are using an outdated browser.</h1>
            <span>This web app is not compatible with following browser. Please upgrade your browser to improve your security and experience.</span>
        </div>
    </div>
</div>
<style> #app {
    display: none;
} </style>
<![endif]-->
<!-- NoScript -->
<noscript>
    <div class="app-issue">
        <div class="vertical-center">
            <div class="text-center">
                <h1>JavaScript is disabled in your browser.</h1>
                <span>Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser to register for Groover.</span>
            </div>
        </div>
    </div>
    <style>
    #app {
        display: none;
    }
    </style>
</noscript>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function() {
    ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<!-- Modernizr-JS -->
<script type="text/javascript" src="js/vendor/modernizr-custom.min.js"></script>
<!-- NProgress -->
<script type="text/javascript" src="js/nprogress.min.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Popper -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- ScrollUp -->
<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
<!-- Elevate Zoom -->
<script type="text/javascript" src="js/jquery.elevatezoom.min.js"></script>
<!-- jquery-ui-range-slider -->
<script type="text/javascript" src="js/jquery-ui.range-slider.min.js"></script>
<!-- jQuery Slim-Scroll -->
<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
<!-- jQuery Resize-Select -->
<script type="text/javascript" src="js/jquery.resize-select.min.js"></script>
<!-- jQuery Custom Mega Menu -->
<script type="text/javascript" src="js/jquery.custom-megamenu.min.js"></script>
<!-- jQuery Countdown -->
<script type="text/javascript" src="js/jquery.custom-countdown.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
