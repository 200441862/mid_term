<?php 
    session_start();
    require_once('../_includes/_utilities/_connect.php');
    //$data = [];
    $conn = connect();
    $room = $_POST['room'];
    $price = $_POST['price'];
    $date = date("Y-m-d", strtotime($_POST['date']));
    $id = $_POST["id"];
    //$date = DATE_FORMAT($_POST['date'],'%m-%d-%y');
    $sql = "UPDATE bookings SET room= '$room', price = '$price', date = '$date' WHERE id= $id";
    if($conn ->query($sql)) {
        $_SESSION['notification'] = 'Record Updated';
        header("Location:../notification.php");
        //echo 'New Record added';
        exit();
    } else {
        $_SESSION['notification'] = 'Failed to update the record';
        //echo "Failed  " . $conn -> error;
        header("Location:../notification.php");
        exit();
    }
?>