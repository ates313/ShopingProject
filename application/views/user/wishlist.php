

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
                <h2>Wishlist</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="wishlist.html">Wishlist</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Wishlist-Page -->
    <div class="page-wishlist u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Products-List-Wrapper -->
                    <div class="table-wrapper u-s-m-b-60">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Stock Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-anchor-image">
                                            <a href="single-product.html">
                                                <img src="images/product/product@1x.jpg" alt="Product">
                                                <h6>Casual Hoodie Full Cotton</h6>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            $55.00
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-stock">
                                            In Stock
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <button class="button button-outline-secondary">Add to Cart</button>
                                            <button class="button button-outline-secondary fas fa-trash"></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart-anchor-image">
                                            <a href="single-product.html">
                                                <img src="images/product/product@1x.jpg" alt="Product">
                                                <h6>Black Rock Dress with High Jewelery Necklace</h6>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            $55.00
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-stock">
                                            In Stock
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <button class="button button-outline-secondary">Add to Cart</button>
                                            <button class="button button-outline-secondary fas fa-trash"></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart-anchor-image">
                                            <a href="single-product.html">
                                                <img src="images/product/product@1x.jpg" alt="Product">
                                                <h6>Xiaomi Note 2 Black Color</h6>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            $55.00
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-stock">
                                            In Stock
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <button class="button button-outline-secondary">Add to Cart</button>
                                            <button class="button button-outline-secondary fas fa-trash"></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Products-List-Wrapper /- -->
                </div>
            </div>
        </div>
    </div>
    <!-- Wishlist-Page /- -->
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
