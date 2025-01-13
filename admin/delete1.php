<?php
  include('../connect.php');

  $order_id = $_GET['order_id'];

  $query ="DELETE FROM `user_orders` WHERE `order_id` = '$order_id'";

  $data = mysqli_query($conn, $query);

  $conn->close();
  if($data)
    {
            echo "<script>alert('Order history deleted successfully.');</script>";
    }
    else{
            echo "failed";

    }
?>
