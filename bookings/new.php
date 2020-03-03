<?php

    require_once('../_config.php');
    include_once('_partials/_header.php');
?>
    <div class="form">
        <form action="<?= BASE_PATH ?>/bookings/insert.php" method="POST">
        
            <label for="room">
                <span>Room</span>
                <input type="text" name="room" id="room">
            </label>
            <br>
            <label for="price">
                <span>Price</span>
                <input type="text" name="price" id="price">
            </label>
            <br>
            <label for="date">
                <span>Date</span>
                <input type="date" name="date" id="date">
            </label>
            <br>
            <input type="submit" value="submit">

        </form>
    </div>
<?php include_once('_partials/_footer.php'); ?>