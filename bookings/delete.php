<?php 
    session_start();
    require_once('../_includes/_utilities/_connect.php');
    $conn = connect();
    $id = $_GET['id'];
    $sql = "DELETE FROM bookings WHERE id= $id";
    if($conn ->query($sql)) {
        $_SESSION['notification'] = 'Record Deleted';
        header("Location:../notification.php");
        //echo 'New Record added';
        exit();
    } else {
        $_SESSION['notification'] = 'Failed to delete the record';
        //echo "Failed  " . $conn -> error;
        header("Location:../notification.php");
        exit();
    }
?>