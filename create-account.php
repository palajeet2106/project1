<?php
include("connection.php");
 include("header.php"); 
 ?>
    <!--------------- header-section-end --------------->

    <!--------------- login-section--------------->
    <section class="login product footer-padding">
        <div class="container">
            <div class="login-section account-section">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xs-12">
                        <form action="function.php" method="post" enctype="multipart/form-data" id="userForm">
                            <div class="review-form box-shadows">
                            <div class="review-form-text">
                                <h5 class="comment-title">Create Account</h5>
                                <img src="assets/images/homepage-one/vector-line.png" alt="img">
                            </div>
                            <div class=" account-inner-form">
                                <div class="review-form-name">
                                  <!-- <div class="alert alert-success" id="result"></div> -->
                                    <label for="username" class="form-label">Username*</label>
                                    <input type="text" name ="username" class="form-control" placeholder="username">
                                </div>
                                <div class="review-form-name">
                                  <!-- <div class="alert alert-success" id="result"></div> -->
                                    <label for="customerId" class="form-label">Customer Id*</label>
                                    <input type="text" name ="customerId" class="form-control" value="<?php echo "CUSTOM" . rand(11111 , 99999); ?>"readonly>
                                </div>
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
                                    <label for="contact" class="form-label">contact*</label>
                                    <input type="number" name ="contact" class="form-control" placeholder="contact">
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

                            <div class="login-btn text-center">
                                <!-- <a href="function.php"  name = "submit">Create an Account</a> -->
                                <input type="submit"  value="Create an Account" class="shop-btn">
                                <input type="hidden" name="submit" value="Create an Account" class="shop-btn">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    $("#result").hide();
    $("#userForm").submit(function(e){
      e.preventDefault();
      $.ajax({
        url : "function.php",
        method : "POST",
        data :new FormData(this),
        contentType : false,
        processData : false,
        success : function(res){
          $("#result").show();
          $("#result").html(res);
          $("#userForm").trigger('reset');
          alert("signup successfully");
          window.location.href = "index.php";
        }

      })
    })
    })
  </script>