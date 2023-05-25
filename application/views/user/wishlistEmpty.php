

<?php $this->load->view('user/includes/headStyleCss'); ?>




<!-- app -->
<div id="app">
    <!-- Wishlist-Page -->
    <div class="page-wishlist">
        <div class="vertical-center">
            <div class="text-center">
                <h1>Em
                    <i class="fas fa-child"></i>ty!</h1>
                <h5>No Products were added to the wishlist.</h5>
                <div class="redirect-link-wrapper u-s-p-t-25">
                    <a class="redirect-link" href="shop-v1-root-category.html">
                        <span>Return to Shop</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Wishlist-Page /- -->
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
