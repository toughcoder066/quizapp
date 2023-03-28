

<!-- <div class="whole-content"> -->
    <!-- navigation -->
    <?php
    require_once 'controller/navigation.php';
    ?>

    <!-- search -->
    
    <!-- banner -->
    <div class="banner" id="banner">
        <div class="banner-image"></div>
    <!-- banner elements -->
        <div class="banner-info">
            <h1 class="banner-title">
                <?php echo $appname;?>
            </h1>
            <ul class="banner-sub-box">
                <li class="banner-sub-title">Create .</li>
                <li class="banner-sub-title"> Learn .</li>
                <li class="banner-sub-title"> Discover</li>
            </ul> 
        </div>
    </div>
    
    
    <!-- main heading -->
    <div class="heading-type-lg heading-background">
        <p class="top-note container container-md">
            Our platform is used in over 120 countries with over 25% of Ghanaian students logged in 24/7
        </p>
    </div>
    
    <!-- testimonials -->
    <section class="testimonial">
        <div class="testimonial-wrapper container container-md">
            <div class="testi-card heading-type-md">
                We are here to make the world <br>a better place,<br> 
                with higly customized quiz sets<br>
                check out our testimonials ... <!--→-->
            </div>

            <!-- testimonial swiper section  -->
            <div class="user-testimonial" style="">
                <div class="testimonial-slider">
                    <div class="swiper-wrapper">
        
                        <div class="swiper-slide">        
                            <div class="testimonial-text">
                                I have used <?php echo $appname?> for a year
                                now and im happy to say its the
                                best out there
                            </div>
                            <p class="testifier">- Naomi Queenster</p>
                            <div class="testi-image-1 t-i-control"></div>
                        </div>

                        <div class="swiper-slide">        
                            <div class="testimonial-text">
                                Exam preparation has never been
                                this easy with <?php echo $appname?>. take 
                                out the middle man. Quizapp makes you your own admin
                            </div>
                            <p class="testifier">- Mark Newman</p>
                            <div class="testi-image-2 t-i-control"></div>
                        </div>

                        <div class="swiper-slide">        
                            <div class="testimonial-text">
                                An easy interface which makes it 
                                easy to remember what you learnt
                            </div>
                            <p class="testifier">- Leorio Guillermo</p>
                            <div class="testi-image-3 t-i-control"></div>
                        </div>
                    </div>
                    <div class="testi-swiper-pagination"></div>
                </div>
            </div>
            
            <!-- end swiper section  -->
        </div>
    </section>
    <div class="vertical-spacer"></div>

    <!-- global  -->
    <section class="fortune-500">
        <div class="head-wrapper container container-md width-control">
            <h3 class="heading-type-md">
                Integrated . By . Leading . Industries
            </h3><br>
            <p class="text-block-type-sm">
                QuizApp has gained massive popularity among top 
                industry players like microsoft, google, airbnb. 
                This trust establishes <?php echo $appname?> as an industry standard
            </p>
        </div><br>
        <div class="f-500-logo container">
            <img src="assets/images/microsoft.e0f8e35.svg">
            <!-- <img src="assets/images/ge.cd9c77d.svg"> -->
            <img src="assets/images/airbnb.b4ccb67.svg">
            <img src="assets/images/automatic.96cc1d6.svg">
        </div>
    </section><br><br>
    <div class="vertical-spacer"></div>
    
    <!-- call to action -->
    <section class="get-started">
        <div class="head-wrapper width-control container container-md">
            <h3 class="heading-type-md">
                Get . Started . Its . Easy
            </h3><br>
            <p class="text-block-type-sm">
                Hook up to our platform in three easy steps. 
                creating an account is as simple as three clicks
            </p>
        </div><br>

        <div class="get-started-wrapper container container-md">
            <div class="get-started-card">
                <div class="easy-card">
                    <div class="easy-pic-1"></div>
                    <div class="card-num">1</div> 
                </div>

                <div class="easy-card-footer">
                    <h4 class="heading-type-sm">
                        Sign Up For Free
                    </h4><br>
                    <p class="text-block-type-sm">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Maxime beatae omnis reiciendis nesciunt minima, molestias 
                        molestiae impedit blanditiis veritatis mollitia, officiis 
                    </p>
                </div>
            </div>

            <div class="get-started-card">
                <div class="easy-card">
                    <div class="easy-pic-2"></div>
                    <div class="card-num">2</div> 
                </div>

                <div class="easy-card-footer">
                    <h4 class="heading-type-sm">
                        Login To Start Creating
                    </h4><br>
                    <p class="text-block-type-sm">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Maxime beatae omnis reiciendis nesciunt minima, molestias 
                        molestiae impedit blanditiis veritatis mollitia, officiis 
                    </p>
                </div>
            </div>

            <div class="get-started-card">
                <div class="easy-card">
                    <div class="easy-pic-3"></div>
                    <div class="card-num">3</div> 
                </div>

                <div class="easy-card-footer">
                    <h4 class="heading-type-sm">
                        Share Your Results
                    </h4><br>
                    <p class="text-block-type-sm">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Maxime beatae omnis reiciendis nesciunt minima, molestias 
                        molestiae impedit blanditiis veritatis mollitia, officiis 
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- categories -->
    <section class="category container">
        <div class="categories text-block-type-sm">
            Over <span style="font-weight:bold">100+</span> Categories & Subjects to choose from
        </div>
        <div class="vertical-spacer"></div>
        <div class="subject container">
            <div class="grid-box"><img src="assets/images/app/cat/books.png" alt="books"><p>Law</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/shoot.png" alt="shoot"><p>Sports</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/countries.png" alt="countries"><p>Countries</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/history.png" alt="shoot"><p>Politics</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/microscope.png" alt="shoot"><p>science</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/math.png" alt="shoot"><p>Maths</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/religious.png" alt="shoot"><p>Religion</p></div>
            <div class="grid-box"><img src="assets/images/app/cat/court.png" alt="shoot"><p>History</p></div>
        </div>
    </section><br>
    
    <!-- services -->
    <section class="services">
        <div class="s-wrap head-wrapper container container-md width-control">
            <h3 class="heading-type-md">
                There's . Something . For . Everyone
            </h3><br>
            <p class="text-block-type-sm ">
                Whether you are a student, 
                tutor or recruitment professional, 
                QuizApp has you covered.
            </p>
        </div><br>
        <div class="vertical-spacer"></div>

        <div class="services-container container">
            <!-- swiper carousel -->
            <div class="swiper">
                <div class="swiper-wrapper">
    
                    <div class="services-card swiper-slide">        
                        <div class="services-pic-1"></div>
                        <div class="services-card-footer">
                            <h3 class="heading-type-sm">
                                Recruiters
                            </h3>
                            <div class="text-block-type-sm recruit-text">
                                Recruiters can benefit from a tailored set of quiz 
                                to determine applicant suitability
                            </div>
                        </div>
                    </div>
    
                    <div class="services-card swiper-slide">        
                        <div class="services-pic-2"></div>
                        <div class="services-card-footer">
                            <h3 class="heading-type-sm">
                                Students
                            </h3>
                            <div class="text-block-type-sm recruit-text">
                                Students can create quick quizes 
                                in a very short time
                            </div>
                        </div>
                    </div>
            
                    <div class="services-card swiper-slide">        
                        <div class="services-pic-3"></div>
                        <div class="services-card-footer">
                            <h3 class="heading-type-sm">
                                Teachers
                            </h3>
                            <div class="text-block-type-sm recruit-text">
                                Teachers can test students rapidly on any academic topic  
                                All they have to do is just create the sets.
                            </div>
                        </div>
                    </div>
    
                </div>
                <!-- swiper buttons -->
                <div class="swiper-button-prev swiper-controls"></div>
                <div class="swiper-button-next swiper-controls"></div>
                <div class="swiper-pagination"></div>
    
            </div>
        </div>
    </section>
    <img src="assets/images/curve4.svg" alt="">
    <div class="vertical-spacer"></div>

    <!-- end heading -->
    <div class="foot-note container container-md">
        <div class="container">
            Sign Up Today!
        </div>
        <div class="vertical-spacer-lg"></div>
        <div class="top-note lg">
            Let's Make Learning Fun
        </div>
        
        <div class="vertical-spacer-lg"></div>
        <a href="#banner" class='btn blue-btn'>
            Get Started
        </a>
    </div><br>
    <div class="vertical-spacer-lg"></div>


    <!-- footer -->
    <footer>
        <div class="footer-wrapper container container-md">
            <div id="logo-section">
                <div class=""><?php echo $appname?></div>
                <div class="follow-us">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                </div>
            </div>
            <div class="help-links">
                <ul>
                    <li><strong>Blog</strong></li>
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Partnerships</a></li>
                    <li><a href="#">Articles</a></li>
                </ul>
            </div>
            <div class="terms-of-service">
                <ul>
                    <li><strong>Company</strong></li>
                    <li><a href="#">careers</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">terms of service</a></li>
                    <li></li>
                </ul>
            </div>
            <div class="terms-of-service">
                <ul>
                    <li><strong>Resource</strong></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">Learning hub</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <ul>
                <li><?php echo $appname?> App copyright &copy;2023</li>
            </ul>
        </div>
    </footer>
    
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main-bundle.js"></script>
</body>
</html>