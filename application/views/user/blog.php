

<?php $this->load->view('user/includes/headStyleCss'); ?>




<!-- app -->
<div id="app">
    <!-- Header -->
    <?php $this->load->view('user/includes/headerTopStyle'); ?>
    <?php $this->load->view('user/includes/headerMidStyle'); ?>        
    <?php $this->load->view('user/includes/miniCart'); ?>
    <?php $this->load->view('user/includes/headerBottomStyle'); ?>

    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Blog</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?php echo base_url('u_home'); ?>">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?php echo base_url('u_blog'); ?>">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Blog-Page -->
    <div class="page-blog u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <!-- Blog-Posts -->
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="<?php echo base_url('u_blogDetail'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-01.jpg" alt="Blog post 1">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="<?php echo base_url('u_blogDetail'); ?>">Your Life is an extraordinary Adventure</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="<?php echo base_url('u_blogDetail'); ?>">Admin</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="<?php echo base_url('u_blogDetail'); ?>">Comments (6)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="<?php echo base_url('u_blogDetail'); ?>" class="blog-post-read-more">Read More</a>
                    </div>
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="<?php echo base_url('u_blogDetail'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-01.jpg" alt="Blog post 2">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="<?php echo base_url('u_blogDetail'); ?>">Be More Confident in 30 Seconds</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="<?php echo base_url('u_blogDetail'); ?>">Admin</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="<?php echo base_url('u_blogDetail'); ?>">Comments (4)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="<?php echo base_url('u_blogDetail'); ?>" class="blog-post-read-more">Read More</a>
                    </div>
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="<?php echo base_url('u_blogDetail'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-01.jpg" alt="Blog post 3">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="<?php echo base_url('blogDetail'); ?>">Bury A Body With Me</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="<?php echo base_url('u_blogDetail'); ?>">Admin</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="<?php echo base_url('u_blogDetail'); ?>">Comments (2)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="<?php echo base_url('u_blogDetail'); ?>" class="blog-post-read-more">Read More</a>
                    </div>
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="<?php echo base_url('u_blogDetail'); ?>">
                                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-01.jpg" alt="Blog post 4">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="<?php echo base_url('u_blogDetail'); ?>">Everything Must Die</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="<?php echo base_url('u_blogDetail'); ?>">John Doe</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="<?php echo base_url('u_blogDetail'); ?>">Comments (0)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="<?php echo base_url('u_blogDetail'); ?>" class="blog-post-read-more">Read More</a>
                    </div>
                    <!-- Blog-Posts /- -->
                    <!-- Blog-Posts-Pagination -->
                    <div class="blog-pagination u-s-m-b-80">
                        <ul class="blog-pg-list">
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link d-none">Back</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link bl-pg-link-hover-a bl-pg-link-is-active">1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link bl-pg-link-hover-a">2</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link bl-pg-link-hover-a">3</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link bl-pg-link-hover-gap">......</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link bl-pg-link-hover-a">4</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>" class="bl-pg-link bl-pg-link-hover-b">Previous</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog-Posts-Pagination /- -->
                </div>
                <div class="col-lg-3 col-md-3">
                    <!-- Blog-Sidebar-Search -->
                    <div class="bl-sidebar-widget u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Search</h3>
                        <form class="group-text-blog-search">
                            <label class="sr-only" for="blog-search">Search On Blog</label>
                            <input type="text" id="blog-search" class="text-field" placeholder="Type to search">
                            <button type="submit" class="button fas fa-search"></button>
                        </form>
                    </div>
                    <!-- Blog-Sidebar-Search /- -->
                    <!-- Blog-Sidebar-Category -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Categories</h3>
                        <ul class="bl-sidebar-list">
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">Corporate</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">Creative</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">Design</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">News</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">Photography</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog-Sidebar-Category /- -->
                    <!-- Blog-Sidebar-Archive -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Archives</h3>
                        <ul class="bl-sidebar-list">
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">March 2017 (1)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">December 2017 (3)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">November 2017 (4)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">September 2017 (1)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('u_blog'); ?>">August 2014 (1)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog-Sidebar-Archive /- -->
                    <!-- Blog-Sidebar-Recent-Post -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Recent Post</h3>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">
                                    <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-recent.jpg" alt="recent post 1">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">Your Life is an extraordinary Adventure</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">
                                    <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-recent.jpg" alt="recent post 2">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">Be More Confident in 30 Seconds</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">
                                    <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-recent.jpg" alt="recent post 3">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">Bury A Body With Me</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">
                                    <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-recent.jpg" alt="recent post 4">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">Everything Must Die</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">
                                    <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-recent.jpg" alt="recent post 5">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="<?php echo base_url('u_blogDetail'); ?>">See A World in Grain Of Sand</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Blog-Sidebar-Recent-Post /- -->
                    <!-- Blog-Sidebar-Tag -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Tags</h3>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Life</a>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Creative</a>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Ui/Ux</a>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Design</a>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Branding</a>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">World</a>
                        <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Print</a>
                    </div>
                    <!-- Blog-Sidebar-Tag /- -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog-Page /- -->
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
