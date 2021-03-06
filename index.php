<?php
require "Tufftex.php";

use Tufftex\Tufftex;
// $pdo = new PDO("mysql:dbname=tufftexweb;host=localhost","root","", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
$pdo = Tufftex::getDb();
$result1 = $pdo->query("SELECT * FROM product ORDER BY sort_order ASC", PDO::FETCH_ASSOC);
// $result2 = $pdo->query("SELECT * FROM simplework ORDER BY id DESC", PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Welcome To Tufftex Group</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!--css-->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/font.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/lightcase.css" rel="stylesheet">
<link rel="stylesheet" href="css/stylesheet.css?v=1" media="screen">

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />


</head>

<body id="home">

    <div class="tufftex-smooth-transition-loader" style="display: none;">
    </div>

    <div class="wrapper">
    	<div class="wrapper-inner">

            <header class="tufftex-head">
            	<div class="menu-area" style="background-color:rgba(255, 255, 255, 0)">

                    <div class="tufftex-vertical-align-containers">

                        <div class="header-left logo-left">
                            <div class="tufftex-logo">
                            	<div class="tufftex-logo-wrapper" style="opacity: 1;">
                                    <a href="index.php" style="height:45px;">
                                        <img class="light-logo img-responsive" src="images/logo.png" alt="logolight">
                                        <!-- <img class="normal-logo img-responsive" src="images/logo.png" alt="logo">
                                        <img class="dark-logo img-responsive" src="images/logo.png" alt="logo"> -->

                                    </a>
                            	</div>
                            </div><!--tuf-logo-->
                        </div><!--header-left-->

                        <div class="header-center menu-center">
                            <div class="tufftex-menu">
                            	<nav class="navbar navbar-default">
  									<div class="container-fluid">
    								<!-- Brand and toggle get grouped for better mobile display -->
    								<div class="navbar-header">
      									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                         </button>
                                     </div>

    								<!-- Collect the nav links, forms, and other content for toggling -->
   			 						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      	<ul class="nav navbar-nav">
                                            <li class="active"><a href="#home">home</a></li>
                                            <li class="menu-item"><a href="#aboutus">about us</a></li>
                                            <li class="menu-item"><a href="#product">product</a></li>
                                            <li class="menu-item"><a href="#ourclient">our client</a></li>
                                            <li class="menu-item"><a href="#contact">contact</a></li>
        								</ul>
                                    </div><!-- /.navbar-collapse -->
                                  </div><!-- /.container-fluid -->
                                </nav>
                        	</div><!--tuf-menu-->
                        </div><!--End header-center-->

                        <!--
                        <div class="header-right tel-right">
                        	<div class="text-company" style="opacity: 1;">
                            	<div class="tufftex-icon-list-item">
                                    <div class="tufftex-icon-list-text"> Tufftex </div>
                                    <p class="tufftex-icon-list-title">(66)-2101-8972</p>
                                </div>
                            </div>
                        </div>
                      -->
                        <!--header-right-->

                    </div><!--tufftex-vertical-align-containers-->
           		</div><!-- End menu-area -->

            </header><!-- End tufftex-head -->

            <header class="tufftex-moblie-head">
            </header><!--End tuf moblie head -->

        	<div class="back-to-top">
            </div><!-- End back-to-top -->

            <div class="tufftex-content" style="margin-top: -100px;">
            	<div class="tufftex-content-inner">
                	<div class="tufftex-slide">
                    	<div class="tufftext-slide-inner">
                        	<div id="owl-slide" class="owl-carousel">
                            	<div class="slide-item">
                                	<img class="img-responsive" src="images/slide-1.jpg" alt="tufftex welcome">
                                    <div class="overlay">
                                        <div class="container">
                                            <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                                            	<div class="tufftex-welcome">
                                                    <h2 class="wow fadeInRight text-tufftex-group">Tufftex Group</h2>
                                                    <p class="text-welcome-our wow fadeInLeft">welcome to our site</p>
                                                    <p class="text-welcome">Change ideas Change imagine Change the world by Imagine of US.</p>
                                                </div>
                                           	</div>
										</div>
									</div>
								</div>

                                <div class="slide-item">
                                	<img class="img-responsive" src="images/slide-2.jpg" alt="tufftex welcome">
                                    <div class="overlay">
                                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                                            	<div class="tufftex-welcome">
                                                	<h2 class="wow fadeInRight text-we-do">How we do it</h2>
                                            		<img class="img-responsive img-we-do" src="images/how-we-do.png" alt="how we do">
                                           		</div>
											</div>
                                        </div>
										</div>
									</div>
                         		</div>
                        	</div><!-- End owl-slide -->
                    	</div><!-- End tufftext-slide-inner -->
                	</div><!-- End tufftex-slide -->

                    <div id="aboutus" class="tufftex-what-we-do content">
                    	<div class="container">
                        	<div class="col-md-12 tufftex-text-head">
                            	<h1 class="tufftex-subject text-center text-uppercase">WHAT WE <span>DO</span></h1>
                            </div>
                            <div class="col-md-12 tufftex-detail">
                            	<div class="col-md-1 col-sm-1"></div>
                                <div class="col-md-2 col-sm-2 tufftex-detail-inner wow fadeInUp">
                                	<div class="touch">
                                    	<img class="img-responsive img-what-we-do" src="images/touch.png" alt="สัมผัส">
                                        <div class="text-detail-whatwedo text-center">
                                        	<h2>สัมผัส</h2>
                                            <p>สร้างความโดดเด่นของแบนรด์ ให้สามารถสัมผัสถึงการผสมผสาน ระหว่างดิจิตอลและแบนรด์ของคุณ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 tufftex-detail-inner wow fadeInUp">
                                	<div class="touch">
                                    	<img class="img-responsive img-what-we-do" src="images/heart.png" alt="เข้าใจ">
                                        <div class="text-detail-whatwedo text-center">
                                        	<h2>เข้าใจ</h2>
                                            <p>สร้างประสบการณ์ที่โดดเด่น ด้วยความเข้าใจกลุ่มเป้าหมายของแบนรด์คุณ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 tufftex-detail-inner wow fadeInUp">
                                	<div class="touch">
                                    	<img class="img-responsive img-what-we-do" src="images/different.png" alt="แตกต่าง">
                                        <div class="text-detail-whatwedo text-center">
                                        	<h2>แตกต่าง</h2>
                                            <p>สร้างความแตกต่างในการ นำเสนอแบนรด์ของคุณ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 tufftex-detail-inner wow fadeInUp">
                                	<div class="touch">
                                    	<img class="img-responsive img-what-we-do" src="images/out-in.png" alt="เข้าถึง">
                                        <div class="text-detail-whatwedo text-center">
                                        	<h2>เข้าถึง</h2>
                                            <p>สร้างแบบแผนและระดับให้เข้าถึง การตอบสนองระหว่างผู้คนและแบนรด์ของคุณ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 tufftex-detail-inner wow fadeInUp">
                                	<div class="touch">
                                    	<img class="img-responsive img-what-we-do" src="images/trust.png" alt="เชื่อมั่น">
                                        <div class="text-detail-whatwedo text-center">
                                        	<h2>เชื่อมั่น</h2>
                                            <p>สร้างความพึงพอใจของต่อผู้คน อย่างมีระดับให้เกิดความเชื่อมั่นในแบนรด์ของคุณ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1"></div>
                            </div>
                        </div><!-- End container -->
                    </div><!-- End tufftex-what-we-do -->

                    <div class="tufftex-company">
                    	<div class="container">
                        	<div id="owl-company" class="owlCarousel">
                            	<div class="col-md-12">
                                    <div class="col-md-6 col-sm-6 video-tufftex">
                                    <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                          <iframe width="100%" height="320" border="none" class="embed-responsive-item" src="https://www.youtube.com/embed/7FX5YuihHr8"></iframe>
                                        </div>
                                    </div><!-- End video-tufftex -->

                                    <div class="col-md-6 col-sm-6 company-detail text-center">
                                        <h1 class="head-company">Company</h1>
                                        <div class="company-inner">
                                            <h2><span>"</span>วิศวกรรุ่นใหม่ สถาปนิก มัณฑนากร โปรแกรมเมอร์ นักการสื่อสารการตลาด การประชาสัมพันธ์ <span>"</span></h2>
                                            <p class="text-detail-company">เน้นบริการด้านการ ออกแบบสื่อโฆษณาต่างๆ โดยเฉพาะนวัตกรรมที่ทันสมัย
                                            ซึงเป็นนวัตกรรม ที่สร้างเพื่อโลกในยุคดิจิตัล ด้วยภาพเสียงและข้อความที่แปลกใหม่ไม่เหมือนใคร ตอบสนองความต้องการ ของผู้บริโภครวม องค์กร การตลาด และประชาสัมพันธ์ ให้สอดคล้องกับกลุ่มเป้าหมายที่ต้องการ
                                            </p>
                                        </div>
                                    </div><!-- End company-detail -->
                                </div><!-- End col-md-12 -->

                                <div class="col-md-12 company-vision">
                                	<div class="mission text-left">
                                    	<h1 class="head-company">Mission</h1>
                                        <p>สร้างผลงานระดับสากล   มุ่งเน้นบริการและคุณภาพ
ต้นแบบองค์กรสร้างสรรค์และพัฒนาสิ่งใหม่  ส่งเสริมองค์กรตอบแทนสังคม</p>
                                    </div>
                                    <div class="vision text-right">
                                    	<h1 class="head-company">Vision</h1>
                                        <p>ผสมผสานการออกแบบและเทคโนโลยีเพื่อความทันสมัยและมีระดับแก่มวลชน</p>
                                    </div>
                                </div>
                             </div><!-- End owl-company -->
                        </div>
                    </div><!-- End company -->

                    <div class="tufftex-service" id="product">
                    	<div class="container">
                        	<div class="col-md-12 tufftex-text-head">
                            	<h1 class="tufftex-subject text-center text-uppercase">OUR OF <span>SERVICES</span></h1>
                                <p class="text-center">Delivery, Branding promos, Innovation passion, Outside The Box</p>
                            </div>
                           	<!-- <div class="col-md-12 hidden">
                            	<div id="product-btn" class="open active product text-center text-uppercase filter-service-btn" data-filter=".service-product"><a>PRODUCT</a></div>
                              <div id="service-btn" class="service text-center text-uppercase filter-service-btn" data-filter=".service-service"><a>SERVICE</a></div>
                            </div> -->

                            <div class="row isotope block-display">
                              <?php
                              foreach($result1 as $row){
                                $inlineId = "open-product-".$row['id'];
                                // $type = $row['type'] == "product" ? "service-product": "service-service";
                              ?>
                              <div class="col-md-3 col-xs-6 col-sm-3 element-item img-service thumbnail-center">
                                <a href="product/<?php echo $row["name"];?>" class="various">
                                	<img class="img-responsive" src="product_thumb/<?php echo $row["thumb"];?>" alt="product">
                                </a>
                              </div>
                              <?php }?>
                          </div>
                        </div><!-- End container -->

                    </div><!-- End tufftex service -->


                    <div id="ourclient" class="our-client">
                    	<div class="container">
                        	<div class="our-client-head">
                            	<h1 class="tufftex-client text-center text-uppercase">OUR <span>CLIENTS</span></h1>
                                <img class="img-responsive" src="images/arrow-white.png" alt="arrow">
                            </div>

                            <div class="col-md-12 slide-client">
                                <img class="img-responsive" src="images/our-client.png" alt="client">

                                <!--
                                <div id="owl-client" class="owl-carousel owl-theme">
                                      <div class="item"><img class="img-responsive" src="images/client_01.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_02.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_03.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_04.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_05.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_06.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_07.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_08.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_09.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_10.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_11.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_12.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_14.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_15.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_16.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_17.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_18.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_19.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_20.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_21.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_22.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_23.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_24.jpg" alt="client"></div>
                                      <div class="item"><img class="img-responsive" src="images/client_25.jpg" alt="client"></div>
                                </div>
-->
                        	</div><!-- End slide -->
                    	</div><!-- End container -->
                    </div><!-- End our-client -->

                    <div class="simple-work hidden">
                    	<div class="container">
                        	<div class="col-md-12 tufftex-text-head">
                            	<h1 class="tufftex-subject text-center text-uppercase">SIMPLE <span>WORK</span></h1>
                                <p class="text-center">Let’s take a look at some of the best of our works here.</p>
                            </div>
                        </div>
                        <div class="pic-simple-work">
                            <?php foreach($result2 as $row){ ?>
                            <div class="col-md-2 col-xs-6 col-sm-3 pic-simple">
                                <img class="img-responsive"
                                  src="simplework/thumbs/<?php echo $row['image'];?>"
                                  data-image="simplework/<?php echo $row['image'];?>"
                                  alt="ative simplework">
                                <div class="hover-pic text-center">
                                	<img class="img-responsive" src="images/zoom.png" alt="zoom">
                                    <h3>image</h3>
                                    <p>detail image</p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="container">
                        	<div class="col-md-12 button-view-all">
                            	<button class="text-center view-all-btn">view all works</button>
                            </div>
                        </div>
                    </div><!--end -simple-work-->


                    <div class="tufftex-profile hidden">
                    	<div class="action fullscreen parallax" style="background-image:url('images/cover.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
                        	<div class="head-profile">
                                <div class="container">
                                	<div class="text-left">
                                        <h1 class="text-uppercase">EXECUTIVE</h1>
                                        <h1 class="text-uppercase">PROFILES</h1>
                                        <p>Create value for customer, Breaking old world with imagine of us.</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 text-center profile-inner">
                                    	<img class="img-responsive" src="images/profile-1.png" alt="profile 1">
                                        <p class="name">Ukit Pakornphadungsit</p>
                                        <p class="profile-detail">CEO and CO-founder Executive Director</p>
                                   	</div>
                                    <div class="col-md-3 col-sm-6 text-center profile-inner">
                               	        <img class="img-responsive" src="images/profile-2.png" alt="profile 1">
                           	            <p class="name">Jadsadaporn Sribua</p>
                       	                <p class="profile-detail">Vice President and CO-founder Director</p>
                                  	</div>
                                    <div class="col-md-3 col-sm-6 text-center profile-inner">
         	                           <img class="img-responsive" src="images/profile-3.png" alt="profile 1">
                                       <p class="name">Gasemsit Kumpradid</p>
                                       <p class="profile-detail">Vice President and CO-founder Motion Grapher Group Head</p>
                                  	</div>
                                    <div class="col-md-3 col-sm-6 text-center profile-inner">
	                                    <img class="img-responsive" src="images/profile-4.png" alt="profile 1">
                                        <p class="name">Niran Yodying</p>
                                        <p class="profile-detail">Vice President and CO-founder Office Clerk, Operational Level</p>
                                  	</div>
                                </div>
                        	</div>
                        </div><!-- End parallax -->
                    </div><!-- END tufftex profile -->


                    <div id="contact" class="tufftex-contact">
                    	<div class="container">
                        	<div class="contact-inner">
                            	<h1 class="contact-head text-center text-uppercase">CONTACT <span>INFO</span></h1>
                                <img class="img-responsive" src="images/arrow.png" alt="head">

                                    <div class="col-md-4 col-sm-4 text-center email">
                                    	<img class="img-responsive" src="images/email.png" alt="email">
                                        <p>tufftex2011@gmail.com</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center address">
                                    	<img class="img-responsive" src="images/address.png" alt="address">
                                        <p>1991/192 ถนนอ่อนนุช แขวงสวนหลวง
                                        เขตสวนหลวง กรุงเทพ 10250</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center tel">
                                    	<img class="img-responsive" src="images/tel.png" alt="tel">
                                        <p>(66)-2101-8972</p>
										<p>(66)-83-388-4388</p>
                                    </div>

                                <div class="col-md-12 col-sm-12 social text-center">
                                	<a href=""><img class="img-responsive" src="images/facebook.png" alt="tufftex facebook"></a>
                                    <a href=""><img class="img-responsive" src="images/youtube.png" alt="tufftex yotube"></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End tufftex contact -->

            	</div>
            </div><!-- End Tufftex-content -->

            <div class="tufftex-footer">
            	<div class="container">
                	<div class="copyright text-center">
                    	<p>copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2016 - Tufftext Group Co., Ltd.</p>
                    </div>
                </div>
            </div><!-- End tufftex-footer -->

    	</div><!-- End wrapper-inner -->
    </div><!-- END wrapper -->












<!-- javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/wow.min.js"></script>
  	<script src="js/owl.carousel.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script>
		new WOW().init();
	</script>

   <script>
   $("#owl-slide").owlCarousel({

    // Most important owl features
    items : 1,
    itemsCustom : false,
     itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,

    //Basic Speeds
    slideSpeed : 300,
    paginationSpeed : 800,
    rewindSpeed : 1000,

    //Autoplay
    autoPlay : true,
    stopOnHover : false,

    // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,

    //Pagination
    pagination : false,
    paginationNumbers: false,

    // Responsive
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,

    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",

    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",

    //Auto height
    autoHeight : true,

    //JSON
    jsonPath : false,
    jsonSuccess : false,

    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,

    //Transitions
    transitionStyle : false,

    // Other
    addClassActive : false,

    //Callbacks
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false,
    afterInit: false,
    beforeMove: false,
    afterMove: false,
    afterAction: false,
    startDragging : false

})
</script>
<script>
$(document).ready(function() {

  $("#owl-company").owlCarousel({

      navigation : true, // Show next and prev buttons
	  navigationText : ["prev","next"],
	  pagination : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true

      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

});
</script>
<script>
$(document).ready(function() {

  var owl = $("#owl-client");

  owl.owlCarousel({

	  autoPlay: 3000, //Set AutoPlay to 3 seconds

      items : 6, //6 items above 1000px browser width
      itemsDesktop : [1000,6], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,4], // betweem 900px and 601px
      itemsTablet: [600,3], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });


  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })

});
</script>
<script type="text/javascript" src="js/main.js?v=1"></script>
</body>
</html>
