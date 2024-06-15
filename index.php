<?php include 'config.php';
$admin = new Admin(); 
session_start();
include 'gold.php';
$gid = $_SESSION['goldprice'];
// echo  $gid ;
?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <style>
         .img-box img.category-image {
    width: 80%; /* Set width to 100% to make sure the image fits its container */
    height: 400px; /* Set a fixed height for all images */
    object-fit: cover; /* This ensures the image fills the container while maintaining aspect ratio */
}
.logo_footer h1 {
    font-size: 44px; /* Adjust font size as needed */
    font-weight: bold; /* Adjust font weight as needed */
}

.black {
    color: #000; /* Black color */
}

.pink {
    color: #ff69b4; /* Pink color */
}


      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
      <?php include 'header.php';  ?>
         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box" >
               <img src="images/ghome.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1 >
                                    <span>
                                    Discover Luxurious Gold 
                                    </span>
                                    <br>
                                    Treasures Await!
                                 </h1>
                                 <p >
                                 Whatever the occasion, we've got a beautiful piece of jewellery for you.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    <?php echo  number_format($gid, 2) ; ?> /gram
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Shop 
                                    </span>
                                    <br>
                                    By Gender
                                 </h1>
                                 <p>
                                 First-class jewelry for first-class Men, Women & Children.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    <?php echo  number_format($gid, 2) ; ?> /gram
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    We Make You
                                    </span>
                                    <br>
                                  Feel Special
                                 </h1>
                                 <p>
                                   celebrating life's most precious moments with the timeless beauty of golds. As timeless expressions of love, affection, and cherished memonts. 
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    <?php echo  number_format($gid, 2) ; ?> /gram
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
      <!-- why section -->


      <section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                 Shop By  <span>Category</span>
            </h2>
        </div>
        <div class="row">
        <?php 
$cs = $admin->ret("SELECT * FROM `category`");
while($rc = $cs->fetch(PDO::FETCH_ASSOC)){ 
?>
    <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box">
            <div class="option_container">
                <div class="options">
                    <a href="product.php?cid=<?php echo $rc['c_id'] ; ?>" class="option1">
                        Explore More
                    </a>
                </div>
            </div>
            <div class="img-box">
                <img src="admin/controller/<?php echo $rc['c_img'] ; ?>" alt="" class="category-image">
            </div>
            <div class="detail-box">
                <h5>
                   <?php echo $rc['c_name']; ?>
                </h5>
            </div>
        </div>
    </div>
<?php 
} 
?>

                       
        </div>
    </div>
</section>

      
      <!-- end why section -->
      
      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/ghome5.jpg" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #NewArrivals
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                     Discover opulent treasures, where every detail shimmers with elegance. Let your style transcend with our latest offerings, designed to adorn you in luxury. Step into a realm where sophistication meets excellence, and elevate your wardrobe with our exquisite selections. Explore our collection today and embrace the allure of new beginnings
                     </p>
                     <a href="">
                     Shop Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      
      <!-- product section -->
      
      <!-- end product section -->

      <!-- subscribe section -->
      <!-- <section class="subscribe_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3>Subscribe To Get Discount Offers</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <form action="">
                           <input type="email" placeholder="Enter your email">
                           <button>
                           subscribe
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- end subscribe section -->
      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Customer's Testimonial
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/user1.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                            Jhon
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                           I appreciated the availability of customer support options . It's reassuring to know that assistance is readily available when needed.
                           </p>
                        </div>
                     </div>
                  </div>
                  <?php 
                  $stmtf = $admin->ret("SELECT * FROM `feedback` INNER JOIN `customer` ON feedback.cu_id = customer.cu_id ");
                  while($rowf = $stmtf->fetch(PDO::FETCH_ASSOC)){
                  ?>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/user1.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                             <?php echo $rowf['cu_name'] ; ?>
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                           <?php echo $rowf['f_msg'] ; ?>
                           </p>
                        </div>
                     </div>
                  </div>

                 <?php } ?>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- end client section -->
      <!-- footer start -->
    <?php include 'footer.php' ?>
      <!-- footer end -->
    
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>