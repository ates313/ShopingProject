

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
                <h2>New Arrivals</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?php echo base_url('u_home'); ?>">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?php echo base_url('u_costumDealPage'); ?>">New Arrivals</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Custom-Deal-Page -->
    <div class="page-deal u-s-p-t-80">
        <div class="container">
            <div class="deal-page-wrapper">
                <h1 class="deal-heading">New Arrivals</h1>
                <h6 class="deal-has-total-items">27 Items</h6>
            </div>
            <!-- Page-Bar -->
            <div class="page-bar clearfix">
                <div class="shop-settings">
                    <a id="list-anchor">
                        <i class="fas fa-th-list"></i>
                    </a>
                    <a id="grid-anchor" class="active">
                        <i class="fas fa-th"></i>
                    </a>
                </div>
                <!-- Toolbar Sorter 1  -->
                <div class="toolbar-sorter">
                    <div class="select-box-wrapper">
                        <label class="sr-only" for="sort-by">Sort By</label>
                        <select class="select-box" id="sort-by">
                            <option selected="selected" value="">Sort By: Best Selling</option>
                            <option value="">Sort By: Latest</option>
                            <option value="">Sort By: Lowest Price</option>
                            <option value="">Sort By: Highest Price</option>
                            <option value="">Sort By: Best Rating</option>
                        </select>
                    </div>
                </div>
                <!-- //end Toolbar Sorter 1  -->
                <!-- Toolbar Sorter 2  -->
                <div class="toolbar-sorter-2">
                    <div class="select-box-wrapper">
                        <label class="sr-only" for="show-records">Show Records Per Page</label>
                        <select class="select-box" id="show-records">
                            <option selected="selected" value="">Show: 8</option>
                            <option value="">Show: 16</option>
                            <option value="">Show: 28</option>
                        </select>
                    </div>
                </div>
                <!-- //end Toolbar Sorter 2  -->
            </div>
            <!-- Page-Bar /- -->
            <!-- Row-of-Product-Container -->
            <div class="row product-container grid-style">
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Hoodies</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Casual Hoodie Full Cotton</a>
                                </h6>
                                <div class="item-description">
                                    <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening. Throughout the U.S., it is common for middle-school, high-school, and college students to wear this sweatshirts—with or without hoods—that display their respective school names or mascots across the chest, either as part of a uniform or personal preference.
                                    </p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                        <div class="tag new">
                            <span>NEW</span>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">T-Shirts</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Mischka Plain Men T-Shirt</a>
                                </h6>
                                <div class="item-description">
                                    <p>T-shirts with bold slogans were popular in the UK in the 1980s. T-shirts were originally worn as undershirts, but are now worn frequently as the only piece of clothing on the top half of the body, other than possibly a brassiere or, rarely, a waistcoat (vest). T-shirts have also become a medium for self-expression and advertising, with any imaginable combination of words, art and photographs on display.</p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>.html">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shopv4FilterAsCategory'); ?>">T-Shirts</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black Bean Plain Men T-Shirt</a>
                                </h6>
                                <div class="item-description">
                                    <p>T-shirts with bold slogans were popular in the UK in the 1980s. T-shirts were originally worn as undershirts, but are now worn frequently as the only piece of clothing on the top half of the body, other than possibly a brassiere or, rarely, a waistcoat (vest). T-shirts have also become a medium for self-expression and advertising, with any imaginable combination of words, art and photographs on display.</p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>"">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Bottoms</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jeans</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Regular Rock Blue Men Jean</a>
                                </h6>
                                <div class="item-description">
                                    <p>Traditionally, jeans were dyed to a blue color using natural indigo dye. Most denim is now dyed using synthetic indigo. Approximately 20 thousand tons of indigo are produced annually for this purpose, though only a few grams of the dye are required for each pair. For other colors of denim other dyes must be used. Currently, jeans are produced in any color that can be achieved with cotton.
                                    </p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                        <div class="tag new">
                            <span>NEW</span>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shop3SubSubCategory'); ?>">Suits</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.html">Black Maire Full Men Suit</a>
                                </h6>
                                <div class="item-description">
                                    <p>British dandy Beau Brummell redefined and adapted this style, then popularised it, leading European men to wearing well-cut, tailored clothes, adorned with carefully knotted neckties. The simplicity of the new clothes and their sombre colours contrasted strongly with the extravagant, foppish styles just before. Brummell's influence introduced the modern era of men's clothing which now includes the modern suit and necktie.</p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                        <div class="tag sale">
                            <span>SALE</span>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Outwear</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shop3SubSubCategory'); ?>">Jackets</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.html">Woodsmoke Rookie Parka Jacket</a>
                                </h6>
                                <div class="item-description">
                                    <p>A parka or anorak is a type of coat with a hood, often lined with fur or faux fur. The Caribou Inuit invented this kind of garment, originally made from caribou or seal skin, for hunting and kayaking in the frigid Arctic. Some Inuit anoraks require regular coating with fish oil to retain their water resistance.</p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="single-product.html">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="shop-v1-root-category.html">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="shop-v2-sub-category.html">Accessories</a>
                                    </li>
                                    <li>
                                        <a href="shop-v3-sub-sub-category.html">Ties</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.html">Blue Zodiac Boxes Reg Tie
                                    </a>
                                </h6>
                                <div class="item-description">
                                    <p>A necktie, or simply a tie, is a long piece of cloth, worn usually by men, for decorative purposes around the neck, resting under the shirt collar and knotted at the throat.</p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="single-product.html">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                            </a>
                            <div class="item-action-behaviors">
                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="shop-v1-root-category.html">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="shop-v2-sub-category.html">Bottoms</a>
                                    </li>
                                    <li>
                                        <a href="shop-v3-sub-sub-category.html">Shoes</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.html">Zambezi Carved Leather Business Casual Shoes
                                    </a>
                                </h6>
                                <div class="item-description">
                                    <p>Dress shoes are characterized by smooth and supple leather uppers, leather soles, and narrow sleek figure. Casual shoes are characterized by sturdy leather uppers, non-leather outsoles, and wide profile. Some designs of dress shoes can be worn by either gender. The majority of dress shoes have an upper covering, commonly made of leather, enclosing most of the lower foot, but not covering the ankles.</p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    $55.00
                                </div>
                                <div class="item-old-price">
                                    $60.00
                                </div>
                            </div>
                        </div>
                        <div class="tag discount">
                            <span>-15%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row-of-Product-Container /- -->
            <!-- Shop-Pagination -->
            <div class="pagination-area">
                <div class="pagination-number">
                    <ul>
                        <li style="display: none">
                            <a href="shop-v1-root-category.html" title="Previous">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="active">
                            <a href="shop-v1-root-category.html">1</a>
                        </li>
                        <li>
                            <a href="shop-v1-root-category.html">2</a>
                        </li>
                        <li>
                            <a href="shop-v1-root-category.html">3</a>
                        </li>
                        <li>
                            <a href="shop-v1-root-category.html">...</a>
                        </li>
                        <li>
                            <a href="shop-v1-root-category.html">10</a>
                        </li>
                        <li>
                            <a href="shop-v1-root-category.html" title="Next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Shop-Pagination /- -->
        </div>
    </div>
    <!-- Custom-Deal-Page -->
    <!-- Footer -->
    <    <?php $this->load->view('user/includes/footerStyle'); ?>
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
    <!-- Quick-view-Modal -->
    <div id="quick-view" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="button dismiss-button ion ion-ios-close" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- Product-zoom-area -->
                            <div class="zoom-area">
                                <img id="zoom-pro-quick-view" class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg" alt="Zoom Image">
                                <div id="gallery-quick-view" class="u-s-m-t-10">
                                    <a class="active" data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                        <img src="images/product/product@2x.jpg" alt="Product">
                                    </a>
                                    <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                        <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@2x.jpg" alt="Product">
                                    </a>
                                    <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                        <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@2x.jpg" alt="Product">
                                    </a>
                                    <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                        <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@2x.jpg" alt="Product">
                                    </a>
                                    <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                        <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@2x.jpg" alt="Product">
                                    </a>
                                    <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                        <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@2x.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <!-- Product-zoom-area /- -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- Product-details -->
                            <div class="all-information-wrapper">
                                <div class="section-1-title-breadcrumb-rating">
                                    <div class="product-title">
                                        <h1>
                                            <a href="single-product.html">Casual Hoodie Full Cotton</a>
                                        </h1>
                                    </div>
                                    <ul class="bread-crumb">
                                        <li class="has-separator">
                                            <a href="home.html">Home</a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="shop-v1-root-category.html">Men's Clothing</a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="shop-v2-sub-category.html">Tops</a>
                                        </li>
                                        <li class="is-marked">
                                            <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                        </li>
                                    </ul>
                                    <div class="product-rating">
                                        <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                            <span style='width:67px'></span>
                                        </div>
                                        <span>(23)</span>
                                    </div>
                                </div>
                                <div class="section-2-short-description u-s-p-y-14">
                                    <h6 class="information-heading u-s-m-b-8">Description:</h6>
                                    <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening. Throughout the U.S., it is common for middle-school, high-school, and college students to wear this sweatshirts—with or without hoods—that display their respective school names or mascots across the chest, either as part of a uniform or personal preference.
                                    </p>
                                </div>
                                <div class="section-3-price-original-discount u-s-p-y-14">
                                    <div class="price">
                                        <h4>$55.00</h4>
                                    </div>
                                    <div class="original-price">
                                        <span>Original Price:</span>
                                        <span>$60.00</span>
                                    </div>
                                    <div class="discount-price">
                                        <span>Discount:</span>
                                        <span>8%</span>
                                    </div>
                                    <div class="total-save">
                                        <span>Save:</span>
                                        <span>$5</span>
                                    </div>
                                </div>
                                <div class="section-4-sku-information u-s-p-y-14">
                                    <h6 class="information-heading u-s-m-b-8">Sku Information:</h6>
                                    <div class="availability">
                                        <span>Availability:</span>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="left">
                                        <span>Only:</span>
                                        <span>50 left</span>
                                    </div>
                                </div>
                                <div class="section-5-product-variants u-s-p-y-14">
                                    <h6 class="information-heading u-s-m-b-8">Product Variants:</h6>
                                    <div class="color u-s-m-b-11">
                                        <span>Available Color:</span>
                                        <div class="color-variant select-box-wrapper">
                                            <select class="select-box product-color">
                                                <option value="1">Heather Grey</option>
                                                <option value="3">Black</option>
                                                <option value="5">White</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sizes u-s-m-b-11">
                                        <span>Available Size:</span>
                                        <div class="size-variant select-box-wrapper">
                                            <select class="select-box product-size">
                                                <option value="">Male 2XL</option>
                                                <option value="">Male 3XL</option>
                                                <option value="">Kids 4</option>
                                                <option value="">Kids 6</option>
                                                <option value="">Kids 8</option>
                                                <option value="">Kids 10</option>
                                                <option value="">Kids 12</option>
                                                <option value="">Female Small</option>
                                                <option value="">Male Small</option>
                                                <option value="">Female Medium</option>
                                                <option value="">Male Medium</option>
                                                <option value="">Female Large</option>
                                                <option value="">Male Large</option>
                                                <option value="">Female XL</option>
                                                <option value="">Male XL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                                    <form action="#" class="post-form">
                                        <div class="quick-social-media-wrapper u-s-m-b-22">
                                            <span>Share:</span>
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
                                        <div class="quantity-wrapper u-s-m-b-22">
                                            <span>Quantity:</span>
                                            <div class="quantity">
                                                <input type="text" class="quantity-text-field" value="1">
                                                <a class="plus-a" data-max="1000">&#43;</a>
                                                <a class="minus-a" data-min="1">&#45;</a>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="button button-outline-secondary" type="submit">Add to cart</button>
                                            <button class="button button-outline-secondary far fa-heart u-s-m-l-6"></button>
                                            <button class="button button-outline-secondary far fa-envelope u-s-m-l-6"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Product-details /- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view-Modal /- -->
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
