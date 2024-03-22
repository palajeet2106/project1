<section class="product footer">
        <div class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="wrapper">
                            <div class="wrapper-content" data-aos="fade-up">
                                <h3 class="wrapper-title">Get <span class="inner-title">20%</span> Off Discount Coupon
                                </h3>
                                <p class="wrapper-paragraph">by Subscribe our Newsletter</p>
                            </div>

                            <div class="footer-btn" data-aos="fade-right">
                                <div class="mail">
                                    <div class="img">
                                        <span>
                                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15 14H2C1.4 14 1 13.6 1 13V2C1 1.4 1.4 1 2 1H15C15.6 1 16 1.4 16 2V13C16 13.6 15.6 14 15 14Z"
                                                    stroke="#222222" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3 4L8.5 8.5L14 4" stroke="#222222" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input type="text" placeholder="EMAIL ADDRESS">
                                </div>
                                <a href="#" class="shop-btn">Get the Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
          $res = $user ->displayAdmin();
         $row = mysqli_fetch_assoc($res); 
      ?>
        <div class="footer-center">
            <div class="container">
                <div class="footer-center-section">
                    <div class="row gy-5">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-order">
                                <div class="logo">
                                    <img src="admin/<?php echo $row['logo'] ?>" alt="logo">
                                </div>
                                <div class="footer-link order-link">
                                    <ul>
                                        <li><a href="order.php">Track Order</a></li>
                                        <li><a href="cart.php">Delivery & Returns</a></li>
                                        <li><a href="about.php">Warranty</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-us">
                                <h4 class="footer-heading footer-title">
                                    About Us
                                </h4>
                                <div class="footer-link about-link">
                                    <ul>
                                        <li><a href="about.php">Rave’s Story</a></li>
                                        <li><a href="about.php">Work With Us</a></li>
                                        <li><a href="about.php">Coporate News</a></li>
                                        <li><a href="about.php">Investors</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="links">
                                <h4 class="footer-heading footer-title">
                                    Useful Links
                                </h4>
                                <div class="footer-link useful-link">
                                    <ul>
                                        <li><a href="about.php">Secure Payment</a></li>
                                        <li><a href="privacy.php">Privacy Policy</a></li>
                                        <li><a href="terms.php">Terms of Use</a></li>
                                        <li><a href="product-sidebar.php">Archived Products</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-info">
                                <h4 class="footer-heading footer-title">
                                    Contact Info
                                </h4>
                                <div class="footer-link contact-link">
                                    <div class="address">
                                        <div class="icon">
                                            <span>
                                                <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="21.9995" cy="22.9961" r="21.5" stroke="#424242">
                                                    </circle>
                                                    <g clip-path="url(#clip0_2343_13859)">
                                                        <path
                                                            d="M22.0218 13.9961C26.4153 14.0049 29.7134 17.7202 28.8665 21.6964C28.4484 23.66 27.5123 25.4261 26.3138 27.0614C25.1774 28.6116 23.9185 30.0879 22.6867 31.5779C22.2178 32.1454 21.804 32.1262 21.3001 31.5795C19.1664 29.2642 17.2295 26.8278 15.9102 24.0253C15.3696 22.8757 14.9978 21.6836 14.9995 20.4176C15.003 16.8701 18.1568 13.9881 22.0218 13.9961ZM22.0297 30.36C22.9045 29.2763 23.7479 28.3049 24.5037 27.2782C25.8116 25.5008 26.9568 23.6407 27.4616 21.5142C28.0739 18.934 26.466 16.3499 23.7566 15.5367C21.0149 14.713 18.0326 15.9324 16.8743 18.344C16.1858 19.777 16.3188 21.2091 16.8647 22.6413C17.6756 24.7695 18.9512 26.6632 20.399 28.4655C20.8889 29.0764 21.4226 29.6576 22.0297 30.36Z"
                                                            fill="white"></path>
                                                        <path
                                                            d="M24.7977 20.4357C24.7916 21.8486 23.5204 22.9982 21.9728 22.9886C20.4567 22.9797 19.2005 21.8197 19.1987 20.4253C19.1961 19.0148 20.4664 17.85 22.0043 17.8516C23.5432 17.8532 24.8029 19.0188 24.7977 20.4357ZM23.3953 20.4213C23.3953 19.7156 22.7873 19.1481 22.021 19.1384C21.2371 19.128 20.6011 19.702 20.6011 20.4213C20.6011 21.1253 21.2109 21.6937 21.9772 21.7033C22.7663 21.7121 23.3953 21.143 23.3953 20.4213Z"
                                                            fill="white"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2343_13859">
                                                            <rect width="14" height="18" fill="white"
                                                                transform="translate(14.9995 13.9961)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>

                                        
                                        <div class="details">
                                            <h4 class="footer-heading">Address:</h4>
                                            <p><?php echo $row['address'];  ?></p>
                                        </div>
                                    </div>
                                    <div class="phone address">
                                        <div class="icon">
                                            <span>
                                                <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="21.9995" cy="22.9961" r="21.5" stroke="#424242">
                                                    </circle>
                                                    <g clip-path="url(#clip0_56_7)">
                                                        <path
                                                            d="M26.9779 30.9959C25.7937 30.9581 24.6221 30.5625 23.5005 30.0096C19.5679 28.0716 16.6582 25.1275 14.8109 21.1599C14.2944 20.0502 13.9265 18.8947 14.0112 17.6423C14.0558 16.9879 14.2937 16.4177 14.7489 15.9459C15.1954 15.4839 15.6439 15.0233 16.1124 14.5833C16.9448 13.8008 17.8545 13.7981 18.6795 14.5866C19.3846 15.2596 20.075 15.9492 20.7514 16.6514C21.5858 17.5175 21.5732 18.3743 20.7348 19.2431C20.3969 19.5935 20.051 19.9387 19.6925 20.2685C19.5419 20.4072 19.5299 20.5161 19.6205 20.692C20.257 21.9198 21.1526 22.9459 22.1916 23.8359C22.8434 24.3941 23.5884 24.8434 24.2909 25.3425C24.4555 25.46 24.5754 25.4295 24.7174 25.2814C25.1092 24.8753 25.5058 24.4704 25.9276 24.0954C26.6407 23.4616 27.5164 23.4689 28.2035 24.1259C28.9725 24.8607 29.7269 25.6113 30.4647 26.3772C31.1558 27.0953 31.1784 27.9907 30.5187 28.7333C30.0415 29.2709 29.5317 29.782 29.0105 30.2784C28.4727 30.7915 27.8003 30.9952 26.9779 30.9959ZM27.0239 30.1377C27.6637 30.1616 28.1902 29.9307 28.6247 29.4647C28.9645 29.1004 29.3198 28.7499 29.6703 28.3962C30.2688 27.7922 30.2734 27.4119 29.6796 26.8199C29.0365 26.1781 28.3921 25.5376 27.7463 24.8985C27.2265 24.3841 26.8546 24.3848 26.3241 24.9045C25.9203 25.3 25.5244 25.7036 25.1206 26.0985C24.7974 26.415 24.5148 26.4774 24.1316 26.2418C23.4165 25.8011 22.6768 25.3823 22.0303 24.8534C20.6835 23.7523 19.5132 22.4853 18.7561 20.8917C18.5062 20.3661 18.5576 20.1597 18.9861 19.7502C19.3706 19.3825 19.7545 19.0141 20.1243 18.6325C20.6122 18.1301 20.6115 17.7518 20.1237 17.2586C19.4472 16.5724 18.7641 15.8921 18.0764 15.2171C17.5952 14.7446 17.1827 14.7512 16.6922 15.2284C16.311 15.5994 15.9478 15.989 15.5586 16.3507C15.0221 16.8491 14.8255 17.4597 14.8695 18.1739C14.9275 19.117 15.2221 19.9964 15.6179 20.838C17.3853 24.5985 20.1457 27.402 23.8823 29.2424C24.8707 29.7302 25.9036 30.0959 27.0239 30.1377Z"
                                                            fill="white"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_56_7">
                                                            <rect width="17" height="17" fill="white"
                                                                transform="translate(13.9995 13.9961)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="details">
                                            <h4 class="footer-heading">Phone:</h4>
                                            <p>+91 <?php echo $row['contact'];  ?></p>
                                        </div>
                                    </div>
                                    <div class="email address">
                                        <div class="icon">
                                            <span>
                                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="22" cy="22" r="21.5" stroke="#424242"></circle>
                                                    <path
                                                        d="M22.2477 27.9994C19.9168 27.9994 17.5858 28.0001 15.2542 27.9987C14.1169 27.9981 13.5043 27.3807 13.5036 26.2358C13.5036 23.2881 13.5029 20.3398 13.5043 17.3915C13.505 16.2734 14.1258 15.6512 15.2432 15.6512C19.9394 15.6505 24.6363 15.6498 29.3325 15.6512C30.4472 15.6512 31.0652 16.2747 31.0659 17.397C31.0673 20.3453 31.0666 23.293 31.0659 26.2413C31.0652 27.3841 30.4513 27.9987 29.3098 27.9987C26.9556 28.0001 24.602 27.9994 22.2477 27.9994ZM15.307 16.7C15.4099 16.8119 15.4806 16.8955 15.5574 16.9724C17.3807 18.7861 19.2047 20.5998 21.0294 22.4128C21.8656 23.2436 22.7032 23.2449 23.538 22.4156C25.3627 20.6032 27.1861 18.7895 29.0101 16.9751C29.0876 16.8983 29.1589 16.8153 29.2659 16.7C24.5958 16.7 19.9765 16.7 15.307 16.7ZM24.8544 22.5404C24.1307 23.3417 23.4187 24.0654 22.2765 24.064C21.1337 24.0619 20.4326 23.319 19.7425 22.5795C18.2876 24.066 16.8511 25.534 15.4751 26.9403C19.9874 26.9403 24.6061 26.9403 29.1617 26.9403C27.7472 25.4956 26.3169 24.0345 24.8544 22.5404ZM18.8357 21.8716C17.413 20.4304 15.9765 18.9747 14.5627 17.5424C14.5627 20.3899 14.5627 23.2779 14.5627 26.2186C16.0342 24.7212 17.4658 23.2655 18.8357 21.8716ZM25.7338 21.7982C27.1408 23.2298 28.5752 24.6889 30.0123 26.1507C30.0123 23.2655 30.0123 20.3782 30.0123 17.4663C28.5539 18.9425 27.1209 20.394 25.7338 21.7982Z"
                                                        fill="white"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="details">
                                            <h4 class="footer-heading">Email:</h4>
                                            <p><?php echo $row['email'];  ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer-bottom-section">
                    <div class="footer-social">
                        <div class="social-items">
                            <a href="#" class="social-icon instagram">
                                <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.101 4.89551C12.6532 4.89551 13.101 4.44779 13.101 3.89551C13.101 3.34322 12.6532 2.89551 12.101 2.89551C11.5487 2.89551 11.101 3.34322 11.101 3.89551C11.101 4.44779 11.5487 4.89551 12.101 4.89551Z"
                                            fill="#ABABAB" />
                                        <path
                                            d="M7.99939 11.9971C5.79939 11.9971 3.99939 10.1971 3.99939 7.99707C3.99939 5.79707 5.79939 3.99707 7.99939 3.99707C10.1994 3.99707 11.9994 5.79707 11.9994 7.99707C11.9994 10.1971 10.1994 11.9971 7.99939 11.9971ZM7.99939 5.99707C6.89939 5.99707 5.99939 6.89707 5.99939 7.99707C5.99939 9.09707 6.89939 9.99707 7.99939 9.99707C9.09939 9.99707 9.99939 9.09707 9.99939 7.99707C9.99939 6.89707 9.09939 5.99707 7.99939 5.99707Z"
                                            fill="#ABABAB" />
                                        <path
                                            d="M11.9994 15.9971H3.99939C1.89939 15.9971 -0.000610352 14.0971 -0.000610352 11.9971V3.99707C-0.000610352 1.89707 1.89939 -0.00292969 3.99939 -0.00292969H11.9994C14.0994 -0.00292969 15.9994 1.89707 15.9994 3.99707V11.9971C15.9994 14.0971 14.0994 15.9971 11.9994 15.9971ZM3.99939 1.99707C3.09939 1.99707 1.99939 3.09707 1.99939 3.99707V11.9971C1.99939 12.9971 2.99939 13.9971 3.99939 13.9971H11.9994C12.8994 13.9971 13.9994 12.8971 13.9994 11.9971V3.99707C13.9994 3.09707 12.8994 1.99707 11.9994 1.99707H3.99939Z"
                                            fill="#ABABAB" />
                                    </svg>
                                </span>
                            </a>
                            <a href="#" class="social-icon facebook">
                                <span>
                                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.99939 15.9971V8.99707H-0.000610352V5.99707H2.99939V3.99707C2.99939 1.29707 4.69939 -0.00292969 7.09939 -0.00292969C8.29939 -0.00292969 9.19939 0.0970703 9.49939 0.0970703V2.89707H7.79939C6.49939 2.89707 6.19939 3.49707 6.19939 4.39707V5.99707H9.99939L8.99939 8.99707H6.29939V15.9971H2.99939Z"
                                            fill="#ABABAB" />
                                    </svg>
                                </span>
                            </a>
                            <a href="#" class="social-icon youtube">
                                <span>
                                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7994 2.79707C15.5994 1.49707 14.9994 0.59707 13.5994 0.39707C11.3994 -0.0029296 7.99939 -0.00292969 7.99939 -0.00292969C7.99939 -0.00292969 4.59939 -0.0029296 2.39939 0.39707C0.99939 0.59707 0.29939 1.49707 0.19939 2.79707C-0.000610352 4.09707 -0.000610352 5.99707 -0.000610352 5.99707C-0.000610352 5.99707 -0.000610352 7.89707 0.19939 9.19707C0.39939 10.4971 0.99939 11.3971 2.39939 11.5971C4.59939 11.9971 7.99939 11.9971 7.99939 11.9971C7.99939 11.9971 11.3994 11.9971 13.5994 11.5971C14.9994 11.2971 15.5994 10.4971 15.7994 9.19707C15.9994 7.89707 15.9994 5.99707 15.9994 5.99707C15.9994 5.99707 15.9994 4.09707 15.7994 2.79707ZM5.99939 8.99707V2.99707L10.9994 5.99707L5.99939 8.99707Z"
                                            fill="#ABABAB" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="copyright">
                            <p>©2024 <a href="https://quomodosoft.com/" target="_blank" class="inner-text"><?php echo $row['companyname'];  ?> </a> All rights reserved</p>
                        </div>
                    </div>
                    <div class="footer-payment-mode">
                        <a href="#">
                            <img src="assets/images/homepage-one/payment-img.png" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--------------- jQuery ---------------->
    <!-- <script src="assets/js/jquery_3.7.1.min.js"></script> -->
    

    <!--------------- bootstrap-js ---------------->
    <script src="assets/js/bootstrap_5.3.2.bundle.min.js"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="assets/js/nouislider.min.js"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="assets/js/aos-3.0.0.js"></script>

    <!--------------- swiper-js ---------------->
    <script src="assets/js/swiper10-bundle.min.js"></script>

    <!--------------- additional-js ---------------->
    <script src="assets/js/ecoshop.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    </body>

</html>