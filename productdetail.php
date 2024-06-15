<?php include 'config.php';
$admin = new Admin();
include 'gold.php';
$g = $_SESSION['goldprice'];

$cid = $_GET['pid'];

$c = $admin->ret("SELECT * FROM `product` WHERE `p_id`='$cid' ");
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
      <title>Famms </title>
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
      </section><br/>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="arrival_section">
    <div class="container">
        <div class="box">
            <div class="arrival_bg_box">
                <img class="arrival_image" src="admin/controller/<?php echo $cr['p_img']; ?>" alt="">
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="heading_container remove_line_bt">
                        <h2>
                            <?php echo $cr['p_name']; ?>
                        </h2>
                    </div>
                    <p style="margin-top: 20px;margin-bottom: 30px;">
                    <?php echo $cr['p_des']; ?>
                    </p>
                    <span><b>Gram:</b> <?php echo $cr['p_gram'] ; ?></span><br/>
                    <span><b>Making Charge:</b> <?php echo $cr['making_charge'];?></span><br/>
                    <span><b>Per Gram:</b> <?php echo number_format($g, 2); ?></span><br/><br/>
                    <?php 
                    $gg = $cr['p_gram'];
                    $pg  = $g*$gg; ?>
                    <a href="">
                   ₹. <?php echo number_format($pg, 2); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><br/>


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