<?php 
    session_start();
    require_once('../_includes/_utilities/_connect.php');
    //$data = [];
    $conn = connect();
    $room = $_POST['room'];
    $price = $_POST['price'];
    $date = date("Y-m-d", strtotime($_POST['date']));
    //$date = DATE_FORMAT($_POST['date'],'%m-%d-%y');
    
    $sql = "INSERT INTO bookings (room, price, date) VALUES ('$room', '$price','$date')";
    if($conn ->query($sql)) {
        $_SESSION['notification'] = 'New Record added';
        header("Location:../notification.php");
        //echo 'New Record added';
        exit();
    } else {
        $_SESSION['notification'] = 'Failed to data new record';
        //echo "Failed to connect to MySQL: " . $conn -> error;
        header("Location:../notification.php");
        exit();
    }
?>