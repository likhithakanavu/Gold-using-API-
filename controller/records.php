<?php include '../config.php';
$admin = new Admin();

if(isset($_POST['book'])){
    $name = $_POST['name'];
    $con = $_POST['cont'];
    $date = $_POST['date'];
    $uid = $_POST['uid'];
    $time = $_POST['time'];
    $stmt = $admin->cud("INSERT INTO `booking`( `cu_id`, `name`, `contact`, `date`,`time`) VALUES ('$uid','$name','$con','$date','$time')","Inserted");
    echo "<script>alert('Reservation request has been sent');window.location.href='../index.php';</script>";

}elseif(isset($_POST['peronalize'])){
    $name = $_POST['name'];
    $con = $_POST['cont'];
    $date = $_POST['date'];
    $uid = $_POST['uid'];
    $cid = $_POST['option'];
    $image_path="uploader/".basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
    $desc = $_POST['desc'];

    $stmt = $admin->cud("INSERT INTO `customize`( `date`,`contact`,`name`,`c_id`,`cu_id`, `cz_img`, `cz_des`) VALUES ('$date','$con','$name','$cid','$uid','$image_path','$desc')","Inserted");
    echo "<script>alert('peronalize request has been sent');window.location.href='../index.php';</script>";

}elseif(isset($_GET['nid'])){
    $nid = $_GET['nid'];
    $s = $admin->cud("UPDATE `notification` SET `n_status`='checked' WHERE `n_id`='$nid'","updated");
    echo "<script>window.location.href='../status.php';</script>";
}elseif(isset($_POST['feedback'])){
    $uid = $_POST['uid'];
    $s = $_POST['subject'];
    $desc = $_POST['desc'];
    $s = $admin->cud("INSERT INTO `feedback`( `cu_id`, `f_sub`, `f_msg`) VALUES ('$uid','$s','$desc')","updated");
    echo "<script>alert('feedback message has been sent');window.location.href='../index.php';</script>";

}
?>