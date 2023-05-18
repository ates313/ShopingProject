

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
                <h2>Terms</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="terms-and-conditions.html">Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Terms-&-Conditions-Page -->
    <div class="page-term u-s-p-t-80">
        <div class="container">
            <div class="term u-s-m-b-50">
                <h1>Terms & Conditions</h1>
                <h1>Please read our “Terms & Conditios” very carefully and learn our all rules.</h1>
                <p>These rules were modified on 9 April 2018.</p>
            </div>
            <ul class="term-list">
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dicta dolorum eius enim iusto maiores natus nostrum quis voluptatibus? Ad illum ipsum libero officia quis quos ratione reiciendis rem?
                </li>
            </ul>
        </div>
    </div>
    <!-- Terms-&-Conditions-Page /- -->
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
