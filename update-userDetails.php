<?php include("header.php"); ?>
    <!--------------- header-section-end --------------->

    <!--------------- login-section--------------->
    <section class="login product footer-padding">
        <div class="container">
            <div class="login-section account-section">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xs-12">
                        <form action="function.php" method="post" enctype="multipart/form-data">
                            <div class="review-form box-shadows">
                            <div class="review-form-text">
                                <h5 class="comment-title">Update Profile</h5>
                                <img src="assets/images/homepage-one/vector-line.png" alt="img">
                            </div>
                            <div class=" account-inner-form">
                                <div class="review-form-name">
                                    <label for="fname" class="form-label">First Name*</label>
                                    <input type="text" name ="firstName" class="form-control" placeholder="First Name">
                                </div>
                                <div class="review-form-name">
                                    <label for="lname" class="form-label">Last Name*</label>
                                    <input type="text" name ="lastName" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class=" account-inner-form">
                                <div class="review-form-name">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" name ="email" class="form-control" placeholder="user@gmail.com">
                                </div>
                                <div class="review-form-name">
                                    <label for="contact" class="form-label">Contact*</label>
                                    <input type="number" name ="contact" class="form-control" placeholder="Enter Contact">
                                </div>
                            </div>
                            <div class=" account-inner-form">
                                <div class="review-form-name">
                                    <label for="password" class="form-label">Password*</label>
                                    <input type="password" name ="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="review-form-name">
                                    <label for="confirmPassword" class="form-label">Retype Password*</label>
                                    <input type="password" name ="confirmPassword" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>



                            <div class="review-form-name checkbox">
                                <div class="checkbox-item">
                                    <input type="checkbox">
                                    <p class="remember">
                                        I agree all terms and condition in <span class="inner-text">EcoShop.</span></p>
                                </div>
                            </div>
                            <div class="login-btn text-center">
                                <!-- <a href="function.php"  name = "submit">Create an Account</a> -->
                                <input type="submit" name="submit" value="Create an Account" class="shop-btn">
                                <span class="shop-account">Already have an account ?<a href="login.php">Log
                                        In</a></span>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-xs-12 d-none d-lg-block">
                        <div class="account-img">
                            <img src="assets/images/homepage-one/account-img.webp" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- login-section-end --------------->

    <!--------------- footer-section--------------->
<?php include("footer.php"); ?>