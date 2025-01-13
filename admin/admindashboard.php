<?php

include("../connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
    <style>
        .head h1{
            font-weight: bold;
                font-size: 60px;
        }
        .container .card{
            width: 200px;
            height: 20vh;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-left: auto;
            margin-right: auto;
            
        }
        .container .card p{
            margin-top: auto;
            margin-bottom: auto;
            font-weight: 600;
            font-size: 17px;
        }
       
    </style>
</head>
<body>


    <?php
 session_start();
        $admin_id = $_SESSION["admin_id"];
        

    $sel_query = "SELECT * FROM `admin_login` where admin_id = '$admin_id'";
    $result_query = mysqli_query($conn,$sel_query);
    $num_rows = mysqli_num_rows($result_query);

    $row = mysqli_fetch_assoc($result_query);
    $admin_name = $row['admin_name'];
    ?>

    <section>
        <div class="container">
            <div class="head ">
                <h1 class="text-center pt-5 pb-2">MANAGE DETAILS</h1>
                <p class="text-center fs-4 pb-2">Welcome <?php echo $admin_name ?></p>
            </div>
            <div class="logout pt-3  text-center">
                <button type="button" class="btn btn-danger"><a href="logout.php" class="text-light text-decoration-none">Log out</a></button>
            </div>
            <div class="row pt-5 px-5 text-center ">
                <div class="col pb-3">
                <a href="insert_product.php" class="text-light text-decoration-none">
                    <div class="card">
                        <p class="text-dark">Insert Items</p>
                    </div>
                </a>
                </div>
                
                <div class="col pb-3">
                <a href="list_users.php" class="text-light text-decoration-none">
                    <div class="card">
                        <p class="text-dark">Users Lists</p>
                    </div>
                </a>
                </div>
                <div class="col pb-3">
                <a href="order_list.php" class="text-light text-decoration-none">
                    <div class="card">
                        <p class="text-dark">All Orders</p>
                    </div>
                </a>
                </div>

                <div class="col pb-3">
                <a href="custer_message.php" class="text-light text-decoration-none">
                    <div class="card">
                        <p class="text-dark">Customer Messages</p>
                    </div>
                </a>
                </div>
                
            </div>
            


        </div>
    </section>
</body>
</html>