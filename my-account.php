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

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->



</head>

<body>

<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login2.php?pesan=belum_login");
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
                                        <a href="index.php">Home</a>
                                        
                                    </li>
                                    <li>
                                        <a href="shop.php">Shop</a>
                                      
                                    </li>
                                    <li>
                                        <a class="active main-menu-link" href="my-account.php">My Account</a>
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
                        <h3 class="breadcrumb-title">My Account</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">My Account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account_dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                            <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                            <li><a href="logout.php" class="nav-link">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Item Name</th>
                                            <th>Value</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
    include 'koneksi.php';
    $id = $_SESSION['id_user'];
    $no = 1;
    $dataconfirm = mysqli_query($koneksi, "select * from cart where id_user='$id'");
    while ($listconfirm = mysqli_fetch_array($dataconfirm)) {
    ?>

                                        <tr>
                                            <td><?php echo $listconfirm['id_cart']; ?></td>
                                            <td><?php echo $listconfirm['item_name_cart']; ?></td>
                                            <td><?php echo $listconfirm['total_item']; ?></td>
                                            <td>Rp. <?php echo $listconfirm['price_cart']; ?></td>
                                            <td><?php
                if ($listconfirm['status_cart'] == 'Processed') {
                ?>
                    <a class="btn btn-primary"><?php echo $listconfirm['status_cart']; ?></a>
                <?php
                } else {
                ?>
                    <a class="btn btn-warning"><?php echo $listconfirm['status_cart']; ?></a>
                <?php
                }
                ?>
                <?php
                if ($listconfirm['status_cart'] == 'Sent') {
                ?>
                    <a href="cart_delete_proses.php?id=<?php echo $listconfirm['id_cart']; ?>" onclick="return confirm('Finish Your Order?')" class="btn btn-success">Finish</a>
                <?php
                }
                ?></td>
                                        </tr>
                                        <?php
    }
    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                        
                        <div class="tab-pane fade" id="account-details">
                           
                               


<div class="col">
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card mt-4 row">
                    <div class="card-body">
                        <form action="update_proses.php" method="POST">
                            <div class="form-group">
                                <label for=" exampleInputEmail1">Email:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $_SESSION['email_user']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInpunama1">Nama:</label>
                                <input type="text" class="form-control" id="exampleInputnama1" name="name" aria-describedby="emailHelp" value="<?php echo $_SESSION['user_name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputalamat1">Alamat:</label>
                                <input type="text" class="form-control" id="exampleInputalamat1" name="alamat" aria-describedby="emailHelp" value="<?php echo $_SESSION['alamat']; ?>" required>
                            </div>
                            <?php
                            if (isset($_GET['infopro'])) {
                                $infopro = $_GET['infopro'];
                                echo '<p>' . $infopro . '</p>';
                            }
                            ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Edit data</button>
                            <a type="submit" href="delete_proses.php" class="btn btn-danger" onclick="return confirm('Are you sure want to delete your account?')">Delete akun</a>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col" style="padding-left:35px">
                <div class="card mt-4 row">
                    <div class="card-body">
                        <h5 class="card-title">User Wallet</h5>
                        <h6>Rp <?php echo $_SESSION['wallet']; ?> </h6>
                        <form action="proses_wallet.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="walletplus" aria-describedby="emailHelp" required>
                            </div>
                            <?php
                            if (isset($_GET['info'])) {
                                if ($_GET['info'] == "walletangka") {
                            ?>
                                    <div class="container">
                                        <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                                            <strong>Maaf</strong> Input hanya boleh angka
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                            <?php

                                }
                            }
                            ?>
                            <br>
                            <button class="btn btn-primary">Top up</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="card mt-4 row" style="width: 18rem;">
            <div class="card-body">
                <form action="update_proses_password.php" method="POST">
                    <h4>Edit password</h4>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password lama:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="cpasslama" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password baru:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="passbaru" aria-describedby="emailHelp" required>
                    </div>
                    <?php
                    if (isset($_GET['infopass'])) {
                        $infopass = $_GET['infopass'];
                        echo '<p>' . $infopass . '</p>';
                    }
                    ?>
                    <br>
                    <button type="submit" class="btn btn-primary">Edit data</button>
                </form>
            </div>
        </div>
    </div>
</div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

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