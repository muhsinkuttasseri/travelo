<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Package Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/index.html">
                                        <img src="../img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="../index.html">home</a></li>
                                            <li><a href="../about.html">About</a></li>
                                            <li><a class="" href="../travel_destination.html">Destination</a></l/li>
                                            
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="../blog.html">blog</a></li>
                                                    <li><a href="../single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="../contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">      
                                            <li> <a href="../user/html/login.html">login</a>|<a href="../user/html/signup.php"> signup </a></li>
                                             </p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Travelo</h3>
                        <p>Travelo perfect trip with awesome Gratitude</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <div class="section-top-border">
        <div>
            <a class="boxed-btn3" href="index.php">Destination Query Requests</a>
            <a class="boxed-btn3" href="contactlist.php">Contact Messages</a>
            <a class="boxed-btn3" href="packagelist.php">Custom Package Requests</a>
            <a class="boxed-btn3" href="userlist.php">Users List</a>
        </div>

        <h3 class="mb-30">Package List Table</h3>
        <div class="progress-table-wrap" style="overflow-x: scroll; min-width: fit-content;">
            <div class="progress-table">
                <div class="table-head">
                    <div class="serial">#</div>
                    <div class="visit">first_name</div>
                    <div class="visit">last_name</div>
                    <div class="visit">passport_no</div>
                    <div class="visit">email</div>
                    <div class="visit">address</div>
                    <div class="visit">destination</div>
                    <div class="visit">travel_type</div>
                    <div class="visit">country</div>
                    <div class="visit">phone</div>
                    <div class="visit">message</div>
                    <div class="visit">language</div>
                    <div class="visit">visa</div>
                    <div class="visit">tickets</div>
                    <div class="visit">treatment</div>
                    <div class="visit">taxi</div>
                    <div class="visit">hotel</div>
                    <div class="visit">guid</div>

                </div>


                <?php
                    $conn=mysqli_connect('localhost','root','');
                    mysqli_select_db($conn,'travelo');
                    if(!$conn){
                        echo "Connection Failed...";
                    }
                
                    $sql = "SELECT first_name, last_name, passport_no, email, address, destination,
                            travel_type, country, phone, message, language, visa, 
                            tickets, treatment, taxi, hotel, guid FROM custom_package;";
                    $result = $conn->query($sql);
                

                    $i = 0;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='table-row'>
                                <div class='serial'>".++$i."</div>
                                <div class='visit'>".$row['first_name'] ."</div>
                                <div class='visit'>".$row['last_name'] ."</div>
                                <div class='visit'>".$row['passport_no'] ."</div>
                                <div class='visit'>".$row['email'] ."</div>
                                <div class='visit'>".$row['address'] ."</div>
                                <div class='visit'>".$row['destination'] ."</div>
                                <div class='visit'>".$row['travel_type'] ."</div>
                                <div class='visit'>".$row['country'] ."</div>
                                <div class='visit'>".$row['phone'] ."</div>
                                <div class='visit'>".$row['message'] ."</div>
                                <div class='visit'>".$row['language'] ."</div>
                                <div class='visit'>".$row['visa'] ."</div>
                                <div class='visit'>".$row['tickets'] ."</div>
                                <div class='visit'>".$row['treatment'] ."</div>
                                <div class='visit'>".$row['taxi'] ."</div>
                                <div class='visit'>".$row['hotel'] ."</div>
                                <div class='visit'>".$row['guid'] ."</div>
                            </div>";   
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </div>
        </div>
    </div>


    
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="../img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>travello,Malappuram,Kerala <br> India <br>
                                <a href="#">+917012813561</a> <br>
                                <a href="#">travello@gmail.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="#">Packages</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#"> Hospitals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">Delhi</a></li>
                                <li><a href="#">Bangolor</a></li>
                                <li><a href="#">keral</a></li>
                                <li><a href="#">Tamil nadu</a></li>
                                <li><a href="#">Punjab</a></li>
                                <li><a href="#">Andra</a></li>
                                <li><a href="#">Orisa</a></li>
                                <li><a href="#">Uthar Predesh</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="../img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="../img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="../img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="../img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="../img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="../img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ajax-form.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/scrollIt.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/gijgo.min.js"></script>
    <script src="../js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="../js/contact.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>


    <script src="../js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>

    <style>
        .visit {
            padding: 0px 5px;
        }
    </style>
</body>

</html>