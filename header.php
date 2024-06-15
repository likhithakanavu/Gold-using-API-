<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><span>GOLD</span></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.php">About</a>
                        </li>
                       <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li> -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Product <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <?php $hs = $admin->ret("SELECT * FROM `category`");
                              while($hr= $hs->fetch(PDO::FETCH_ASSOC)){ ?>
                              <li><a href="product.php?cid=<?php echo $hr['c_id'] ; ?>"><?php echo $hr['c_name'] ; ?></a></li>
                              <?php } ?>
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Booking <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                             
                              <li><a href="booking/index.php">Reservation</a></li>
                              <li><a href="personaliz/index.php"> personalized Order</a></li>
                           
                           </ul>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="Status.php">Status</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li> -->
                        
                  
    <a href="reg.php"><button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-user" aria-hidden="true"></i>
                           </button></a>


                           <?php
                           if(isset($_SESSION['Cid'])){ ?>
                              <a href="controller/logout.php"> <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-sign-out" aria-hidden="true"></i>
                           </button> </a>
                         <?php  }

                           ?>

                       
                           
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>