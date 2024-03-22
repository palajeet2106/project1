<?php
 include("connection.php");
include("header.php");
?>
 <!--------------- blog-tittle-section---------------->
 <section class="blog about-blog">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.php">Home</a></span>
                <span class="devider">/</span>
                <span><a href="#">orderId</a></span>
            </div>
            <div class="blog-heading about-heading">
                <p class="heading">Thanks for shopping with us!</p>
            </div>
        </div>
    </section>
    <!--------------- blog-tittle-section-end---------------->

    <!--------------- contact-section---------------->
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                        <div class="question-section login-section ">
                            <div class="review-form box-shadows">
                                <div class="review-form-text">
                                    <h5 class="comment-title">Order Summary</h5>
                                    <img src="assets/images/homepage-one/vector-line.png" alt="img">
                                </div>
                                <div class=" account-inner-form">
                                   <div>
                                   <p><b>Delivery Address :</b></p>
                                   <hr style="color: black;">
                                   </div>
                                   <div>
                                    <p><b>CustomerId</b></p><br>
                                    <p><b>Name</b></p><br>
                                    <p><b>Address</b></p><br>
                                    <p><b>State</b> -pincode </p><br>
                                    <p><b>Phone Number</b></p><br>
                                   </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- contact-section-end---------------->
<?php
include("footer.php");
?>