
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>JKDHousing | ATS Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/blog.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>

<body>
<?php include('menu.php') ?>

       <!-- banner-inner -->
    <div class="inner-page">
			

	</div>
	<!--// banner-inner -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item active">ATS Projects</li>
				</ol>
	
  <!-- blog -->
    <section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3" style="padding-top: 1rem !important;">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3" style="padding-top: 1rem !important;">
                <h3 class="tittle-wthree text-center mb-lg-5 mb-3">
                    <span>ATS</span>Projects</h3>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <!--left-->
                    <div class="col-lg-12 left-blog-info" style="text-align: center !important;">
                        <div class="row mb-4">
                            <div class="col-md-4 card">
                                <a href="#">
								<img src="images/Godrej.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    
                                    <h5 class="card-title " align="center">
                                        <a href="#">ATS Picturesque</a>
                                    </h5>
									<p align="center">Rera No: UPRERAPRJ631<br>
									  Location: Sector 152, Noida<br>
									  Configs: 3, 4 BHK Apartment<br>
									  Carpet Area: 1240.00 sq.ft. - 2655.00 sq.ft.<br>
									  Price:₹ 79.51 L - 1.7 Cr<br>
									  Possession: Oct, 2024</p>
                                    <div class="read inner mt-4">
                                        <a href="ats-picturesque.php" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
									  <!-- Modal -->
                                </div>
                            </div>
                            <div class="col-md-4 card">
                                <a href="#">
								<img src="images/ats.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    
                                    <h5 class="card-title ">
                                        <a href="#">ATS Pristine</a>
                                    </h5>
									<p align="center">Rera No: UPRERAPRJ2875<br>
									  Location: Sector 150, Noida<br>
									  Configs: 3, 4 BHK Apartment<br>
									  Carpet Area: 1750 sq.ft. - 3200 sq.ft.<br>
									  Price:₹ 96.25 L - 1.76 Cr <br>
									  Possession: Dec, 2021</p>
                                    <div class="read inner mt-4">
                                        <a href="ats-pristine.php" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card ">
                                <a href="#">
								<img src="images/ace.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    
                                    <h5 class="card-title ">
                                        <a href="#">ATS Pristine Golf Villa</a>
                                    </h5>
                                    <p align="center">Rera No: UPRERAPRJ3796<br>
									  Location: Sector 150, Noida<br>
									  Configs: 4 BHK Villa<br>
									  Carpet Area: 8000 sq.ft. – 8500 sq.ft.<br>
									  Price:₹ 5.65 Cr - 6.0 Cr<br>
									  Possession: Dec, 2022</p>
                                    <div class="read inner mt-4">
                                        <a href="ats-pristine-golf-villa.php" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
									
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--//left-->
                </div>
            </div>
        </div>
    </section>
    <!-- //blog-->

  
<!-- footer -->
<?php include("footer.php")?>
<!-- //footer -->
    
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>