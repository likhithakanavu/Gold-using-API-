
<?php include '../config.php';
$admin = new Admin(); 
session_start();
if(!isset($_SESSION['Cid'])){
   echo"<script>alert('please login');window.location.href='../reg.php';</script>";
}
$uid = $_SESSION['Cid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

	 <!-- bootstrap core css -->
	 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="../css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="../css/responsive.css" rel="stylesheet" />
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	

</head>


<body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
    
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3> Personalized Order</h3>
                  </div>
				  <p><a href="../index.php" style="color:white">Home</a> / page </p>
               </div>
            </div>
         </div>
      </section>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your Order</h1>
						</div>
						<form action="../controller/records.php" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="hidden" value="<?php echo $uid ; ?>" name="uid" required>

										<input class="form-control" type="text" name="name" required>
									</div>
									<span class="in-out hidden-xs hidden-sm"></span>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Contact No</span>
										<input class="form-control" type="tel" name="cont" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" min="<?php echo date('Y-m-d'); ?>" name="date" required>
									</div>
									<span class="in-out hidden-xs hidden-sm"></span>
								</div>
								<div class="col-md-6">
								<div class="form-group">
            <span class="form-label">Select Option</span>
            <select class="form-control" name="option" required>
                <option value="">Select an option</option>
				<?php $stmt = $admin->ret("SELECT * FROM `category`");
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value="<?php echo $row['c_id'] ; ?>"><?php echo $row['c_name'] ; ?></option>
                <?php } ?>
            </select>
        </div>
		<span class="in-out hidden-xs hidden-sm"></span>

								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">uploade Customized image </span>
									
										<input class="form-control" type="file" name="image" required>
									</div>
									<span class="in-out hidden-xs hidden-sm"></span>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">description</span>
										<textarea class="form-control"  name="desc" required> </textarea>
									</div>
								</div>
							</div>
							<div class="row">
						
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="peronalize" style="margin-left:265px">Reserve</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include '../footer.php' ?>
      <!-- footer section -->
      <!-- jQery -->
      <script src="../js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="../js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="../js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="../js/custom.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>