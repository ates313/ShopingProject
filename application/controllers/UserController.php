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

    public function blogDetail(){
        $this->load->view("user/blogDetail");
    }

    public function blog(){
        $this->load->view("user/blog");
    }

    public function cart(){
        $this->load->view("user/cart");
    }

    public function checkout(){
        $this->load->view("user/checkout");
    }

    public function contact(){
        $this->load->view("user/contact");
    }

    public function faq(){
        $this->load->view("user/faq");
    }

    public function cartEmpty(){
        $this->load->view("user/cartEmpty");
    }

    public function customDealPage(){
        $this->load->view("user/customDealPage");
    }

    public function lostPassword(){
        $this->load->view("user/lostPassword");
    }

    public function shopv1RootCategory(){
        $this->load->view("user/shopv1RootCategory");
    }

    public function shopv1RootCategoryCopy(){
        $this->load->view("user/shopv1RootCategoryCopy");
    }

    public function shopv2SubCategory(){
        $this->load->view("user/shopv2SubCategory");
    }

    public function shopv3SubSubCategory(){
        $this->load->view("user/shopv3SubSubCategory");
    }

    public function shopv4FilterAsCategory(){
        $this->load->view("user/shopv4FilterAsCategory");
    }

    public function shopv5ProductNotFound(){
        $this->load->view("user/shopv5ProductNotFound");
    }

    public function shopv6SearchResults(){
        $this->load->view("user/shopv6SearchResults");
    }

    public function singleProduct(){
        $this->load->view("user/singleProduct");
    }

    public function storeDirectory(){
        $this->load->view("user/storeDirectory");
    }

    public function wishlist(){
        $this->load->view("user/wishlist");
    }

    public function termsAndConditions(){
        $this->load->view("user/termsAndConditions");
    }

    public function trackOrder(){
        $this->load->view("user/trackOrder");
    }

    public function wishlistEmpty(){
        $this->load->view("user/wishlistEmpty");
    }
}