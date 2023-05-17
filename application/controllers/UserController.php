<?php

class UserController extends CI_Controller{
    public function home(){
        $this->load->view("user/home");
    }

    public function about(){
        $this->load->view("user/about");
    }

    public function account(){
        $this->load->view("user/account");
    }

    public function blog_detail(){
        $this->load->view("user/blog-detail");
    }

    public function blog(){
        $this->load->view("user/blog");
    }

    public function cart_empty(){
        $this->load->view("user/cart-empty");
    }

    public function cart(){
        $this->load->view("user/cart");
    }

    public function checkout(){
        $this->load->view("user/checkout");
    }

    public function confirmation(){
        $this->load->view("user/confirmation");
    }

    public function contact(){
        $this->load->view("user/contact");
    }

    public function custom_deal_page(){
        $this->load->view("user/custom-deal-page");
    }

    public function faq(){
        $this->load->view("user/faq");
    }

    public function home_html(){
        $this->load->view("user/home-html");
    }

    public function lost_password(){
        $this->load->view("user/lost-password");
    }

    public function shop_v1_root_categoryCopy(){
        $this->load->view("user/shop-v1-root-category copy");
    }
    public function shop_v1_root_category(){
        $this->load->view("user/shop-v1-root-category");
    }

    public function shop_v2_sub_category(){
        $this->load->view("user/shop-v2-sub-category");
    }

    public function shop_v3_sub_sub_category(){
        $this->load->view("user/shop-v3-sub-sub-category");
    }

    public function shop_v4_filter_as_category(){
        $this->load->view("user/shop-v4-filter-as-category");
    }

    public function shop_v5_product_not_found(){
        $this->load->view("user/shop-v5-product-not-found");
    }

    public function shop_v6_search_results(){
        $this->load->view("user/shop-v6-search-results");
    }

    public function single_product(){
        $this->load->view("user/single-product");
    }

    public function store_directory(){
        $this->load->view("user/store-directory");
    }

    public function terms_and_conditions(){
        $this->load->view("user/terms-and-conditions");
    }

    public function track_order(){
        $this->load->view("user/track-order");
    }

    public function wishlist_empty(){
        $this->load->view("user/wishlist-empty");
    }

    public function wishlist(){
        $this->load->view("user/wishlist");
    }
}