<?php
  include('../connect.php');

  $user_id_ = $_GET['user_id_'];

  $query ="DELETE FROM `contact` WHERE `u_id` = '$user_id_'";

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
