<?php
require "Tufftex.php";

use Tufftex\Tufftex;

$db = Tufftex::getDb();
$stmt = $db->prepare("SELECT * FROM product WHERE name=:name");
$stmt->bindParam(":name", $_GET["name"]);
$stmt->execute();
$product = $stmt->fetch(\PDO::FETCH_ASSOC);
if(!$product) {
  header("HTTP/1.0 404 Not Found");
  return;
}
$stmt = $db->prepare("SELECT * FROM product_media WHERE product_id=:product_id ORDER BY sort_order ASC");
$stmt->bindParam(":product_id", $product["id"]);
$stmt->execute();
$medias = $stmt->fetchAll(\PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Tufftex Group - <?php echo $product["name"];?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!--css-->
<link rel="stylesheet" href="../css/stylesheet.css?v=1.0" media="screen">
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/font.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet" media="screen">
<link href="../css/owl.theme.css" rel="stylesheet">
<link href="../css/owl.carousel.css" rel="stylesheet">
<link href="../css/jquery.mThumbnailScroller.css" rel="stylesheet">



</head>

<body>
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
                                    <a href="../" style="height:77px; display: block; overflow: hidden;">
                                        <img class="light-logo img-responsive" src="../images/logo.png" alt="logolight">
                                        <img class="normal-logo img-responsive" src="../images/logo-white.png" alt="logo">
                                        <img class="dark-logo img-responsive" src="../images/logo.png" alt="logo">
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
                                            <li class="active"><a href="../">home</a></li>
                                            <li class="menu-item"><a href="../index.php#aboutus">about us</a></li>
                                            <li class="menu-item"><a href="../#product">product</a></li>
                                            <li class="menu-item"><a href="../#ourclient">our client</a></li>
                                            <li class="menu-item"><a href="../#contact">contact</a></li>
        								</ul>
                                    </div><!-- /.navbar-collapse -->
                                  </div><!-- /.container-fluid -->
                                </nav>
                        	</div><!--tuf-menu-->
                        </div><!--End header-center-->

                        <!--<div class="header-right tel-right">
                        	<div class="text-company" style="opacity: 1;">
                            	<div class="tufftex-icon-list-item">
                                    <div class="tufftex-icon-list-text"> Tufftex </div>
                                    <p class="tufftex-icon-list-title">(66)-2101-8972</p>
                                </div>
                            </div>
                        </div><!--header-right-->

                    </div><!--tufftex-vertical-align-containers-->
           		</div><!-- End menu-area -->

            </header><!-- End tufftex-head -->

            <header class="tufftex-moblie-head">
            </header><!--End tuf moblie head -->
        </div>
    </div>
    <div class="tufftex-detail">
        <div class="container">
            <div class="tuf-main">
                <!-- <h1 class="tuf-main-head text-center text-uppercase">Ar <span>Code</span></h1> -->
                <h1 class="tuf-main-head text-center text-uppercase"><?php echo $product["name"];?></h1>
                <img class="img-responsive" src="../images/arrow.png" alt="head">
                <div class="clearfix"></div>
                <div class="row product-body">
                  <div class="col-md-6 simple-img" id="display-media" style="height: 400px;">
                      <!-- <img class="img-responsive" src="../images/simple-work-1.png" alt="product"> -->
                  </div>
                  <div class="col-md-6 text-main-tuf">
                      <p><?php echo nl2br($product["content"]);?></p>
                      <?php if(!empty($product["pdf"])){?>
                      <a href="../product_pdf/<?php echo $product["pdf"];?>" target="_blank">Download PDF</a>
                      <?php }?>
                  </div>

                  <div id="media-list" class="col-md-6">
                    <ul>
                      <?php
                      foreach($medias as $media){
                      $url = $media["type"]=="youtube"?
                        "http://img.youtube.com/vi/{$media["youtube_id"]}/hqdefault.jpg":
                        "../product_media/".$media["image_path"];

                      $mediaData = $media["type"]=="youtube"?
                        $media["youtube_id"]:
                        $media["image_path"]
                      ?>
                      <li class="media" media-type="<?php echo $media["type"];?>" media-data="<?php echo $mediaData;?>">
                        <img class="img-responsive" src="<?php echo $url;?>">
                      </li>
                      <?php }?>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    #media-list {
      padding: 0 40px;
      background-color: transparent;
      height: 186px;

      position: absolute;
      bottom: 0;
      right: 0;
      height: 100px;
      margin: 0;
    }
    #media-list li img {
      height: 80px;
    }

    .tufftex-detail {
      margin-bottom: 20px;
    }

    .product-body {
      height: 425px;
    }

    .media {
      cursor: pointer;
    }
    .media img {
      margin: 0;
    }
    /*.simple-img img {
        max-height: 400px;
        max-width: 100%;
        display: inline-block;
    }*/
    #display-media {
      background: #000;
      padding: 0;
      text-align: center;
      white-space: nowrap;
      margin-top: 25px;
    }
    #display-media .middle-helper {
      display: inline-block;
      height: 100%;
      vertical-align: middle;
    }
    #display-media img, #display-media iframe {
      display: inline-block;
      /*width: 100%;*/
      vertical-align: middle;
      max-height: 100%;
      max-width: 100%;
      margin: 0;
      width: auto;
    }
    .text-main-tuf {
      height: 72%;
      overflow: auto;
    }
    </style>
<!-- javascript files -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/wow.min.js"></script>
  	<script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.mThumbnailScroller.js"></script>
    <script>
    $(function(){
      $("#media-list").mThumbnailScroller({
        type:"click-50",
				theme:"buttons-out"
      });
      var $display = $("#display-media");
      $('.media').click(function(e){
        e.preventDefault();
        var type = $(this).attr("media-type");
        var data = $(this).attr("media-data");
        if(type == "youtube") {
          $display.html('<iframe width="100%" height="400" allowfullscreen '
          + 'src="http://www.youtube.com/embed/'+data+'?autoplay=1">'
          + '</iframe>');
        }
        else {
          $display.html('<span class="middle-helper"></span><img src="../product_media/'+data+'">');
        }
      });
      $('.media:first').click();
    });
    </script>
</body>
</html>
