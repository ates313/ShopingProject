

<?php $this->load->view('user/includes/headStyleCss'); ?>



<!-- app -->
<div id="app">
    <!-- Header -->
    
        <?php $this->load->view('user/includes/headerTopStyle'); ?>
        <!-- Mid-Header -->
        <div class="full-layer-mid-header">
            <div class="container">
                <div class="row clearfix align-items-center">
                    <div class="col-lg-3 col-md-9 col-sm-6">
                        <div class="brand-logo text-lg-center">
                            <a href="<?php echo base_url('u_home'); ?>">
                                <img src="<?php echo base_url('public/user/assets/'); ?>images/main-logo/groover-branding-1.png" alt="Groover Brand Logo" class="app-brand-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 u-d-none-lg">
                        <form class="form-searchbox">
                            <label class="sr-only" for="search-landscape">Search</label>
                            <input id="search-landscape" type="text" class="text-field" placeholder="Search everything">
                            <div class="select-box-position">
                                <div class="select-box-wrapper select-hide">
                                    <label class="sr-only" for="select-category">Choose category for search</label>
                                    <select class="select-box" id="select-category">
                                        <option selected="selected" value="">
                                            All
                                        </option>
                                        <option value="">Men's Clothing</option>
                                        <option value="">Women's Clothing
                                        </option>
                                        <option value="">Toys Hobbies & Robots
                                        </option>
                                        <option value="">Mobiles & Tablets
                                        </option>
                                        <option value="">Consumer Electronics
                                        </option>
                                        <option value="">Books & Audible
                                        </option>
                                        <option value="">Beauty & Health
                                        </option>
                                        <option value="">Furniture Home & Office
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <button id="btn-search" type="submit" class="button button-primary fas fa-search"></button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <nav>
                            <ul class="mid-nav g-nav">
                                <li class="u-d-none-lg">
                                    <a href="<?php echo base_url('u_home'); ?>">
                                        <i class="ion ion-md-home u-c-brand"></i>
                                    </a>
                                </li>
                                <li class="u-d-none-lg">
                                    <a href="<?php echo base_url('u_wishlist'); ?>">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a id="mini-cart-trigger">
                                        <i class="ion ion-md-basket"></i>
                                        <span class="item-counter">4</span>
                                        <span class="item-price">$220.00</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mid-Header /- -->
        <!-- Responsive-Buttons -->
        <div class="fixed-responsive-container">
            <div class="fixed-responsive-wrapper">
                <button type="button" class="button fas fa-search" id="responsive-search"></button>
            </div>
            <div class="fixed-responsive-wrapper">
                <a href="<?php echo base_url('u_wishlist'); ?>">
                    <i class="far fa-heart"></i>
                    <span class="fixed-item-counter">4</span>
                </a>
            </div>
        </div>
        <!-- Responsive-Buttons /- -->
        <!-- Mini Cart -->
        <div class="mini-cart-wrapper">
            <div class="mini-cart">
                <div class="mini-cart-header">
                    YOUR CART
                    <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
                </div>
                <ul class="mini-cart-list">
                    <li class="clearfix">
                        <a href="<?php echo base_url('u_singleProduct'); ?>">
                            <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="<?php echo base_url('u_singleProduct'); ?>">
                            <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Black Rock Dress with High Jewelery Necklace</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="<?php echo base_url('u_singleProduct'); ?>">
                            <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Xiaomi Note 2 Black Color</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="<?php echo base_url('u_singleProduct'); ?>">
                            <img src="<?php echo base_url('public/user/assets/'); ?>images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Dell Inspiron 15</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                </ul>
                <div class="mini-shop-total clearfix">
                    <span class="mini-total-heading float-left">Total:</span>
                    <span class="mini-total-price float-right">$220.00</span>
                </div>
                <div class="mini-action-anchors">
                    <a href="<?php echo base_url("u_cart"); ?>" class="cart-anchor">View Cart</a>
                    <a href="<?php echo base_url('u_checkout'); ?>" class="checkout-anchor">Checkout</a>
                </div>
            </div>
        </div>
        <!-- Mini Cart /- -->
        <!-- Bottom-Header -->
        <div class="full-layer-bottom-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="v-menu">
                            <span class="v-title">
                                <i class="ion ion-md-menu"></i>
                                All Categories
                                <i class="fas fa-angle-down"></i>
                            </span>
                            <nav>
                                <div class="v-wrapper">
                                    <ul class="v-list animated fadeIn">
                                        <li class="js-backdrop">
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-md-shirt"></i>
                                                Men's Clothing
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">T-Shirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Hoodies</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Suits</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<? echo base_url('u_shopv4FilterAsCategory'); ?>">Black Bean T-Shirt
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Outwear</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jackets</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Trench</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Parkas</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Sweaters</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Accessories</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Watches</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Ties</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Scarves</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Belts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Bottoms</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Casual Pants
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shoes</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jeans</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shorts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Underwear</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Boxers</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Briefs</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Robes</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Socks</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Sunglasses</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Pilot</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Wayfarer</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Square</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Round</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="js-backdrop">
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-ios-shirt"></i>
                                                Women's Clothing
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Blouses & Shirts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">T-shirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Sweater</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Intimates</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Bras</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Brief Sets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Bustiers & Corsets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Panties</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Wedding & Events
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Wedding Dresses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Evening Dresses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Prom Dresses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Flower Dresses
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Bottoms</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Skirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shoes</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Leggings</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jeans</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Outwear & Jackets
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Blazers</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Basics Jackets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Trench</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Leather & Suede
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Accessories</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Sunglasses</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Headwear</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Baseball Caps
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Belts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="js-backdrop">
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-md-rocket"></i>
                                                Toys Hobbies & Robots
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Helicopter
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Lego Robots
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Car
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Boat
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Robot
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Multi Rotor Parts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">FPV System
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Radios & Receiver
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Battery & Charger
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Solar Energy
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Solar Powered Toy
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Solar Powered System
                                                                        </a>
                                                                    </li>
                                                                    <li class="view-more-flag">
                                                                        <a href="#">View More
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Remember layer image should be place on empty space and its not overlap your list items because user could not read your list items. -->
                                                <div class="v-image" style="bottom: 0;right: -25px">
                                                    <a href="#" class="d-block">
                                                        <img src="<?php echo base_url('public/user/assets/'); ?>images/banners/mega-3.png" class="img-fluid" alt="Product">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-md-phone-portrait"></i>
                                                Mobiles & Tablets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-md-tv"></i>
                                                Consumer Electronics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-ios-book"></i>
                                                Books & Audible
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-md-heart"></i>
                                                Beauty & Health
                                            </a>
                                        </li>
                                        <li class="v-none" style="display: none">
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">
                                                <i class="ion ion-md-easel"></i>
                                                Furniture Home & Office
                                            </a>
                                        </li>
                                        <li>
                                            <a class="v-more">
                                                <i class="ion ion-md-add"></i>
                                                <span>View More</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <ul class="bottom-nav g-nav u-d-none-lg">
                            <li>
                                <a href="<?php echo base_url("u_customDealPage"); ?>">New Arrivals
                                    <span class="superscript-label-new">NEW</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("u_customDealPage"); ?>">Exclusive Deals
                                    <span class="superscript-label-hot">HOT</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("u_customDealPage"); ?>">Flash Deals
                                </a>
                            </li>
                            <li class="mega-position">
                                <a>Pages
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <div class="mega-menu mega-3-colm">
                                    <ul>
                                        <li class="menu-title">Home & Static Pages</li>
                                        <li>
                                            <a href="<?php echo base_url('home'); ?>" class="u-c-brand">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('about'); ?>">About</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_contact'); ?>">Contact</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_faq'); ?>">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("u_storeDirectory"); ?>">Store Directory</a>
                                        </li>
                                        <li class="menu-title">Single Product Page</li>
                                        <li>
                                            <a href="<?php echo base_url("u_singleProduct"); ?>">Single Product Fullwidth</a>
                                        </li>
                                        <li class="menu-title">Blog</li>
                                        <li>
                                            <a href="<?php echo base_url('u_blog'); ?>">Blog Page</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("u_blogDetail"); ?>">Blog Details</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="menu-title">Ecommerce Pages</li>
                                        <li>
                                            <a href="<?php echo base_url("u_cart"); ?>">Cart</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("u_checkout"); ?>">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("u_account"); ?>">My Account</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("u_wishlist"); ?>">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("u_track_order"); ?>">Track your Order</a>
                                        </li>
                                        <li class="menu-title">Cart Variations</li>
                                        <li>
                                            <a href="<?php echo base_url("u_cart"); ?>">Cart Ver 2 Full</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('u_wishlist'); ?>">Wishlist Ver 2 Full</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo base_url("u_customDealPage"); ?>">Super Sale
                                    <span class="superscript-label-discount">-15%</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom-Header /- -->
    </header>
    <!-- Header /- -->
    <!-- Main-Slider -->
    <div class="default-height ph-item">
        <div class="slider-main owl-carousel">
            <div class="bg-image one">
                <div class="slide-content slide-animation">
                    <h1>Casual Clothing</h1>
                    <h2>lifestyle / clothing / hype</h2>
                </div>
            </div>
            <div class="bg-image two">
                <div class="slide-content-2 slide-animation">
                    <h2 class="slide-2-h2-a">Hiking</h2>
                    <h2 class="slide-2-h2-b">Collection</h2>
                    <h1>2018</h1>
                </div>
            </div>
            <div class="bg-image three">
                <div class="slide-content slide-animation">
                    <h1>Tech
                        <span style="color:#333">Deals</span>
                    </h1>
                    <h2 style="color:#333"># shopping</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-Slider /- -->
    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
                <a href="<?php echo base_url('u_shopv1RootCategory'); ?>" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/banners/bannerlayer-1.jpg" alt="Winter Season Banner">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->
    <!-- Men-Clothing -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">MEN'S CLOTHING</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#men-latest-products">Latest Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="men-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv4SubSubCategory'); ?>">T-Shirts</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black Bean Plain Men T-Shirt</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Suits</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black Maire Full Men Suit</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="s<?php echo base_url('u_shopv1RootCategory'); ?>">Men's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Outwear</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jackets</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Woodsmoke Rookie Parka Jacket</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Ties</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Blue Zodiac Boxes Reg Tie
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Zambezi Carved Leather Business Casual Shoes
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                        </div>
                        <div class="tab-pane fade" id="men-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="men-top-rating-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Suits</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black Maire Full Men Suit</a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jackets</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Woodsmoke Rookie Parka Jacket</a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Ties</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Blue Zodiac Boxes Reg Tie</a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Zambezi Carved Leather Business Casual Shoes
                                                    </a>
                                                </h6>
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
                        </div>
                        <div class="tab-pane fade" id="men-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Men-Clothing-Timing-Section -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <span class="sec-maker-span-text">Men's Clothing</span>
                <h3 class="sec-maker-h3 u-s-m-b-22">Hot Deals</h3>
                <span class="sec-maker-span-text">Ends in</span>
                <!-- Timing-Box -->
                <div class="section-timing-wrapper dynamic">
                    <span class="fictitious-seconds" style="display:none;">18000</span>
                    <div class="section-box-wrapper box-days">
                        <div class="section-box">
                            <span class="section-key">120</span>
                            <span class="section-value">Days</span>
                        </div>
                    </div>
                    <div class="section-box-wrapper box-hrs">
                        <div class="section-box">
                            <span class="section-key">54</span>
                            <span class="section-value">HRS</span>
                        </div>
                    </div>
                    <div class="section-box-wrapper box-mins">
                        <div class="section-box">
                            <span class="section-key">3</span>
                            <span class="section-value">MINS</span>
                        </div>
                    </div>
                    <div class="section-box-wrapper box-secs">
                        <div class="section-box">
                            <span class="section-key">32</span>
                            <span class="section-value">SEC</span>
                        </div>
                    </div>
                </div>
                <!-- Timing-Box /- -->
            </div>
            <!-- Carousel -->
            <div class="slider-fouc">
                <div class="products-slider owl-carousel" data-item="4">
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
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jackets</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Maire Battlefield Jeep Men's Jacket</a>
                                </h6>
                                <div class="item-stars">
                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                        <span style='width:0'></span>
                                    </div>
                                    <span>(0)</span>
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
                        <div class="tag hot">
                            <span>HOT</span>
                        </div>
                    </div>
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
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Jackets</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Fern Green Men's Jacket</a>
                                </h6>
                                <div class="item-stars">
                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                        <span style='width:0'></span>
                                    </div>
                                    <span>(0)</span>
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
                        <div class="tag hot">
                            <span>HOT</span>
                        </div>
                    </div>
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
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Sunglasses</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Round</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Brown Dark Tan Round Double Bridge Sunglasses</a>
                                </h6>
                                <div class="item-stars">
                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                        <span style='width:0'></span>
                                    </div>
                                    <span>(0)</span>
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
                        <div class="tag hot">
                            <span>HOT</span>
                        </div>
                    </div>
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
                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Sunglasses</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Round</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black Round Double Bridge Sunglasses</a>
                                </h6>
                                <div class="item-stars">
                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                        <span style='width:0'></span>
                                    </div>
                                    <span>(0)</span>
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
                        <div class="tag hot">
                            <span>HOT</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel /- -->
        </div>
    </section>
    <!-- Men-Clothing-Timing-Section /- -->
    <!-- Banner-Image & View-more -->
    <div class="banner-image-view-more">
        <div class="container">
            <div class="image-banner u-s-m-y-40">
                <a href="<?php echo base_url('u_shopv1RootCategory'); ?>" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/banners/ban-men.jpg" alt="Banner Image">
                </a>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="#">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Banner-Image & View-more /- -->
    <!-- Men-Clothing /- -->
    <!-- Women-Clothing -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">WOMEN'S CLOTHING</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#women-latest-products">Latest Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#women-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#women-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#women-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="women-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">White Solitude Dress with mid heel & Bag
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black Rock Dress with High Jewelery Necklace
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Haiti Full Dress with Boots & Jacket</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Black & White Wrap Dress with High Jewelery Necklace</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Grey Nickel Special Occasion Dress</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Red Carmine Winter Special Occasion Dress
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Wax Flower with Corn Silk Heel
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Intimates</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Bras</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Red Wild Bra
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                        </div>
                        <div class="tab-pane fade" id="women-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="women-top-rating-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Grey Nickel Special Occasion Dress</a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Red Carmine Winter Special Occasion Dress
                                                    </a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Wax Flower with Corn Silk Heel</a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Intimates</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Bras</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Red Wild Bra</a>
                                                </h6>
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
                        </div>
                        <div class="tab-pane fade" id="women-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="#">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Women-Clothing /- -->
    <!-- Toys-Hobbies-&-Robots -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Toys Hobbies & Robots</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#toys-latest-products">Latest Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#toys-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#toys-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#toys-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="toys-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Helicopte</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">RC Helicopter 6-Cell</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Phantom with 1080p Camera</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Inspire with 1080p Camera</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Phantom with Battery Lights</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Mavic Air
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">U45 Raven RC Quadcopter
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Inspire 1 with 1080p Camera
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Inspire 1 with 360° Camera
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                        </div>
                        <div class="tab-pane fade" id="toys-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="toys-top-rating-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Mavic Air
                                                    </a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">U45 Raven RC Quadcopter
                                                    </a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Inspire 1 with 1080p Camera</a>
                                                </h6>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">DJI Inspire 1 with 360° Camera</a>
                                                </h6>
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
                        </div>
                        <div class="tab-pane fade" id="toys-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="#">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Toys-Hobbies-&-Robots /- -->
    <!-- Mobiles-&-Tablets -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Mobiles & Tablets</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#mobiles-latest-products">Latest Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mobiles-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mobiles-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mobiles-featured-products">Featured Products</a>
                    </li>
                </ul>
                <span class="sec-maker-span-text u-s-m-b-8 d-block">Select products in specific category</span>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="mobiles-latest-products">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-12">
                                    <ul class="nav tab-nav-style-2-a">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#smart-phones" title="Smart Phones">
                                                <i class="ion ion-ios-phone-portrait"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tablets" title="Tablets">
                                                <i class="ion ion-md-phone-landscape"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#smart-watches" title="Smart Watches">
                                                <i class="ion ion-md-watch"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#device-accessories" title="Device Accessories">
                                                <i class="ion ion-md-settings"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#power-banks" title="Power Banks">
                                                <i class="ion ion-md-battery-charging"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-11 col-md-12">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="smart-phones">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>s">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Xiaomi Note 2 Black Color
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Iphone X Silver Color</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Samsung S7 Green Metallic Color
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Sony Xperia 3 Black Color
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                        </div>
                                        <div class="tab-pane fade" id="tablets">
                                            <!-- Product Not Found -->
                                            <div class="product-not-found">
                                                <div class="not-found">
                                                    <h2>SORRY!</h2>
                                                    <h6>There is not any product in specific catalogue.</h6>
                                                </div>
                                            </div>
                                            <!-- Product Not Found /- -->
                                        </div>
                                        <div class="tab-pane fade" id="smart-watches">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Outatime Mix Smartwatch
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Mombo Full Wrist Smartwatch
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Apollo Sport Think Smartwatch
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Rhythm Pulse Smartwatch
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                        </div>
                                        <div class="tab-pane fade" id="device-accessories">
                                            <!-- Product Not Found -->
                                            <div class="product-not-found">
                                                <div class="not-found">
                                                    <h2>SORRY!</h2>
                                                    <h6>There is not any product in specific catalogue.</h6>
                                                </div>
                                            </div>
                                            <!-- Product Not Found /- -->
                                        </div>
                                        <div class="tab-pane fade" id="power-banks">
                                            <!-- Product Not Found -->
                                            <div class="product-not-found">
                                                <div class="not-found">
                                                    <h2>SORRY!</h2>
                                                    <h6>There is not any product in specific catalogue.</h6>
                                                </div>
                                            </div>
                                            <!-- Product Not Found /- -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mobiles-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="mobiles-top-rating-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="mobiles-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="#">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Mobiles-&-Tablets /- -->
    <!-- Consumer-Electronics -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Consumer Electronics</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#consumer-latest-products">Latest Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#consumer-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#consumer-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#consumer-featured-products">Featured Products</a>
                    </li>
                </ul>
                <span class="sec-maker-span-text u-s-m-b-8 d-block">Select products in specific category</span>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="consumer-latest-products">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-12">
                                    <ul class="nav tab-nav-style-2-a">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#laptops" title="Laptops">
                                                <i class="ion ion-md-laptop"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#pc-and-accessories" title="PC & Accessories">
                                                <i class="ion ion-ios-settings"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tv" title="TV's">
                                                <i class="ion ion-md-tv"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#cam-corder" title="Camera & Camcorders">
                                                <i class="ion ion-md-camera"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#audio-amplifiers" title="Audio & Amplifiers">
                                                <i class="ion ion-md-microphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-11 col-md-12">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="laptops">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">HP Pavilion 15 Notebook
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Apple Macbook Pro 2017</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Dell Inspiron 15</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Dell Inspiron 1525</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                        </div>
                                        <div class="tab-pane fade" id="pc-and-accessories">
                                            <!-- Product Not Found -->
                                            <div class="product-not-found">
                                                <div class="not-found">
                                                    <h2>SORRY!</h2>
                                                    <h6>There is not any product in specific catalogue.</h6>
                                                </div>
                                            </div>
                                            <!-- Product Not Found /- -->
                                        </div>
                                        <div class="tab-pane fade" id="tv">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Hisense 4k LED TV</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">TCL 4k LED TV</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Sony 4k LED TV
                                                                    </a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo base_url('u_shopv2SubCategory'); ?>">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">China Petrei 4k LED TV</a>
                                                                </h6>
                                                                <div class="item-stars">
                                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                                        <span style='width:0'></span>
                                                                    </div>
                                                                    <span>(0)</span>
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
                                        </div>
                                        <div class="tab-pane fade" id="cam-corder">
                                            <!-- Product Not Found -->
                                            <div class="product-not-found">
                                                <div class="not-found">
                                                    <h2>SORRY!</h2>
                                                    <h6>There is not any product in specific catalogue.</h6>
                                                </div>
                                            </div>
                                            <!-- Product Not Found /- -->
                                        </div>
                                        <div class="tab-pane fade" id="audio-amplifiers">
                                            <!-- Product Not Found -->
                                            <div class="product-not-found">
                                                <div class="not-found">
                                                    <h2>SORRY!</h2>
                                                    <h6>There is not any product in specific catalogue.</h6>
                                                </div>
                                            </div>
                                            <!-- Product Not Found /- -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="consumer-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="consumer-top-rating-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="consumer-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="#">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Consumer-Electronics /- -->
    <!-- Books-&-Audible -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Books & Audible</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#books-latest-products">Latest Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#books-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#books-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#books-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="books-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">JavaScript The Definitive Guide by David Flanagan
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Eloquent JavaScript by Marijn Haverbeke
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">Secret of the JavaScript Ninja by Bear Bibeault & John Resig
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?php echo base_url('u_singleProduct'); ?>">
                                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/product/product@3x.jpg" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="<?php echo base_url('u_singleProduct'); ?>">JavaScript The Good Parts by Douglas Crockford
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="books-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="books-top-rating-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="books-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="#">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Books-&-Audible /- -->
    <!-- Continue-Link -->
    <div class="continue-link-wrapper u-s-p-b-80">
        <a class="continue-link" href="#" title="View all products on site">
            <i class="ion ion-ios-more"></i>
        </a>
    </div>
    <!-- Continue-Link /- -->
    <!-- Brand-Slider -->
    <div class="brand-slider u-s-p-b-80">
        <div class="container">
            <div class="brand-slider-content owl-carousel" data-item="5">
                <div class="brand-pic">
                    <a href="#">
                        <img src="<?php echo base_url('public/user/assets/'); ?>images/brand-logos/b1.png" alt="Brand Logo 1">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="<?php echo base_url('public/user/assets/'); ?>images/brand-logos/b1.png" alt="Brand Logo 2">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="<?php echo base_url('public/user/assets/'); ?>images/brand-logos/b1.png" alt="Brand Logo 3">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="<?php echo base_url('public/user/assets/'); ?>images/brand-logos/b1.png" alt="Brand Logo 5">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="<?php echo base_url('public/user/assets/'); ?>images/brand-logos/b1.png" alt="Brand Logo 6">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="<?php echo base_url('public/user/assets/'); ?>images/brand-logos/b1.png" alt="Brand Logo 7">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand-Slider /- -->
    <!-- Site-Priorities -->
    <section class="app-priority">
        <div class="container">
            <div class="priority-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-star"></i>
                            </div>
                            <h2>
                                Great Value
                            </h2>
                            <p>We offer competitive prices on our 100 million plus product range</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-cash"></i>
                            </div>
                            <h2>
                                Shop with Confidence
                            </h2>
                            <p>Our Protection covers your purchase from click to delivery</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-ios-card"></i>
                            </div>
                            <h2>
                                Safe Payment
                            </h2>
                            <p>Pay with the world’s most popular and secure payment methods</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-contacts"></i>
                            </div>
                            <h2>
                                24/7 Help Center
                            </h2>
                            <p>Round-the-clock assistance for a smooth shopping experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site-Priorities /- -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Outer-Footer -->
            <div class="outer-footer-wrapper u-s-p-y-80">
                <h6>
                    For special offers and other discount information
                </h6>
                <h1>
                    Subscribe to our Newsletter
                </h1>
                <p>
                    Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.
                </p>
                <form class="newsletter-form">
                    <label class="sr-only" for="newsletter-field">Enter your Email</label>
                    <input type="text" id="newsletter-field" placeholder="Your Email Address">
                    <button type="submit" class="button">SUBMIT</button>
                </form>
            </div>
            <!-- Outer-Footer /- -->
            <!-- Mid-Footer -->
            <div class="mid-footer-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>CUSTOMER SERVICE</h6>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('u_faq'); ?>">FAQs</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("u_termsAndConditions"); ?>">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>COMPANY</h6>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('u_home'); ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('u_about'); ?>">About</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('u_contact'); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>INFORMATION</h6>
                            <ul>
                                <li>
                                    <a href="#">Categories Directory</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('u_wishlist'); ?>">My Wishlist</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("u_cart"); ?>">My Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>Address</h6>
                            <ul>
                                <li>
                                    <i class="fas fa-location-arrow u-s-m-r-9"></i>
                                    <span>819 Sugar Camp Road, West Concord, MN 55985</span>
                                </li>
                                <li>
                                    <a href="tel:+923086561801">
                                        <i class="fas fa-phone u-s-m-r-9"></i>
                                        <span>+111-444-989</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:contact@domain.com">
                                        <i class="fas fa-envelope u-s-m-r-9"></i>
                                        <span>
                                            contact@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mid-Footer /- -->
            <!-- Bottom-Footer -->
            <div class="bottom-footer-wrapper">
                <div class="social-media-wrapper">
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
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="copyright-text">Copyright &copy; 2018
                    <a href="<?php echo base_url('u_home'); ?>">Groover</a> All Right Reserved</p>
            </div>
        </div>
        <!-- Bottom-Footer /- -->
    </footer>
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
    <!-- Newsletter-Modal -->
    
    <!-- Newsletter-Modal /- -->
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
                                            <a href="<?php echo base_url('u_singleProduct'); ?>">Casual Hoodie Full Cotton</a>
                                        </h1>
                                    </div>
                                    <ul class="bread-crumb">
                                        <li class="has-separator">
                                            <a href="<?php echo base_url('u_home'); ?>">Home</a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="<?php echo base_url('u_shopv1RootCategory'); ?>">Men's Clothing</a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="<?php echo base_url('u_shopv2SubCategory'); ?>>Tops</a>
                                        </li>
                                        <li class="is-marked">
                                            <a href="<?php echo base_url('u_shopv3SubSubCategory'); ?>">Hoodies</a>
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
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/vendor/modernizr-custom.min.js"></script>
<!-- NProgress -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/nprogress.min.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/bootstrap.min.js"></script>
<!-- Popper -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/popper.min.js"></script>
<!-- ScrollUp -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.scrollUp.min.js"></script>
<!-- Elevate Zoom -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.elevatezoom.min.js"></script>
<!-- jquery-ui-range-slider -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery-ui.range-slider.min.js"></script>
<!-- jQuery Slim-Scroll -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.slimscroll.min.js"></script>
<!-- jQuery Resize-Select -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.resize-select.min.js"></script>
<!-- jQuery Custom Mega Menu -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.custom-megamenu.min.js"></script>
<!-- jQuery Countdown -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/jquery.custom-countdown.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/owl.carousel.min.js"></script>
<!-- Main -->
<script type="text/javascript" src="<?php echo base_url('public/user/assets/'); ?>js/app.js"></script>
</body>
</html>
