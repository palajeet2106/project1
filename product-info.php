<!--------------- header-section --------------->
<?php 
include("connection.php");
include("header.php"); ?>
    <!--------------- header-section-end --------------->

    <!--------------- products-info-section--------------->
    <section class="product product-info">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.php">Home</a></span>
                <span class="devider">/</span>
                <span><a href="product-sidebar.php">Shop</a></span>
                <span class="devider">/</span>
                <span><a href="#">Product Details</a></span>
            </div>
            <div class="product-info-section">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="product-info-img" data-aos="fade-right">
                            <div class="swiper product-top">
                                <!-- <div class="product-discount-content">
                                    <h4>-50%</h4>
                                </div> -->
                                <div class="swiper-wrapper">
                                <?php
                                    
                                    $res = $user-> display($_REQUEST['id']);
                                    $data= mysqli_fetch_assoc($res);
                                    ?>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="admin/<?php echo $data['featuredPhoto']; ?>" alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                    <img src="admin/<?php echo $data['featuredPhoto']; ?>" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper product-bottom">
                                <div class="swiper-wrapper">
                                                <div class="swiper-slide slider-bottom-img">
                                                   <img src="assets/images/homepage-one/product-img/p-img-38.webp" alt="img">
                                               </div>
                                    <div class="swiper-slide slider-bottom-img">
                                        <img src="assets/images/homepage-one/product-img/p-img-38.webp" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info-content" data-aos="fade-left">
                            <span class="wrapper-subtitle">
                                 <?php
                                    $category = $user -> editCategory($data['category']);
                                    echo isset($category['categoryName']) ? $category['categoryName'] : '';
                                    ?>
                            </span>
                            <h3 class="wrapper-heading"><?php echo $data['productName']; ?>
                            </h3>
                            <div class="ratings">
                                <span>
                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                            fill="#FFA800" />
                                    </svg>
                                </span>
                                <span class="text">5 Reviews</span>
                            </div>
                            <div class="price">
                                <!-- <span class="price-cut">$9.99</span> -->
                                <span class="new-price">₹ <?php echo $data['productPrice']; ?></span>
                            </div>
                            <p class="content-paragraph"><?php echo $data['description']; ?>
                            <!-- <span class="inner-text">the readable there content of a page.</span></p> -->
                            <hr>
                            <div class="product-availability">
                                <span>Availability : </span>
                                <span class="inner-text"><?php echo $data['productStock']; ?> Products Available</span>
                            </div>
                            <div class="product-size">
                                <P class="size-title">Weight</P>
                                <div class="size-section">
                                    <span class="size-text">Select Weight</span>
                                    <div class="toggle-btn">
                                        <span class="toggle-btn2"></span>
                                        <span class="chevron">
                                            <svg width="11" height="7" viewBox="0 0 11 7" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.4 6.8L0 1.4L1.4 0L5.4 4L9.4 0L10.8 1.4L5.4 6.8Z"
                                                    fill="#222222" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <ul class="size-option">
                                    <li class="option">
                                        <span class="option-text">500 gram</span>
                                        <span class="option-measure">$5.00</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">1 Kg</span>
                                        <span class="option-measure">$9.00</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">2 Kg</span>
                                        <span class="option-measure">$18.00</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">3 Kg</span>
                                        <span class="option-measure">$29.00</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">5 Kg</span>
                                        <span class="option-measure">$35.00</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-quantity">
                                <div class="quantity-wrapper">
                                    <div class="quantity">
                                        <span class="minus">
                                            -
                                        </span>
                                        <span class="number"></span>
                                        <span class="plus">
                                            +
                                        </span>
                                    </div>
                                    <div class="wishlist">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 1C14.9 1 13.1 2.1 12 3.7C10.9 2.1 9.1 1 7 1C3.7 1 1 3.7 1 7C1 13 12 22 12 22C12 22 23 13 23 7C23 3.7 20.3 1 17 1Z"
                                                    stroke="#797979" stroke-width="2" stroke-miterlimit="10"
                                                    stroke-linecap="square" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <a href="#">
                                    <span>
                                    <form action="function.php" method="post" id="cartForm">

                                    <input type="hidden" name="pid" value="<?php echo $data['id']; ?>">

                                    <button type="submit" class="shop-btn" name="cartBtn">
                                        <span class="btn-text">Add To Cart</span>
                                    </button>
                                    </form>
                                    </span>
                                    <!-- <span>Add to Cart</span> -->
                                </a>
                            </div>
                            <hr>
                            <div class="product-details">
                                <p class="category">Category : <span class="inner-text">
                                <?php
                                    $category = $user -> editCategory($data['category']);
                                    echo isset($category['categoryName']) ? $category['categoryName'] : '';
                                    ?>
                                 </span></p>
                                <p class="tags">Tags : <span class="inner-text">Beer, Foamer</span></p>
                                <p class="sku">SKU : <span class="inner-text">KE-91039</span></p>
                            </div>
                            <hr>
                            <div class="product-report">
                                <a href="#" class="report" onclick="modalAction('.action')">
                                    <span>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 0C0.30478 0 0.585152 0 0.897442 0C0.908707 0.197137 0.919972 0.389267 0.932488 0.607056C1.30235 0.482516 1.64781 0.347336 2.00391 0.250332C3.83134 -0.247829 5.5555 0.0450599 7.19017 0.959399C7.97121 1.39686 8.7898 1.71165 9.68599 1.81178C10.9308 1.95072 12.0873 1.6716 13.1813 1.08832C13.4566 0.941876 13.7257 0.783541 14.0443 0.604553C14.0505 0.745991 14.0599 0.853634 14.0599 0.960651C14.0605 3.92396 14.058 6.88665 14.0662 9.84996C14.0668 10.079 13.9961 10.2042 13.7964 10.3143C11.4702 11.5973 9.14277 11.6123 6.82531 10.3106C4.99976 9.28546 3.14292 9.1484 1.22162 10.0164C0.990065 10.1209 0.908081 10.2524 0.909958 10.5096C0.921849 12.21 0.916217 13.911 0.916217 15.6114C0.916217 15.7353 0.916217 15.8586 0.916217 16C0.600172 16 0.312916 16 0 16C0 10.6779 0 5.35336 0 0Z"
                                                fill="#EB5757" />
                                        </svg>
                                    </span>
                                    <span>Report This Item</span>
                                </a>
                                <!-- modal -->
                                <div class="modal-wrapper action">
                                    <div onclick="modalAction('.action')" class="anywhere-away"></div>

                                    <!-- change this -->
                                    <div class="login-section account-section modal-main">
                                        <div class="review-form">
                                            <div class="review-content">
                                                <h5 class="comment-title">Report Products</h5>
                                                <div class="close-btn">
                                                    <img src="assets/images/homepage-one/close-btn.png"
                                                        onclick="modalAction('.action')" alt="close-btn">
                                                </div>
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="reporttitle" class="form-label">Enter Report Ttile*</label>
                                                <input type="text" id="reporttitle" class="form-control"
                                                    placeholder="Reports Headline here">
                                            </div>
                                            <div class="review-form-name address-form">
                                                <label for="reportnote" class="form-label">Enter Report Note*</label>
                                                <textarea name="ticketmassage" id="reportnote" cols="40" rows="3"
                                                    class="form-control" placeholder="Type Here"></textarea>
                                            </div>
                                            <div class="login-btn text-center">
                                                <a href="#" onclick="modalAction('.action')" class="shop-btn">Submit
                                                    Report</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- change this -->

                                </div>
                            </div>
                            <div class="product-share">
                                <p>Share This:</p>
                                <div class="social-icons">
                                    <a href="#">
                                        <span class="facebook">
                                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3 16V9H0V6H3V4C3 1.3 4.7 0 7.1 0C8.3 0 9.2 0.1 9.5 0.1V2.9H7.8C6.5 2.9 6.2 3.5 6.2 4.4V6H10L9 9H6.3V16H3Z"
                                                    fill="#3E75B2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#">
                                        <span class="pinterest">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8C0 11.4 2.1 14.3 5.1 15.4C5 14.8 5 13.8 5.1 13.1C5.2 12.5 6 9.1 6 9.1C6 9.1 5.8 8.7 5.8 8C5.8 6.9 6.5 6 7.3 6C8 6 8.3 6.5 8.3 7.1C8.3 7.8 7.9 8.8 7.6 9.8C7.4 10.6 8 11.2 8.8 11.2C10.2 11.2 11.3 9.7 11.3 7.5C11.3 5.6 9.9 4.2 8 4.2C5.7 4.2 4.4 5.9 4.4 7.7C4.4 8.4 4.7 9.1 5 9.5C5 9.7 5 9.8 5 9.9C4.9 10.2 4.8 10.7 4.8 10.8C4.8 10.9 4.7 11 4.5 10.9C3.5 10.4 2.9 9 2.9 7.8C2.9 5.3 4.7 3 8.2 3C11 3 13.1 5 13.1 7.6C13.1 10.4 11.4 12.6 8.9 12.6C8.1 12.6 7.3 12.2 7.1 11.7C7.1 11.7 6.7 13.2 6.6 13.6C6.4 14.3 5.9 15.2 5.6 15.7C6.4 15.9 7.2 16 8 16C12.4 16 16 12.4 16 8C16 3.6 12.4 0 8 0Z"
                                                    fill="#E12828" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#">
                                        <span class="twitter">
                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.0722 1.60052C16.432 1.88505 15.7562 2.06289 15.0448 2.16959C15.7562 1.74278 16.3253 1.06701 16.5742 0.248969C15.8985 0.640206 15.1515 0.924742 14.3335 1.10258C13.6933 0.426804 12.7686 0 11.7727 0C9.85206 0 8.28711 1.56495 8.28711 3.48557C8.28711 3.7701 8.32268 4.01907 8.39382 4.26804C5.51289 4.12577 2.9165 2.73866 1.17371 0.604639C0.889175 1.13814 0.71134 1.70722 0.71134 2.34742C0.71134 3.5567 1.31598 4.62371 2.27629 5.26392C1.70722 5.22835 1.17371 5.08608 0.675773 4.83711V4.87268C0.675773 6.5799 1.88505 8.00258 3.48557 8.32268C3.20103 8.39382 2.88093 8.42938 2.56082 8.42938C2.34742 8.42938 2.09845 8.39382 1.88505 8.35825C2.34742 9.74536 3.62784 10.7768 5.15722 10.7768C3.94794 11.7015 2.45412 12.2706 0.818041 12.2706C0.533505 12.2706 0.248969 12.2706 0 12.2351C1.56495 13.2309 3.37887 13.8 5.37062 13.8C11.8082 13.8 15.3294 8.46495 15.3294 3.84124C15.3294 3.69897 15.3294 3.52113 15.3294 3.37887C16.0052 2.9165 16.6098 2.31186 17.0722 1.60052Z"
                                                    fill="#3FD1FF" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- products-info-end--------------->

    <!--------------- products-details-section--------------->
    <section class="product product-description">
        <div class="container">
            <div class="product-detail-section">
                <nav>
                    <div class="nav nav-tabs nav-item" id="nav-tab" role="tablist">

                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Description</button>

                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review"
                            type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>

                        <button class="nav-link" id="nav-seller-tab" data-bs-toggle="tab" data-bs-target="#nav-seller"
                            type="button" role="tab" aria-controls="nav-seller" aria-selected="false">Seller
                            Info</button>

                    </div>
                </nav>
                <div class="tab-content tab-item" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0" data-aos="fade-up">
                        <div class="product-intro-section">
                            <h5 class="intro-heading">Introduction</h5>
                            <p class="product-details">
                               <?php echo $data['description']; ?>
                            </p>
                        </div>
                        <div class="product-feature">
                            <h5 class="intro-heading">Features :</h5>
                            <ul>
                                <li>
                                    <p>slim body with metal cover</p>
                                </li>
                                <li>
                                    <p>latest Intel Core i5-1135G7 processor (4 cores / 8 threads)</p>
                                </li>
                                <li>
                                    <p>8GB DDR4 RAM and fast 512GB PCIe SSD</p>
                                </li>
                                <li>
                                    <p>NVIDIA GeForce MX350 2GB GDDR5 graphics card backlit keyboard, touchpad with
                                        gesture support</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab"
                        tabindex="0">
                        <div class="product-review-section" data-aos="fade-up">
                            <h5 class="intro-heading">Reviews</h5>

                            <div class="review-wrapper">
                                <div class="wrapper">
                                    <div class="wrapper-aurthor">
                                        <div class="wrapper-info">
                                            <div class="aurthor-img">
                                                <img src="assets/images/homepage-one/aurthor-img-1.webp"
                                                    alt="aurthor-img">
                                            </div>
                                            <div class="author-details">
                                                <h5>Sajjad Hossain</h5>
                                                <p>London, UK</p>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <span>
                                                <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                        fill="#FFA800" />
                                                </svg>
                                            </span>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="wrapper-description">
                                        <p class="wrapper-details">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the redi 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries but also the on leap into electronic typesetting, remaining
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-seller" role="tabpanel" aria-labelledby="nav-seller-tab"
                        tabindex="0">
                        <div class="product-review-section" data-aos="fade-up">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- products-details-end--------------->

    <!--------------- weekly-section--------------->
    <section class="product weekly-sale product-weekly footer-padding">
        <div class="container">
            <div class="section-title">
                <h5>Similar Products</h5>
                <a href="#" class="view">View All</a>
            </div>
            <div class="weekly-sale-section">
                <div class="row g-5">
                    <?php
                    $res = $user-> getProductByCategory($data['category']);
                    if(mysqli_num_rows($res) >0){
                        while($row = mysqli_fetch_assoc($res)){
                            ?>
                             <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <a href="product-info.php?id=<?php echo $row['id']; ?>"><img src="admin/<?php echo $row['featuredPhoto']; ?>" alt="product-img"  style="width: 250px !important; height:250px !important"></a>
                            </div>
                            <div class="product-info">
                                
                                <div class="product-description">
                                    <a href="product-info.php?id=<?php echo $row['id'];  ?>" class="product-details"><?php echo $row['productName']; ?>
                                    </a>
                                    <div class="price">
                                        <!-- <span class="price-cut">₹ 20.99</span> -->
                                        <span class="new-price">₹ <?php echo $row['productPrice']; ?></span>
                                    </div>
                                </div>
                                <div class="product-cart-btn">
                                <form id="form<?php echo $row['id'];?>">
                                    <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="product-btn" name="cartBtn">
                                        <span class="btn-text">Add To Cart</span>
                                    </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                        <script>
                            $(function(){
            
                                $("#form<?php echo $row['id'];?>").submit(function(e){
                                    e.preventDefault()
                                    
                                    $.ajax({
                                        url: "function.php",
                                        type: "post",
                                        data: new FormData(this),
                                        contentType: false,
                                        processData: false,
                                        success: function(res){
                                            $('.cart-value').text(res);
                                            swal({
                                                title: "",
                                                text: "Item Added To Cart",
                                                icon: "success",
                                                });
                                        }



                                    })
                                })
                            })
                        </script>
                            <?php
                        }
                    }

                    ?>
                   
                  
                </div>
            </div>
        </div>
    </section>
    <!--------------- weekly-section-end--------------->

    <!--------------- footer-section--------------->
    <?php include("footer.php"); ?>
    <!--------------- footer-section-end--------------->
  