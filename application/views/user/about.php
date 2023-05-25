

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
                <h2>About</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?php echo base_url('u_home'); ?>">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?php echo base_url('u_about'); ?>">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- About-Page -->
    <div class="page-about u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-me-info u-s-m-b-30">
                        <h1>Welcome to
                            <span>Groover</span>
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, delectus, modi? Accusamus fuga itaque laborum modi nam ullam vel veniam! Beatae consectetur debitis ipsa ipsam iusto provident quod. Sit, voluptatum!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ea, earum eum eveniet ex, expedita id molestias nisi perspiciatis saepe vero voluptas voluptatum. Id, illum ipsum iste laboriosam placeat quo.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, delectus, modi? Accusamus fuga itaque laborum modi nam ullam vel veniam! Beatae consectetur debitis ipsa ipsam iusto provident quod. Sit, voluptatum!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ea, earum eum eveniet ex, expedita id molestias nisi perspiciatis saepe vero voluptas voluptatum. Id, illum ipsum iste laboriosam placeat quo.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, delectus, modi? Accusamus fuga itaque laborum modi nam ullam vel veniam! Beatae consectetur debitis ipsa ipsam iusto provident quod. Sit, voluptatum!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ea, earum eum eveniet ex, expedita id molestias nisi perspiciatis saepe vero voluptas voluptatum. Id, illum ipsum iste laboriosam placeat quo.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-me-image u-s-m-b-30">
                        <div class="banner-hover effect-border-scaling-gray">
                            <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/about/about-1.jpg" alt="About Picture">
                        </div>
                    </div>
                    <div class="about-social text-center u-s-m-b-30">
                        <ul class="social-media-list">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-rss"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-Page /- -->
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
<?php $this->load->view('user/includes/footerScript'); ?>
