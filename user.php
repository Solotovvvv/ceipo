<?php
include('includes/config.php');
session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/profilestyle.css">
    <title>BuDS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="stylesheet" href="css/templatemo-plot-listing1.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <a href="./index.php">
                <img src="img/logo-main.png" alt="">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php"><img src="img/logo-main.png" alt=""></a><br>
                            <!-- <ul>Business Directory</ul> -->
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <div class="hs-nav">
                                <nav class="nav-menu">
                                    <ul>
                                        <li class="profile-dropdown">
                                            <div class="user-profile">
                                                <?php if (isset($_SESSION['photo'])) { ?>
                                                    <img src="img/testimonial-author/unknown.jpg" alt="User's Name">
                                                <?php } else { ?>
                                                    <img src="img/testimonial-author/unknown.jpg" alt="User's Name">
                                                <?php } ?>
                                            </div>
                                            <ul class="dropdown dropleft">
                                                <li><a href="user.php">MY PROFILE</a></li>
                                                <?php if ($_SESSION['role'] == 3) { ?>
                                                    <li><a href="user_module-main/index.php">CREATE RESUME</a></li>
                                                <?php } ?>
                                                <?php if ($_SESSION['role'] == 2) { ?>
                                                    <li><a href="manage.php">MANAGE BUSINESS</a></li>
                                                    <li><a href="listing-form.php">ADD BUSINESS</a></li>
                                                <?php } ?>
                                                <li><a href="logout.php">LOGOUT</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <!-- <li><a href="./listing.html">Business Listing</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Property Details Section Begin -->
    <section class="property-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-text">
                        <br>
                        <div class="pd-widget">
                            <div class="col-lg-5">
                                <div class="section-title">
                                    <h4>MY PROFILE</h4>
                                </div>
                            </div>
                            <div class="container">
                                <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                                    <div class="profile-tab-nav border-right">
                                        <form class="" action="user.php" method="post">
                                            <div class="p-4">
                                                <div class="img-circle text-center mb-3" style="position: relative;">
                                                    <?php if (isset($_SESSION['photo'])) { ?>
                                                        <img src="img/testimonial-author/unknown.jpg" alt="User's Name">
                                                    <?php } else { ?>
                                                        <img src="img/testimonial-author/unknown.jpg" alt="User's Name">
                                                    <?php } ?>
                                                    <input type="file" id="uploadButton" name="uploadProfilePic" style="position: absolute; top: 0; left: 0; opacity: 0; width: 100%; height: 100%;">
                                                    <!-- You can style the input to make it look like a button -->
                                                    <label for="uploadButton" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer; color: #fff; display: flex; justify-content: center; align-items: center;">
                                                        Upload
                                                    </label>
                                                </div>
                                                <h4 class="text-center"><?php echo $_SESSION['fname'] . ' ' . $_SESSION['mname'] . ', ' . $_SESSION['lname'] ?></h4>
                                            </div>
                                        </form>

                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                                                <i class="fa fa-home text-center mr-1"></i>
                                                My Profile
                                            </a>
                                            <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                                                <i class="fa fa-key text-center mr-1"></i>
                                                Password
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                            <h3 class="mb-4">User's Information</h3>

                                            <form class="" action="user.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name: </label>
                                                            <p class="dispname" id="idName"><?php echo $_SESSION['fname'] . ' ' . $_SESSION['mname'] . ', ' . $_SESSION['lname'] ?></p>
                                                            <input type="hidden" id="token" value="<?php echo $_SESSION['email'] ?>">
                                                            <input type="text" name="surname" id="inputSurname" value="<?php echo $_SESSION['lname'] ?>" placeholder="Input your Surname">
                                                            <input type="text" name="firstname" id="inputFirstname" value="<?php echo $_SESSION['fname'] ?>" placeholder="Input your Firstname">
                                                            <input type="text" name="middlename" id="inputMiddlename" value="<?php echo $_SESSION['mname'] ?>" placeholder="Input your Middle Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <p><?php echo $_SESSION['email'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Age:</label>
                                                            <p class="dispage" id="idAge"><?php echo $_SESSION['Age'] ?></p>
                                                            <input type="text" name="age" id="inputAge" value="<?php echo $_SESSION['Age'] ?>" placeholder="Input your Age">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Birthday</label>
                                                            <p class="dispbirthday"><?php echo $_SESSION['Birthday'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Sex</label>
                                                            <p><?php echo $_SESSION['Sex'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <p class="dispaddress" id="idAddress"><?php echo $_SESSION['Address'] ?></p>
                                                            <input type="text" name="address" id="inputAddress" value="<?php echo $_SESSION['Address'] ?>" placeholder="Input your Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contact Number</label>
                                                            <p class="dispcontactnumber" id="idContactnumber"><?php echo $_SESSION['contactNumber'] ?></p>
                                                            <input type="text" name="contactnumber" id="inputContactnumber" value="<?php echo $_SESSION['contactNumber'] ?>" placeholder="Input your Contact Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <button class="btn btn-success" type="button" name="update" id="btnupdate">Update</button>
                                                        <button class="btn btn-success" type="button" name="save" id="btnsave" onclick="UpdateInfo()">Save</button>
                                                        <button class="btn btn-success" type="button" name="cancel" id="btncancel">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- changing password -->
                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                            <h3 class="mb-4">Password Settings</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Old password</label>
                                                        <input type="password" name="oldpass" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>New password</label>
                                                        <input type="password" name="newpass" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirm new password</label>
                                                        <input type="password" name="confirmpass" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-success" type="submit" name="updatepass">Update</button>
                                            </div>
                                        </div>
                                    </div>

    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                <img src="img/flogo.png" alt="">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua ut aliquip ex ea</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/myprofile.js"></script>
</body>

</html>