
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Poojatourandtravels | Contact </title>
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
	<base href="/jkd-sandal/">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>

<body>
    <?php include('menu.php') ?>

        <!-- banner-inner -->
<div class="inner-page">		

	</div>
	<!--// banner-inner -->

    <!---->
<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item active">Contact</li>
				</ol>
	
<!-- contact -->
<section class="banner-bottom-w3layouts contact py-md-5 py-3">
        <div class="inner-sec-w3ls py-md-5 py-3">
            <h3 class="tittle-wthree text-center mb-lg-5 mb-3">
                <span>Get Intouch</span>Contact Us</h3>
			<div class="map" style="margin-bottom:-18em;">
				<div class="main_grid_contact" style="position:relative;">
					<div class="form">
						<h4 class="mb-4 text-center">Send us a message</h4>
						<form action="#" method="post">
							<div class="form-group">
								<label class="my-2">Name</label>
								<input class="form-control" type="text" name="Name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="Email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea id="textarea" placeholder=""></textarea>
							</div>
							<div class="input-group1">
								<input class="form-control" type="submit" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="address row">
					<div class="col-lg-4 address-grid">
						<div class="row address-info" style="padding-top:18px">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Address</h6>
								<p> Mahaveer Nagar (657.78 Km) 344001 Barmer, Rajasthan

								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Email</h6>
								<p>
									<a href="mailto:poojaenterprises78@gmail.com"> poojaenterprises78@gmail.com</a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Phone</h6>
								<p>+91 9414916201 | 
								9414106740</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
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