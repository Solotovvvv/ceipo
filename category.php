<?php
require_once "includes/config.php";
session_start();
// echo $_SESSION['ownerId'];

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

    <style>
        .category-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .category {
            width: calc(33.33% - 10px);
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .subcategory {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            font-size: 18px;
        }

        .swal-confirm-button {
            width: 100px;
            /* Adjust the width as needed */
        }
    </style>

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
                            <a href="./index.html"><img src="img/logo-main.png" alt=""></a><br>
                            <!-- <ul>Business Directory</ul> -->
                        </div>
                    </div>
                    <?php if (empty($_SESSION['email'])) { ?>
                        <div class="col-lg-9">
                            <div class="ht-widget">
                                <button onclick="document.getElementById('id01').style.display='block'">Login</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-9">
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
                                                    <li>
                                                        <h2><?php echo $_SESSION['lname'] . ' , ' . $_SESSION['fname'] ?></h2>
                                                    </li>
                                                    <li><a href="user.php">MY PROFILE</a></li>
                                                    <?php if ($_SESSION['role'] == 3) { ?>
                                                        <li><a href="user_module-main/index.php">CREATE RESUME</a></li>
                                                    <?php } ?>
                                                    <?php if ($_SESSION['role'] == 2) { ?>
                                                        <li><a href="manage.html">MANAGE BUSINESS</a></li>
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
                    <?php } ?>
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
                                <li><a href="./listing.php">Business Listing</a></li>
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
                                    <h4>FIND BY CATEGORY</h4>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8 col-sm-10 col-12 order-2">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search-button">
                                            <div class="input-group-append">
                                                <button class="btn btn-success my-sm-0 mb-2" role="button">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 bg-white border rounded px-2 py-3 p-md-4">
                                <!-- Category 1 -->
                                <div class="col-lg-12">
                                    <h3><a href="#" class="category-link"><i class="fa fa-car circular-icon" style="font-size: 25px;"></i> Automotive</a></h3><br>
                                    <div class="subcategory">
                                        <a href="#" class="subcategory-link">Subcategory 1.1</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.2</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.3</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.4</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.5</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.6</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.7</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.8</a>
                                        <a href="#" class="subcategory-link">Subcategory 1.9</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Modal -->
    <div id="id01" class="modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h3 class="text-center mb-6 font-weight-bold">LOG IN</h3>
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container mt-4">
                    <div class="card px-2 py-3" id="form1">
                        <div class="form-data" v-if="!submitted">
                            <div class="forms-inputs mb-4">
                                <!-- <form method="post"> -->
                                <span>Email</span>
                                <input type="text" name="txtEmail" id="email_log" required>
                            </div>
                            <div class="forms-inputs mb-4">
                                <span>Password</span>
                                <input type="password" name="txtUserPass" id="password_log" required>
                                <h6><a href="#">Forgot Password?</a></h6>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn w-100" onclick="loginUser()">LOG IN</button>
                            </div>
                        </div>
                        </form>
                        <div class="success-data" v-else>
                            <div class="text-center d-flex flex-column">
                                <h6 class="text-center fs-1">Don't have a user account? <a href="#id02" data-toggle="modal">Sign Up</a></h6>
                            </div>
                        </div>
                        <div class="success-data" v-else>
                            <div class="text-center d-flex flex-column">
                                <h6 class="text-center fs-1">Don't have a business account? <a href="#id03" data-toggle="modal">Sign Up</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Login Modal -->

    <!-- User Signup Modal -->
    <div id="id02" class="modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h3 class="text-center mb-6 font-weight-bold">USER ACCOUNT REGISTRATION</h3>
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container mt-4">
                    <div class="card px-2 py-3" id="form2">
                        <div class="form-data" v-if="!submitted">
                            <form class="" action="index.php" method="post">
                            </form>
                            <div class="row">
                                <div class="col">
                                    <div class="forms-inputs mb-4"> <span>First Name</span> <input id="f_name" type="text">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="forms-inputs mb-4"> <span>Middle Name</span> <input id="m_name" type="text">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="forms-inputs mb-4"> <span>Last Name</span> <input id="l_name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="forms-inputs mb-4"> <span>Email</span> <input type="text" id="emailUser"> </div>
                                </div>
                            </div>
                            <div class="forms-inputs mb-4"> <span>Password</span> <input type="password" id="pass">
                            </div>
                            <div class="forms-inputs mb-4"> <span>Confirm Password</span> <input type="password" id="con_pass">
                            </div>
                            <div class="mb-3"> <button class="btn w-100" onclick="createUser()">SIGN UP</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of User Signup Modal -->

    <!-- Business Signup Modal -->
    <div id="id03" class="modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h3 class="text-center mb-6 font-weight-bold">BUSINESS ACCOUNT REGISTRATION</h3>
                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container mt-4">
                    <div class="card px-2 py-3" id="form2">
                        <div class="form-data" v-if="!submitted">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>Email</span> <input type="email" name="email" id="ownerEmail"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>First Name</span> <input type="text" name="firstname" id="ownerFname"></div>
                                    </div>
                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>Middle Name</span> <input type="text" name="middlename" id="ownerMname"></div>
                                    </div>

                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>Last Name</span> <input type="text" name="surname" id="ownerLname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>Birthday</span> <input type="date" name="birthday" required id="ownerBirthday"></div>
                                    </div>
                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>Age</span> <input type="text" name="age" required id="ownerAge"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group form-check">
                                            <span>Sex</span>
                                            <br>
                                            <input type="radio" id="Female" name="sex" value="Female" required> Female
                                            <input type="radio" id="Male" name="sex" value="Male" required> Male
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="forms-inputs mb-4"> <span>Contact Number</span> <input type="tell" name="contactnumber" id="ownerNumber"></div>
                                    </div>
                                </div>
                                <div class="forms-inputs mb-4"> <span>Address</span> <input type="text" name="address" id="ownerAddress"></div>
                                <div class="forms-inputs mb-4"> <span>Password</span> <input type="password" name="password" id="ownerPass"></div>
                                <div class="forms-inputs mb-4"> <span>Confirm Password</span> <input type="password" name="passwordconfirm" id="ownerConPass"></div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="checkTerms">
                                    <p class="form-check-label" for="exampleCheck1">By clicking this, you are agreeing to the <a href="#">Terms & Conditions </a> and the <a href="#">Privacy Policy</a>.</p>
                                </div>
                                <div class="mb-3"> <button disabled class="btn w-100" id="signUp" onclick="createBusinessOwner()" name="btnbusiness" type="button">SIGN UP</button></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Business Signup Modal -->

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Get a reference to the checkbox element
            var checkbox = $("#checkTerms");
            var signUpButton = $("#signUp");

            // Add a change event handler
            checkbox.change(function() {
                // Check if the checkbox is checked
                if (checkbox.is(":checked")) {
                    // Checkbox is checked
                    // alert("Checkbox is checked!");
                    signUpButton.prop("disabled", false);
                    // You can add your code to handle the checked state here
                } else {
                    // Checkbox is unchecked
                    // alert("Checkbox is unchecked!");
                    signUpButton.prop("disabled", true);
                    // You can add your code to handle the unchecked state here
                }
            });
        });

        $('#id02, #id03').on('show.bs.modal', function(e) {
            $('#id01').modal('hide'); // Close the first modal when the second modal is shown
        });

        $('#id02, #id03').on('hidden.bs.modal', function(e) {
            $('#id01').modal('show'); // Reopen the first modal when the second or third modal is closed
        });

        function createUser() {
            var fname = $('#f_name').val();
            var mname = $('#m_name').val();
            var lname = $('#l_name').val();
            var email = $('#emailUser').val();
            var pass = $('#pass').val();
            var conpass = $('#con_pass').val();

            var payload = {
                fname: fname,
                mname: mname,
                lname: lname,
                email: email,
                pass: pass
            };

            if (pass == conpass) {
                // console.log(payload)
                $.ajax({
                    type: "POST",
                    url: 'controllers/users.php',
                    data: {
                        payload: JSON.stringify(payload),
                        setFunction: 'createUser'
                    },
                    success: function(response) {
                        data = JSON.parse(response);
                        Swal.fire({
                            title: data.title,
                            text: data.message,
                            icon: data.icon,
                            customClass: {
                                confirmButton: 'swal-confirm-button',
                            },
                            showCancelButton: false,
                        });
                        //for normal UI AHAHAHHAHAHA
                        // swal.fire(data.title, data.message, data.icon);
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            } else {
                Swal.fire({
                    title: 'Warning',
                    text: 'Passwords didn\'t match',
                    icon: 'warning',
                    customClass: {
                        confirmButton: 'swal-confirm-button',
                    },
                    showCancelButton: false,
                });
            }
        };

        function createBusinessOwner() {
            var ownerEmail = $('#ownerEmail').val();
            var ownerFname = $('#ownerFname').val();
            var ownerMname = $('#ownerMname').val();
            var ownerLname = $('#ownerLname').val();
            var ownerBirthday = $('#ownerBirthday').val();
            var ownerAge = $('#ownerAge').val();
            var ownerSex = $("[name='sex']:checked").val();
            var ownerNumber = $('#ownerNumber').val();
            var ownerAddress = $('#ownerAddress').val();
            var ownerPass = $('#ownerPass').val();
            var ownerConPass = $('#ownerConPass').val();

            var payload = {
                ownerEmail: ownerEmail,
                ownerFname: ownerFname,
                ownerMname: ownerMname,
                ownerLname: ownerLname,
                ownerBirthday: ownerBirthday,
                ownerAge: ownerAge,
                ownerSex: ownerSex,
                ownerNumber: ownerNumber,
                ownerAddress: ownerAddress,
                ownerPass: ownerPass
            };

            if (ownerPass == ownerConPass) {
                // console.log(payload)
                $.ajax({
                    type: "POST",
                    url: 'controllers/users.php',
                    data: {
                        payload: JSON.stringify(payload),
                        setFunction: 'createOwner'
                    },
                    success: function(response) {
                        data = JSON.parse(response);
                        Swal.fire({
                            title: data.title,
                            text: data.message,
                            icon: data.icon,
                            customClass: {
                                confirmButton: 'swal-confirm-button',
                            },
                            showCancelButton: false,
                        });
                        //for normal UI AHAHAHHAHAHA
                        // swal.fire(data.title, data.message, data.icon);
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            } else {
                Swal.fire({
                    title: 'Warning',
                    text: 'Passwords didn\'t match',
                    icon: 'warning',
                    customClass: {
                        confirmButton: 'swal-confirm-button',
                    },
                    showCancelButton: false,
                });
            }
        };

        function loginUser() {
            var username = $("#email_log").val();
            var pass = $('#password_log').val();

            var payload = {
                username: username,
                pass: pass
            };

            $.ajax({
                type: "POST",
                url: 'controllers/users.php',
                data: {
                    payload: JSON.stringify(payload),
                    setFunction: 'loginUser'
                },
                success: function(response) {
                    data = JSON.parse(response);
                    Swal.fire({
                        title: data.title,
                        text: data.message,
                        icon: data.icon,
                        customClass: {
                            confirmButton: 'swal-confirm-button',
                        },
                        showCancelButton: false,
                    });
                    //for normal UI AHAHAHHAHAHA
                    // swal.fire(data.title, data.message, data.icon);
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
            });
        };
    </script>
</body>

</html>