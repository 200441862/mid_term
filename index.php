<?php 
  require_once('./_config.php');
  require_once('_partials/_header.php');
  $conn = connect();
  $result = mysqli_query($conn, "SELECT * FROM bookings");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Fetch all the bookings rows from the database and display them in a table.
    3: Create two links for each row that point to the edit.php and delete.php files. These links must provide a query parameter called 'id' with the row's id column's value.
-->

<header>
  <h1 class="display-1">Bookings</h1>
  <hr>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Room</th>
			<th>Price</th>
			<th>Date</th>
      <th>Actions</th>
    </tr>
  </thead>
  
  <tbody>
    
    <?php
      foreach($rows as $row){
        echo '
          <tr>
            <td>'.$row['room'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['date'].'</td>
            <td> <a href="'. BASE_PATH .'/bookings/edit.php?id='.$row['id'].'">Edit</a></td>
            <td> <a href="'. BASE_PATH .'/bookings/delete.php?id='.$row['id'].'">Delete</a></td>
          </tr>
        ';
    }
  ?>
    
  </tbody>
</table>
<?php include_once('_partials/_footer.php'); ?>