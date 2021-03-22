
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Poojatourandtravels| About :: </title>
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
    <link href="css/examples.css" rel="stylesheet" type="text/css">
    <link href="css/slider-pro.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
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
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>
    <!---->
    <!--banner-bottom-w3layouts-->
    <section class="banner-bottom-w3layouts py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-w3ls py-md-5 py-4">
                <h3 class="tittle-wthree text-center mb-lg-5 mb-3">
                    <span>Visit</span>Welcome to JKD Housing</h3>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-lg-6 about-img">
                        <img src="images/rt.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 aboutright">
                       <h3>Properties that will make your dream real!</h3>
                       
                        <h4>Best dealers in the city..</h4>
                        <p>  JKD Housing was conceptualized in 2010 with the aim to help people  find a property that makes their dream into reality</p>
						<p>We deal in both residential, commercial properties and if you are looking for a plot then JKD Housing will offer the best plots in the city.</p>
						
</p>
                        
                    </div>
                </div>
            </div>
        </div>
<!-- footer -->
<?php include("footer.php")?>
<!-- //footer -->
    

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!--slider-->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script>
        $(document).ready(function($) {
            $('#example1').sliderPro({
                width: 1980,
                height: 800,
                arrows: true,
                buttons: false,
                waitForLayers: true,
                thumbnailWidth: 270,
                thumbnailHeight: 100,
                thumbnailPointer: true,
                autoplay: false,
                autoScaleLayers: false,
                breakpoints: {
                    500: {
                        thumbnailWidth: 120,
                        thumbnailHeight: 50
                    }
                }
            });
        });

    </script>
    <!--//slider-->
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats -->

    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })

    </script>
    <!-- //carousel -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <script>
        $(document).ready(function() {
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
