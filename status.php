<?php include 'config.php';
$admin = new Admin(); 
session_start();
if(!isset($_SESSION['Cid'])){
   
   echo"<script>alert('please login');window.location.href='reg.php';</script>";
}
$uid = $_SESSION['Cid'];
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
      <title>Status</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <!-- MDB CSS -->
<link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.3.0/css/mdb.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- MDB JS -->
<script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.3.0/js/mdb.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
     <?php include 'header.php' ?>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Status</h3>
                  </div>
               </div>
            </div>
         </div>
      </section><br/><br/>
      <!-- end inner page section -->
      <!-- why section -->
      <h1 style="margin-left:650px"><b><u>Reservation</u></b></h1>
      <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
    <th><b>SI/NO</b></th>
      <th><b>Name</b></th>
      <th><b>Contact</b> </th>
      <th><b>Date</b></th>
      <th><b>Status</b></th>
      <!-- <th>Actions</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    $stmt = $admin->ret("SELECT * FROM `booking` WHERE `cu_id`='$uid'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
         
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $i++ ; ?></p>
           
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo $row['name'] ; ?></p>
        <!-- <p class="text-muted mb-0">IT department</p> -->
      </td>
      <td>
      <p class="fw-normal mb-1"><?php echo $row['contact'] ; ?></p>
       
      </td>
      <td> <p class="fw-normal mb-1"><?php echo $row['date'] ; ?></p>
        <p class="text-muted mb-0"><?php echo $row['time'] ; ?></p></td>
      <td>

      <?php if($row['b_status']=='accepted'){ ?>
        <button type="button" class="btn btn-success" data-mdb-ripple-init>Approved</button>
        <?php }elseif($row['b_status']=='rejected'){?>
        <button type="button" class="btn btn-danger" data-mdb-ripple-init>Rejected</button>
            <p>Please book a slot for another day.</p>
            <?php }else{ ?>
      <button type="button" class="btn btn-warning" data-mdb-ripple-init>Pending</button>
    <?php } ?>  
    </td>
    </tr>
    <?php } ?>
   
    
  </tbody>
</table><br/><br/>

<h1 style="margin-left:600px"><b><u>Personalized Booking</u></b></h1>

<?php 
$not = $admin->ret("SELECT * FROM `notification` WHERE `cu_id`='$uid' AND `n_status`='sent'");
$count=$not->rowCount();
if($count>0){ 
    while($nrow = $not->fetch(PDO::FETCH_ASSOC)){?>

<section>
  <div class="square_box box_three"></div>
  <div class="square_box box_four"></div>
  <div class="container mt-5">
    <div class="row">


    <div class="col-sm-12">
        <div class="alert fade alert-simple alert-primary alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
        <a href="controller/records.php?nid=<?php echo $nrow['n_id'] ; ?>"><button  class="close " >
        <a href="controller/records.php?nid=<?php echo $nrow['n_id'] ; ?>"><i class="fa fa-times alertprimary"></i></a>
									<!-- <span class="sr-only">Close</span> -->
								</button></a>
          <i class="start-icon fa fa-thumbs-up faa-bounce animated"></i>
          <strong class="font__weight-semibold"><?php echo $nrow['n_msg'] ; ?></strong>
        </div>
        </div>
            </div>
            </div>
            </div>
            </div>
            </section>
<?php } }?>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
    <th><b>SI/NO</b></th>
      <th><b>Name</b></th>
      <th><b>Contact</b> </th>
      <th><b>Date</b></th>
      <!-- <th>Image</th> -->
      <!-- <th>Description</th> -->
      <th><b>Status</b></th>
      <!-- <th>Actions</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    $stmt = $admin->ret("SELECT * FROM `customize` WHERE `cu_id`='$uid'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
         
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $i++ ; ?></p>
           
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo $row['name'] ; ?></p>
        <!-- <p class="text-muted mb-0">IT department</p> -->
      </td>
      <td>
      <p class="fw-normal mb-1"><?php echo $row['contact'] ; ?></p>
       
      </td>
      <td> <p class="fw-normal mb-1"><?php echo $row['date'] ; ?></p>
       
      <td>

      <?php if($row['cz_status']=='accepted'){ ?>
        <button type="button" class="btn btn-success" data-mdb-ripple-init>Approved</button>
        <?php }elseif($row['cz_status']=='rejected'){?>
        <button type="button" class="btn btn-danger" data-mdb-ripple-init>Rejected</button>
            <!-- <p>Please book a slot for another day.</p> -->
            <?php }else{ ?>
      <button type="button" class="btn btn-warning" data-mdb-ripple-init>Pending</button>
    <?php } ?>  
    </td>
    </tr>
    <?php } ?>
   
    
  </tbody>
</table><br/><br/>


      <!-- end why section -->
      <!-- arrival section -->
    
      <!-- end arrival section -->
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