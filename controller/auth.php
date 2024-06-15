<?php  include '../config.php';
$admin = new Admin();
session_start();
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $pass = $_POST['pass'];
   

    $stmt1=$admin->ret("SELECT * FROM `customer` WHERE `cu_email`='$email'");
    // $row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $no = $stmt1->rowCount();
    if($no>0){
      echo "<script>alert('Email already existed');window.location.href='../reg.php'</script>";
    }
        
      $rstmt=$admin->cud("INSERT INTO `customer`(`cu_name`, `cu_email`, `cu_phone`, `cu_pass`) VALUES ('$name','$email','$phone','$pass')","Inserted");  
    
      $stmt2=$admin->ret("SELECT * FROM `customer` WHERE `cu_email`='$email' AND `cu_pass`='$pass' ");
    $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
    
    $num=$stmt2->rowCount();
    if($num>0)
    {
    
    echo "<script>alert('Registered Successfully');window.location.href='../reg.php'</script>";
    }
    
    
    echo "<script>alert('Unsuccessful');window.location.href='../reg.php'</script>";
    
    
    
    }elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $stmt = $admin->ret("SELECT * FROM `customer` WHERE `cu_email`='$email' AND `cu_pass`='$pass'");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $num = $stmt->rowCount();
        if($num>0){
            $uid=$row['cu_id'];
            $_SESSION['Cid']=$uid;
            echo "<script>alert('Successfully logged in.');window.location.href='../index.php'</script>";
        }
        echo "<script>alert('Unsuccessful');window.location.href='../reg.php'</script>";
    }
    echo "<script>alert('something went wrong');window.location.href='../reg.php'</script>";
    
    ?>