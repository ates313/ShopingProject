

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
                <h2>Post Name</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?php echo base_url('u_home'); ?>">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?php echo base_url('u_blogDetail'); ?>">Post Name</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Blog-Detail-Page -->
    <div class="page-blog-detail u-s-p-t-80">
        <div class="blog-detail-wrapper">
            <h1 class="blog-post-detail-heading">Your Life is an extraordinary Adventure</h1>
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
            <div class="post-content">
                <img class="img-fluid" src="<?php echo base_url('public/user/assets/'); ?>images/blog/blog-01.jpg" alt="Blog Post 1">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore
                    <a href="">laboriosam</a> maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                </p>
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi corporis cum cumque deserunt expedita explicabo id ipsa nemo officia praesentium quidem, sed, sint soluta sunt tenetur voluptas! Quaerat, reiciendis!
                    </p>
                </blockquote>
                <p>
                    Lorem ipsum dolor
                    <a href="">sit amet</a>, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores
                    <a href="">inventore</a> laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis,
                    <a href="">voluptatem</a>, voluptatibus. Amet, dicta?
                </p>
                <p>
                    Lorem ipsum dolor sit amet,
                    <a href="#">consectetur</a> adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam
                    <a href="#">maiores</a> necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque
                    <a href="#">odit</a>
                    quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                </p>
                <p>
                    Lorem
                    <a href="#">ipsum</a> dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit
                    <a href="#">quisquam</a>
                    ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                </p>
            </div>
            <!-- Post-Social-Media -->
            <div class="post-share-wrapper u-s-m-b-25">
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
            <!-- Post-Social-Media /- -->
            <!-- Post-Tags -->
            <div class="post-tag u-s-m-b-25">
                <h3>Tags:</h3>
                <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">Life</a>
                <a href="<?php echo base_url('u_blog'); ?>" class="bl-tag u-s-m-b-8">World</a>
            </div>
            <!-- Post-Tags /- -->
            <!-- Previous-Next -->
            <div class="previous-next-wrapper u-s-m-b-25">
                <div class="previous-container">
                    <a href="<?php echo base_url('u_blogDetail'); ?>">
                        <i class="fas fa-angle-left u-s-m-r-9"></i>Previous Post</a>
                </div>
                <div class="next-container">
                    <a href="<?php echo base_url('u_blogDetail'); ?>">Next Post
                        <i class="fas fa-angle-right u-s-m-l-9"></i>
                    </a>
                </div>
            </div>
            <!-- Previous-Next /- -->
            <!-- Post-Comments -->
            <div class="blog-detail-comment u-s-m-b-50">
                <h3 class="comment-title u-s-m-b-30">6 Comments on “Your Life is an extraordinary Adventure”</h3>
                <ol class="comment-list">
                    <li>
                        <div class="comment-body">
                            <div class="comment-author-image">
                                <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/avatar.jpg" alt="avatar image">
                            </div>
                            <div class="comment-content">
                                <h3>John Doe</h3>
                                <h6>August 10, 2017 at 11:08 am</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta doloribus harum numquam provident quidem soluta. Commodi, repudiandae, voluptatem. Aliquid culpa dicta eius, esse perferendis placeat quam quas repellendus suscipit.</p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </li>
                    <li class="comment-reply">
                        <div class="comment-body">
                            <div class="comment-author-image">
                                <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/avatar.jpg" alt="avatar image">
                            </div>
                            <div class="comment-content">
                                <h3>Johnny Chen
                                    <span>Replied to</span>John Doe</h3>
                                <h6>August 10, 2017 at 11:08 am</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta doloribus harum numquam provident quidem soluta. Commodi, repudiandae, voluptatem. Aliquid culpa dicta eius, esse perferendis placeat quam quas repellendus suscipit.</p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </li>
                    <li class="comment-reply">
                        <div class="comment-body">
                            <div class="comment-author-image">
                                <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/avatar.jpg" alt="avatar image">
                            </div>
                            <div class="comment-content">
                                <h3>Rim Wu
                                    <span>Replied to</span>Johnny Chen</h3>
                                <h6>August 10, 2017 at 11:08 am</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta doloribus harum numquam provident quidem soluta. Commodi, repudiandae, voluptatem. Aliquid culpa dicta eius, esse perferendis placeat quam quas repellendus suscipit.</p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="comment-body">
                            <div class="comment-author-image">
                                <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/avatar.jpg" alt="avatar image">
                            </div>
                            <div class="comment-content">
                                <h3>Tim Doe</h3>
                                <h6>August 10, 2017 at 11:08 am</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. autem dicta doloribus harum numquam provident quidem soluta. commodi, repudiandae, voluptatem. aliquid culpa dicta eius, esse perferendis placeat quam quas repellendus suscipit.</p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="comment-body">
                            <div class="comment-author-image">
                                <img src="<?php echo base_url('public/user/assets/'); ?>images/blog/avatar.jpg" alt="avatar image">
                            </div>
                            <div class="comment-content">
                                <h3>Kim Doe</h3>
                                <h6>August 10, 2017 at 11:08 am</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta doloribus harum numquam provident quidem soluta. Commodi, repudiandae, voluptatem. Aliquid culpa dicta eius, esse perferendis placeat quam quas repellendus suscipit.</p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
            <!-- Post-Comments /- -->
            <!-- Post-Comment-Form -->
            <div class="blog-detail-post-comment u-s-m-b-25">
                <h3>Type Your Comment</h3>
                <span>Your email address will not be published. Required fields are marked *</span>
                <form>
                    <div class="u-s-m-b-30">
                        <label for="your-comment">Comment</label>
                        <textarea class="text-area" id="your-comment"></textarea>
                    </div>
                    <div class="u-s-m-b-30">
                        <label for="comment-name">Name
                            <span class="astk">*</span>
                        </label>
                        <input type="text" id="comment-name" class="text-field">
                    </div>
                    <div class="u-s-m-b-30">
                        <label for="comment-email">Email
                            <span class="astk">*</span>
                        </label>
                        <input type="text" id="comment-email" class="text-field">
                    </div>
                    <div class="u-s-m-b-30">
                        <label for="comment-website">Website</label>
                        <input type="text" id="comment-website" class="text-field">
                    </div>
                    <div class="u-s-m-b-30">
                        <button class="button button-outline-secondary w-100">Post Comment</button>
                    </div>
                </form>
            </div>
            <!-- Post-Comment-Form /- -->
        </div>
    </div>
    <!-- Blog-Detail-Page /- -->
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
