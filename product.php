<?php include 'config.php';
$admin = new Admin();
include 'gold.php';
$g = $_SESSION['goldprice'];
$cid = $_GET['cid'];

$c = $admin->ret("SELECT * FROM `category` WHERE `c_id`='$cid' ");
$cr = $c->fetch(PDO::FETCH_ASSOC);
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
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
        <?php include 'header.php'; ?>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3> Our Products </h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                   <!-- <span>products</span> -->
               </h2>
            </div>
            <div class="row">
               <?php $ps = $admin->ret("SELECT * FROM `product` INNER JOIN `category` ON `category`.`c_id`=`product`.`c_id` WHERE `product`.`c_id`= '$cid' ");
               while($pr = $ps->fetch(PDO::FETCH_ASSOC)){
                ?>
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <?php 
                           $gg = $pr['p_gram'];
                           $pg = $gg*$g  ?>
                        <a href="" class="option2">
                        ₹. <?php echo number_format($pg, 2); ?>
                           </a>
                           <a href="productdetail.php?pid=<?php echo $pr['p_id'] ; ?>" class="option1">
                           View more Details
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="admin/controller/<?php echo $pr['p_img'] ; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo $pr['p_name'] ; ?>
                        </h5><br/><br/>
                        <!-- <h6>
                        ₹ <?php echo $pr['p_price'] ; ?>
                        </h6> -->
                     </div>
                  </div>
               </div>
               <?php } ?>

              
            </div>
           
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
     <?php include 'footer.php' ?>
      <!-- footer section -->
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