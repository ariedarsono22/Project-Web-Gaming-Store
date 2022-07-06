<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aments - Peripheral Gaming Store</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php
session_start();
if ($_SESSION['status'] != "login") {
    echo "<script>
      window.location.href = 'login2.php';
      alert('You need to Login first before purchase the Item');
</script>";
} else {
    include 'koneksi.php';
    $id = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "UPDATE user set status = 'on' WHERE id_user = '$id'");
}

?>

        <!-- Start Header Center Area -->
        <div class="header-center">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-3">
                        <!-- Logo Header -->
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                      
                    </div>
                    <div class="col-3 text-right">
                        <!-- Start Header Action Icon -->
                        <ul class="header-action-icon">
                            <li>
                                <a href="my-account.php" style="font-size: 1.5rem;">Orders Cart  <i class="icon-shopping-cart"></i></a>
                            </li>
                        </ul> <!-- End Header Action Icon -->
                    </div>
                </div>
            </div>
        </div> <!-- End Header Center Area -->

        <!-- Start Bottom Area -->
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Header Main Menu -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a class="active main-menu-link" href="index.php">Home</a>
                                        
                                    </li>
                                    <li>
                                        <a href="shop.php">Shop</a>
                                      
                                    </li>
                                    <li>
                                        <a href="my-account.php">My Account</a>
                                    </li>
                                 
                                 
                                 
                                   
                                </ul>
                            </nav>
                        </div> <!-- Header Main Menu Start -->
                    </div>
                </div>
            </div>
        </div> <!-- End Bottom Area -->
    </header> <!-- ...:::: End Header Section:::... -->

    <!-- ...:::: Start Mobile Header Section:::... -->
    <div class="mobile-header-section d-block d-lg-none">
        <!-- Start Mobile Header Wrapper -->
        <div class="mobile-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="mobile-header--left">
                            <a href="index.php" class="mobile-logo-link">
                                <img src="assets/images/logo/logo.png" alt="" class="mobile-logo-img">
                            </a>
                        </div>
                        <div class="mobile-header--right">
                            <a href="#mobile-menu-offcanvas" class="mobile-menu offcanvas-toggle">
                                <span class="mobile-menu-dash"></span>
                                <span class="mobile-menu-dash"></span>
                                <span class="mobile-menu-dash"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Mobile Header Wrapper -->
    </div> <!-- ...:::: Start Mobile Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu User Top -->
            <div class="mobile-menu-center">
                <!-- Start Header Top Menu -->
                <ul class="mobile-menu-user-menu">
                    <li><a class="header-user-menu-link" href="">My Account</a></li>
                    
                    
                </ul> <!-- End Header Top Menu -->
            </div> <!-- End Mobile Menu User Top -->
            <!-- Start Mobile Menu User Center -->
            <div class="mobile-menu-center">
               
                <div class="mobile-menu-customer-support">
                    <div class="mobile-menu-customer-support-icon">
                        <img src="assets/images/icon/support-icon.png" alt="">
                    </div>
                    <div class="mobile-menu-customer-support-text">
                        <span>Customer Support</span>
                        <a class="mobile-menu-customer-support-text-phone" href="tel:0123456789">0123456789</a>
                    </div>
                </div>
                <!-- Start Header Action Icon -->
                <ul class="mobile-action-icon">
                   
                    <li class="mobile-action-icon-item">
                        <a href="cart.html" class="mobile-action-icon-link">
                            <i class="icon-shopping-cart"></i>
                            <span class="mobile-action-icon-item-count">3</span>
                        </a>
                    </li>
                </ul> <!-- End Header Action Icon -->
            </div> <!-- End Mobile Menu User Center -->
            <!-- Start Mobile Menu Bottom -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                        <li><a href="my-account.php">My Account</a></li>
                        <li><a href="contact-us.html">About Us</a></li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->

                <!-- Mobile Manu Mail Address -->
                <a class="mobile-menu-email icon-text-right" href="mailto:info@yourdomain.com"><i
                        class="fa fa-envelope-o"> info@yourdomain.com</i></a>

                <!-- Mobile Manu Social Link -->
                <ul class="mobile-menu-social">
                    <li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div> <!-- End Mobile Menu Bottom -->
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">Product Details</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Product Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start Product Details Section -->
    <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from item where id_item='$id'");
                while ($confirmbarang = mysqli_fetch_array($data)) {
                ?>
    <form action="cart_process.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="iduserbar" aria-describedby="emailHelp" value="<?php echo $_SESSION['id_user']; ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="idbarangbar" aria-describedby="emailHelp" value="<?php echo $confirmbarang['id_item'] ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="connamauserbar" aria-describedby="emailHelp" value="<?php echo $_SESSION['user_name']; ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="connamabar" aria-describedby="emailHelp" value="<?php echo $confirmbarang['item_name']; ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="conalamatbar" aria-describedby="emailHelp" value="<?php echo $_SESSION['alamat']; ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="conhargabar" aria-describedby="emailHelp" value="<?php echo $confirmbarang['price']; ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="conwalletbar" aria-describedby="emailHelp" value="<?php echo $_SESSION['wallet']; ?>" required>
    <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <div class="product-large-image product-large-image-horaizontal">
                            <div class="product-image-large-single">
                                <img src="assets/images/products_images/<?php echo $confirmbarang['picture']; ?>" alt="">
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details-content-area" data-aos="fade-up" data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                      
                        <div class="product-details-text">
                            <h4 class="title"><?php echo $confirmbarang['item_name'] ?></h4>
                            
                            <div class="price">Rp. <?php echo $confirmbarang['price'] ?></div>
                            <p><?php echo $confirmbarang['description'] ?></p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            
                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center">
                                <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                        <input min="1" max="100" value="1" type="number" name="conjumlahbar">
                                    </div>
                                </div>

                                <button type="submit" class="btn m-3 mt-5 btn-primary">Purchase</button>
                                
                            </div>
                        </div> <!-- End Product Variable Area -->
                      
                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i>Like</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i>Tweet</a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i>Save</a></li>
                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i>Save</a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linked</a></li>
                            </ul>
                        </div> <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
                }
                ?><!-- End Product Details Section -->

   

    <!-- ...:::: Start Footer Section:::... -->
    <footer class="footer-section section-top-gap-100">
        <!-- Start Footer Top Area -->
        <div class="footer-top section-inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <div class="footer-widget footer-widget-contact" data-aos="fade-up" data-aos-delay="0">
                            <div class="footer-logo">
                                <a href="index.php"><img src="assets/images/logo/logo.png" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="footer-contact">
                                <p>We manufacture the majority of our products in our own facilities—more than most other hardware suppliers.</p>
                                <div class="customer-support">
                                    <div class="customer-support-icon">
                                        <img src="assets/images/icon/support-icon.png" alt="">
                                    </div>
                                    <div class="customer-support-text">
                                        <span>Customer Support</span>
                                        <a class="customer-support-text-phone" href="tel:0123456789">0123456789</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="footer-widget footer-widget-subscribe" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="footer-widget-title">Subscribe newsletter to get updated</h3>
                            <form action="#" method="post">
                                <div class="footer-subscribe-box default-search-style d-flex">
                                    <input
                                        class="default-search-style-input-box border-around border-right-none subscribe-form"
                                        type="email" placeholder="Follow our updates ..." required>
                                    <button class="default-search-style-input-btn" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <p class="footer-widget-subscribe-note">We’ll never share your email address <br> with a
                                third-party.</p>
                            <ul class="footer-social">
                                <li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="footer-widget-title">Information</h3>
                            <div class="footer-menu">
                                <ul class="footer-menu-nav">
                                    <li><a href="my-account.php">Orders</a></li>
                                    <li><a href="about-us.html">About Me</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                    <li><a href="">Stores</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                </ul>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Top Area -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-area">
                            <p class="copyright-area-text">&copy; 2022 <a href="index.php">Aments</a>. Made with <i
                                    class="fa fa-heart text-danger"></i> by Arie</a> </p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div> <!-- End Footer Bottom Area -->
    </footer> <!-- ...:::: End Footer Section:::... -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor.min.js"></script> 
    <script src="assets/js/plugins.min.js"></script> -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>

</html>