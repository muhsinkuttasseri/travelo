<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Package Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
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
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a class="" href="travel_destination.php">Destination</a></l/li>
                                            <li><a href="hospital.php">Hospital</a></li>
                                          
                                            <li><a href="single-blog.php">Blog</a></li>
                                               </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <ul style="display: flex;">      
                                        <?php
                                            if(!isset($_COOKIE['login_user']))
                                                echo "<li style='padding: 0px 5px;'> <a href='user/html/login.html'>login</a>|<a href='user/html/signup.html'> signup </a></li>";
                                            else {
                                                echo "<li style='padding: 0px 5px;'> <a href=''>Hello, ". $_COOKIE['login_user'] ."</a> </li>";
                                                echo "<li style='padding: 0px 5px;'> <a href='user/html/logout.php'>Logout</a> </li>";
                                            }
                                        ?>
                                    </ul>
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

	<!-- Start Sample Area -->
	

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
		
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Complete Package</h3>
						<form action="custompackage.php" method="POST">
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="First Name"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="last_name" placeholder="Last Name"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="passport_no" placeholder="Passport No"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Passport No.'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="email" placeholder="Email address"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
									class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Address'" required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="destination" placeholder="Destination Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Destination Address'" required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                
								<div class="form-select" id="default-select">
									<select id="travel_type" name="travel_type">                                      
                                        <option value="taxi">Taxi</option>
                                        <option value="air">Air</option>
                                        <option value="cruisor">Cruisor</option>
                                        <option value="train">Train</option>
									</select>
								</div>
                            </div>
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select name="country">
                                        <option value=" ">Select Your Country</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="England">England</option>
                                        <option value="Srilanka">Srilanka</option>
									</select>
								</div>
                            </div>
                            
                            <div class="mt-10">
								<input type="text" name="phone" placeholder="Phone No."
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone No.'" required
									class="single-input">
							</div>

							<div class="mt-10">
								<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
									name="message" onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <div class="single-element-widget mt-30">
                                <h3 class="mb-30">Language You Prefer</h3>
                                <div class="default-select" id="default-select">
                                    <select name="language">
                                        <option value="english">English</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="arabic">Arabic</option>
                                        <option value="portuguise">Portuguise</option>
                                        <option value="bengali">Bengali</option>
                                    </select>
                                </div>
                            </div>
							<!-- For Gradient Border Use -->
							<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
							<div class="mt-10">
                                </div>
								
                            <p><h2>More Options</h2></p>
                            <div class="switch-wrap d-flex justify-content-between">
								<p>01.Do you need Visa Assistance </p>
								<div class="primary-switch">
									<input type="checkbox" id="visa" name="visa">
									<label for="visa"></label>
								</div>
                            </div>
                            
                            <div class="switch-wrap d-flex justify-content-between">
								<p>02.Do you need Air tickets </p>
								<div class="primary-switch">
									<input type="checkbox" id="tickets" name="tickets">
									<label for="tickets"></label>
								</div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
								<p>03.Do you need Treatments in india </p>
								<div class="primary-switch">
									<input type="checkbox" id="treatment" name="treatment">
									<label for="treatment"></label>
								</div>
                            </div>
                            
                            <div class="switch-wrap d-flex justify-content-between">
								<p>04.Do you need Taxi Assistance </p>
								<div class="primary-switch">
									<input type="checkbox" id="taxi" name="taxi">
									<label for="taxi"></label>
								</div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
								<p>05.Do you need hotel Rooms </p>
								<div class="primary-switch">
									<input type="checkbox" id="hotel" name="hotel">
									<label for="hotel"></label>
								</div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
								<p>06.Do you need a guid to Assist </p>
								<div class="primary-switch">
									<input type="checkbox" id="guid" name="guid">
									<label for="guid"></label>
								</div>
                            </div> 
                            
                            <div style="text-align: center">
                                <button class="boxed-btn" type="submit" id="submit_package">Submit</button>
                            </div>

                            </div>
							
						</form>
					</div>
					
						
						</div>
						
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
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
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
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
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });

        $(".search_form").submit(function(e) {
            e.preventDefault();
        });


        $('#submit_package').click(function(){


            $.ajax({
                type: 'POST',
                url: "custompackage.php",
                dataType: "json",
                data: $('.search_form').serialize(),
                success: function(data) {
                    

                }
            });

            alert("Submitted Succesfully!")

        })
    </script>