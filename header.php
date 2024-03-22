
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="EcoShop, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/images/logos/top-logo.png">

    <!--title  -->
    <title>EcoShop: Your One-Stop Destination for Fashion and Style</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="css/swiper10-bundle.min.css">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="css/nouislider.min.css">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="css/aos-3.0.0.css">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
    /* Custom styles */
    .cart-icon {
      font-size: 2rem;
      color: #000; /* Change color as needed */
      position: relative;
      margin-top: 10px;
    }
    .cart-value {
      position: absolute;
      top: -8px;
      right: -8px;
      background-color: red;
      color: white;
      border-radius: 50%;
      padding: 4px 8px;
      font-size: 0.8rem;
    }
  </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    


</head>

<body>

    


    <!--------------- header-section --------------->
    <header id="header" class="header">
        <div class="header-top-section">
            <div class="container">
                <div class="header-top">
                    <div class="header-profile">
                        <a href="user-profile.php"><span>Account</span></a>
                        <a href="order.php"><span>Track Order</span></a>
                        <a href="faq.php"><span>Support</span></a>
                    </div>
                    <div class="header-contact d-none d-lg-block">
                        <div class="header-top-contact">
                            <a href="#" class="top-contact phone">
                                <span>
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.23801 8.53196C7.50029 10.7178 9.16931 12.4839 11.3767 13.7235C11.5568 13.8249 11.6712 13.8023 11.8147 13.6555C12.2344 13.2261 12.653 12.7946 13.1007 12.3965C13.925 11.6639 14.9111 11.6596 15.704 12.4137C16.565 13.2315 17.4054 14.0709 18.22 14.9351C19.0097 15.7733 19.0183 16.7886 18.2566 17.6452C17.7377 18.2299 17.1896 18.7931 16.6168 19.325C15.6771 20.1967 14.5378 20.2593 13.3478 20.0381C11.6529 19.7231 10.1327 18.9776 8.69029 18.0767C5.22711 15.9114 2.60544 12.9888 0.899747 9.26775C0.458488 8.3054 0.132668 7.30313 0.0258596 6.23936C-0.0917375 5.07094 0.181218 4.04385 1.06158 3.21312C1.48881 2.8107 1.88691 2.37699 2.30552 1.96594C3.26571 1.02517 4.34459 1.01438 5.31126 1.95084C6.0697 2.68663 6.81952 3.43321 7.55207 4.19382C8.49393 5.17235 8.49609 6.16492 7.57149 7.16503C7.15505 7.616 6.71703 8.04323 6.23801 8.53196ZM1.16299 5.81644C1.12523 5.82507 1.08855 5.8337 1.05079 5.84341C1.26225 6.61696 1.4025 7.42072 1.69811 8.16083C3.24414 12.021 5.87335 14.9782 9.38508 17.1619C10.6948 17.9764 12.0747 18.6485 13.6153 18.9301C14.6672 19.1222 15.5756 18.9517 16.2801 18.0606C16.5693 17.6948 16.9383 17.3917 17.2652 17.055C17.8035 16.5005 17.8089 16.1251 17.2716 15.5813C16.538 14.839 15.799 14.1022 15.0578 13.3675C14.5723 12.8863 14.2044 12.8841 13.7124 13.3642C13.2453 13.8195 12.7922 14.2888 12.325 14.7441C11.9603 15.0991 11.6313 15.1627 11.1911 14.9135C10.5805 14.5672 9.95364 14.2316 9.39695 13.8087C7.68693 12.5098 6.22075 10.9853 5.25408 9.03795C4.91855 8.3615 4.98544 8.10149 5.52164 7.58579C5.94455 7.17905 6.36639 6.77016 6.77421 6.34832C7.23489 5.87254 7.23381 5.5068 6.76666 5.02994C6.01792 4.2661 5.26163 3.50981 4.49994 2.75784C4.02848 2.29176 3.62498 2.29284 3.14272 2.75784C2.71981 3.16565 2.31955 3.59612 1.89339 3.99854C1.36798 4.49266 1.10905 5.0882 1.16299 5.81644Z"
                                            fill="#27AE60" />
                                        <path
                                            d="M11.0349 0C11.953 0.295611 12.829 0.486571 13.6274 0.850151C17.0614 2.4102 19.1944 5.04373 19.969 8.75073C20.0683 9.22436 19.9259 9.51457 19.5741 9.58146C19.2008 9.65159 18.9549 9.44337 18.8535 8.95032C18.3043 6.26177 16.877 4.16445 14.5962 2.64971C13.5637 1.96463 12.4298 1.52013 11.215 1.27954C11.0877 1.25473 10.9529 1.23531 10.8407 1.17705C10.5796 1.04111 10.4372 0.799444 10.558 0.529726C10.6443 0.333371 10.8536 0.192039 11.0349 0Z"
                                            fill="#27AE60" />
                                        <path
                                            d="M16.3863 9.17931C16.3776 9.48679 16.2363 9.70472 15.9191 9.75542C15.6095 9.80505 15.3797 9.66804 15.2815 9.36703C15.193 9.09515 15.1574 8.80602 15.0614 8.53846C14.3839 6.64504 13.0795 5.43023 11.1203 4.9361C11.0318 4.91345 10.9423 4.89834 10.8538 4.87569C10.5053 4.78722 10.3144 4.53908 10.3597 4.23376C10.4082 3.90686 10.6823 3.7159 11.0458 3.75474C13.5294 4.02446 16.095 6.5803 16.3712 9.05739C16.3755 9.09623 16.3809 9.13507 16.3863 9.17931Z"
                                            fill="#27AE60" />
                                    </svg>
                                </span>
                                <?php 
                                $res = $user ->displayAdmin();
                                $row = mysqli_fetch_assoc($res); 
                                ?>
                                <span class="contact-text">+91 <?php echo $row['contact'] ?></span>
                            </a>
                            <div class="divider"></div>
                            <a href="#" class="top-contact email">
                                <span>
                                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.24976 11.6506C6.05064 11.6506 3.85153 11.6513 1.65176 11.65C0.57874 11.6493 0.000808974 11.0669 0.000161795 9.98673C0.000161795 7.2058 -0.000485385 4.42422 0.000808974 1.64264C0.00145615 0.587739 0.587154 0.000747299 1.64141 0.000747299C6.072 0.000100119 10.5032 -0.000547061 14.9338 0.000747299C15.9855 0.000747299 16.5686 0.589034 16.5693 1.64782C16.5705 4.4294 16.5699 7.21033 16.5693 9.99191C16.5686 11.0701 15.9894 11.65 14.9125 11.65C12.6914 11.6513 10.4709 11.6506 8.24976 11.6506ZM1.7016 0.990285C1.79867 1.09578 1.86533 1.17473 1.93782 1.24722C3.65802 2.95836 5.37887 4.6695 7.10037 6.38C7.88928 7.16373 8.67949 7.16503 9.4671 6.38259C11.1886 4.67274 12.9088 2.96159 14.6297 1.2498C14.7028 1.17732 14.7701 1.09901 14.8711 0.990285C10.4651 0.990285 6.10695 0.990285 1.7016 0.990285ZM10.709 6.50037C10.0263 7.25628 9.3545 7.93905 8.27694 7.93776C7.19874 7.93582 6.53732 7.23492 5.88626 6.53726C4.51359 7.9397 3.1584 9.32467 1.86016 10.6514C6.1173 10.6514 10.4748 10.6514 14.7727 10.6514C13.4382 9.28842 12.0888 7.90993 10.709 6.50037ZM5.03069 5.86937C3.68844 4.50965 2.33324 3.13633 0.999407 1.78502C0.999407 4.47146 0.999407 7.19609 0.999407 9.97055C2.38761 8.55776 3.73827 7.18444 5.03069 5.86937ZM11.5387 5.80012C12.8661 7.15079 14.2193 8.52734 15.5752 9.90648C15.5752 7.18444 15.5752 4.46046 15.5752 1.71318C14.1993 3.10592 12.8473 4.47535 11.5387 5.80012Z"
                                            fill="#27AE60" />
                                    </svg>
                                </span>
                                <span class="contact-text"> <?php echo $row['email'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-center-section d-none d-lg-flex">
            <div class="container">
                <div class="header-center">
                    <div class="logo">
                        <a href="index.php">
                            <img src="admin/<?php echo $row['logo'];  ?>" alt="logo">
                        </a>
                    </div>
                    <div class="header-search-btn">
                        <input type="text" placeholder="Search Product.....">
                        <div class="divider"></div>
                        <div id="allcat">
                            <button type="button" onclick="selectBoxHandler('allcat')">
                                <span class="item-text">All Categories</span>
                                <span>
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="9.18359" y="0.90918" width="5.78538" height="1.28564"
                                            transform="rotate(135 9.18359 0.90918)" fill="#8E8E8E"></rect>
                                        <rect x="5.08984" y="5" width="5.78538" height="1.28564"
                                            transform="rotate(-135 5.08984 5)" fill="#8E8E8E"></rect>
                                    </svg>
                                </span>
                            </button>
                            <div class="slectbox-body" style="display: none;">
                                <div class="clickAway position-fixed" onclick="selectBoxHandler('allcat')"></div>
                                <ul class="country-options">
                                    <?php
                                    $res = $user ->displayCategory();
                                    if(mysqli_num_rows($res) > 0){
                                        while($data = mysqli_fetch_assoc($res)){
                                            ?>
                                             <a href="product-sidebar.php?id=<?php echo $data['id']; ?>"><li class="all-option"><span class="option-text item-text"><i class="fa-solid fa-layer-group"></i> <?php echo $data['categoryName']; ?></a>
                                        </span></li>
                                            <?php
                                        }
                                    }

                                    ?>
                                   
                                </ul>
                            </div>
                        </div>
                       <a href="#" class="shop-btn">Search</a>
                    </div>
                    <div class="header-cart-items">
                        <div class="header-cart">
                            <a href="cart.php" class="cart-item">
                                <div class="col-auto">   
                                    <i class="fa-solid fa-cart-plus cart-icon">
                                    <span class="cart-value">
                                    <?php echo (isset($_SESSION['userId']))? $user->countcartitems($_SESSION['userId']) : 0;?>
                                    </span>
                                    </i>
                                </div>
                            </a>
                           
                        </div>
                        <div class="header-user">
                            <a href="user-profile.php">
                                <span>
                                    <i class="fa-regular fa-circle-user pt-2 " style = "font-size:22px;"></i>
                                  
                                </span>
                                <span class="ms-2 " ><b ><?php echo (isset($_SESSION['userId']) ? $_SESSION['username'] : " Login    ") ?></b></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="mobile-menu d-block d-lg-none">
            <div class="mobile-menu-header d-flex justify-content-around align-items-center">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                    aria-controls="offcanvasWithBothOptions">
                    <span>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="14" height="1" fill="#1D1D1D" />
                            <rect y="8" width="14" height="1" fill="#1D1D1D" />
                            <rect y="4" width="10" height="1" fill="#1D1D1D" />
                        </svg>
                    </span>
                </button>
                <a href="index.php" class="mobile-header-logo">
                    <?php 
                    $res = $user ->displayAdmin();
                    $row = mysqli_fetch_assoc($res);
                     ?>
                    <img src="admin/<?php echo $row['logo']; ?>" alt="logo">
                </a>
                <div class="header-user">

                        <div class="navbar navbar-light ">
                            <div class="container-fluid">
                                <div class="dropdown">

                                    <a class=" dropdown-toggle" href="login.php" id="userDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">

                                        <b><?php echo (isset($_SESSION['userId']) ? $_SESSION['username'] : " Login    ") ?></b>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdownMenu">
                                    <li><a class="dropdown-item ms-5" href="login.php">Login</a></li>
                                        <li>
                                            <a class="dropdown-item" href="user-profile.php"><i class="fa-regular fa-circle-user"></i> Profile</a>
                                        </li>
                                        <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                        <a class="dropdown-item" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                                    
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="header-cart">
                            <a href="cart.php" class="cart-item">
                                <div class="col-auto">   
                                    <i class="fa-solid fa-cart-plus cart-icon">
                                    <span class="cart-value">
                                        <?php echo (isset($_SESSION['userId']))? $user->countcartitems($_SESSION['userId']) : 0;?>
                                    </span>
                                    </i>
                                </div>
                            </a>
                           
                        </div>
                        
                    </div>
            
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">

                <div class="offcanvas-body">
                    <div class="header-top bg-primary text-white">
                        <div class="header-cart ">
                            <div class="header-user ">
                            <a href="user-profile.php ">
                                <i class = "fa fa-user text-white"></i>   
                            </a>
                          <span class = "ms-4 fs-4"><b><?php echo "Hey , ".(isset($_SESSION['userId']) ? $_SESSION['username'] : " Login & Signup   ") ?></b></span>
                        </div>
                        </div>
                        <div class="shop-btn">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">

                            </button>
                        </div>
                    </div>
                    
                    <div class="category-dropdown">
                        <ul class="category-list">
                            <?php

                            $res = $user ->displayCategory();
                            if(mysqli_num_rows($res) >0){
                                while($row = mysqli_fetch_assoc($res)){
                                    ?>
                                      <li class="category-list-item">
                                <a href="product-sidebar.php?id=<?php echo $row['id']; ?>">
                                    <div class="dropdown-item d-flex justify-content-between align-items-center">
                                        <div class="dropdown-list-item d-flex"> 
                                            <span class="dropdown-text">
                                                <?php echo $row['categoryName']; ?>
                                            </span>
                                        </div>
                                        <div class="drop-down-list-icon">
                                            <span>
                                                <svg width="15" height="15" viewBox="0 0 6 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                        transform="rotate(45 1.5 0.818359)" />
                                                    <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                        transform="rotate(135 5.58984 4.90918)" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                                    <?php
                                }
                            }

                            ?>
                          
                        </ul>
                        
                    </div>
                </div>
            </div>
   
        </nav>

        <div class="header-bottom d-lg-block d-none">
            <div class="container">
                <div class="header-nav">
                    <div class="header-nav-menu-section">
                        <div class="category-menu-section position-relative">
                            <div class="empty position-fixed" onclick="tooglmenu()"></div>
                            <button class="dropdown-btn" onclick="tooglmenu()">
                                <span class="dropdown-icon">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="14" height="1" />
                                        <rect y="8" width="14" height="1" />
                                        <rect y="4" width="10" height="1" />
                                    </svg>
                                    <span class="list-text">
                                        All Categories
                                    </span>
                                </span>
                                <span>
                                    <svg width="9" height="5" viewBox="0 0 9 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="8.18359" y="0.910156" width="5.78538" height="1.28564"
                                            transform="rotate(135 8.18359 0.910156)" fill="#1D1D1D"></rect>
                                        <rect x="4.08984" y="5" width="5.78538" height="1.28564"
                                            transform="rotate(-135 4.08984 5)" fill="#1D1D1D"></rect>
                                    </svg>
                                </span>
                            </button>
                            <div class="category-dropdown position-absolute" id="subMenu">
                                <ul class="category-list">

                                <?php  
                                $res = $user -> displayCategory();
                                if(mysqli_num_rows($res) >0){
                                    while($row = mysqli_fetch_assoc($res)){
                                        ?>
                                        <li class="category-list-item">
                                        <a href="product-sidebar.php?id=<?php echo $row['id']; ?>">
                                            <div
                                                class="dropdown-item d-flex justify-content-between align-items-center">
                                                <div class="dropdown-list-item d-flex"> 
                                                <i class="fa-solid fa-layer-group"></i>
                                                    <span class="dropdown-text">     
                                                      <?php echo $row['categoryName'];?>
                                                    </span>
                                                </div>
                                                <div class="drop-down-list-icon">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 6 9" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="1.5" y="0.818359" width="5.78538" height="1.28564"
                                                                transform="rotate(45 1.5 0.818359)" />
                                                            <rect x="5.58984" y="4.90918" width="5.78538"
                                                                height="1.28564"
                                                                transform="rotate(135 5.58984 4.90918)" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                        <?php
                                    }
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="header-nav-menu">
                            <ul class="menu-list">
                                <li>
                                    <a href="index.php">
                                        <span class="list-text">Home</span>
                                    </a>
                                </li>
                                <li class="mega-menu">
                                    <a href="products.php">
                                        <span class="list-text">Products</span>
                                        
                                    </a>
                                    
                                </li>

                                <li>
                                    <a href="about.php">
                                        <span class="list-text">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blogs.php">
                                        <span class="list-text">Blog</span>
                                    </a>
                                    <ul class="header-sub-menu">
                                        <li><a href="blogs-details.php">Blog-details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="user-profile.php">
                                        <span class="list-text">User Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-us.php">
                                        <span class="list-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                   <div>
                   <!-- <a href="<?php //echo isset($_SESSION['userId']) ? "user-profile.php" : "login.php";  ?>" class="shop-btn">
                        <?php //echo (isset($_SESSION['userId']) ? $_SESSION['username'] : "user login    ") ?>
                    </a> -->
                    
                     <?php
                        if (isset($_SESSION['userId'])) { ?>
                            <a href="logout.php"><span class="fs-3 text-white"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</span>
                            </a>
                        <?php }

                        ?>
                   </div>
                </div>
            </div>
        </div>
    </header>
    <!--------------- header-section-end --------------->

