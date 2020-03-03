<?php 
    require_once('../_config.php');
    require_once('../_includes/_utilities/_connect.php');
    include_once('_partials/_header.php');
    //$data = [];
    $conn = connect();
    $id = $_GET["id"];

    $result = mysqli_query($conn, "SELECT * FROM bookings WHERE id=$id");
    $rows = mysqli_fetch_assoc($result);
?>
    <div class="form">
        <form action="<?= BASE_PATH ?>/bookings/update.php" method="POST">
        
        <input type="hidden" name="id" value="<?= $id ?>">
            <label for="room">
                <span>Room</span>
                <input type="text" name="room" id="room" value="<?= $rows['room'] ?>">
            </label>
            <br>
            <label for="price">
                <span>Price</span>
                <input type="text" name="price" id="price" value="<?= $rows['price'] ?>">
            </label>
            <br>
            <label for="date">
                <span>Date</span>
                <input type="date" name="date" id="date" value="<?= $rows['date'] ?>">
            </label>
            <br>
            <input type="submit" value="submit">

        </form>
    </div>
    <?php include_once('_partials/_footer.php'); ?>