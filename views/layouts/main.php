<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <!-- basic -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Giftshop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="header_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-lg-2">
                  <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle-menu.png" class="toggle_menu"></span>
               </div>
               <div class="col-sm-6 col-lg-2">
                  <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               </div>
               <div class="col-sm-8">
                  <div class="menu_text">
                     <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="gifts.html">Our gifts</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                        <li><a href="#"><img src="images/user-icon.png"></a></li>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.html">Home</a>
                              <a href="about.html">About</a>
                              <a href="gifts.html">Our gifts</a>
                              <a href="shop.html">Shop</a>
                              <a href="contact.html">Contact Us</a>
                           </div>
                        </div>
                  </div>
                  </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->

      <main>
        <?=$content ?>
      </main>

      
      <div class="section_footer">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="footer_logo"><img src="images/footer-logo.png"></div>
                     <div class="dummy_text"><img src="images/map-icon.png"><span class="address_text">Address : No 40 Baria Sreet 133/2, NewYork, USA.</span></div>
                     <div class="call_text"><img src="images/call-icon.png"><span class="address_text">Phone :  +(1234) 567 890</span></div>
                     <div class="call_text"><img src="images/email-icon.png"><span class="address_text">Email : gift@wenro.com</span></div>
                     <div class="input-group mb-3">
                        <input class="email_bt" type="text" placeholder="Enter your email">
                        <div class="input-group-append">
                           <button class="subscribe_bt" type="Subscribe">Subscribe</button>  
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <h2 class="account_text">My Account</h2>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Checkout</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">My Account</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">My Orders</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">My Credit Slips</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">My Addresses</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">My Personal Info</span></div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <h2 class="account_text">Information</h2>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Specials</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">New Products</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Best Sellers</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Our Stores</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Contact Us</span></div>
                     <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Secure Payment</span></div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <h2 class="adderess_text">Instagram</h2>
                     <div class="footer-img">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="footer-img"><img src="images/footer-img1.png" style="width: 100%;"></div>
                              <div class="footer-img"><img src="images/footer-img2.png" style="width: 100%;"></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="footer-img"><img src="images/footer-img3.png" style="width: 100%;"></div>
                              <div class="footer-img"><img src="images/footer-img4.png" style="width: 100%;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

      
      <!-- section footer end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
