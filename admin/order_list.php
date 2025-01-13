<?php
  include('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    

        <style>
            .content table, td, th{
                border: 2px solid white;
                border-collapse: collapse;
                padding: 20px 10px;
            }
            .content table{
                overflow-x:scroll;
                white-space: nowrap;
            }
            .content th{
                padding: 50px 10px;
                background-color: rgb(95, 250, 255);
     
            }
            .content td{
                padding: 30px 12px;
                background-color: rgb(222, 222, 222);
            }

            .section h1{
            font-weight: bold;
            font-size: 60px;
            
        }
        </style>
</head>
<body>
<?php 


$query = "SELECT * FROM `user_orders`";
$data= mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($data);




if($num_rows != 0)
{
    ?>

    <section class="section">
        <div class="container-fluid">
            <div class="heading">
            <h1 class="text-center m-5">ALL ORDER LIST OF CUSTOMER<hr class="w-75 mx-auto"></h1>
            </div>
            <div class="content">
            
             <div class="sub-content ">
                <table class="table text-center">
                    <thead>
                    <tr> 
                        <th>order id</th>
                        <th>User name</th> 
                        <th>Password</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Product Configure</th>
                        <th>Duration</th>
                        <th>Charge</th>
                        <th>Payment id</th>
                        <th>Date</th>
                        <th>Expiry</th>
                        <th colspan="3">Operations</th>
                    </tr>
                    </thead>

                    

                    <tbody >
                        <?php
                            while($row = mysqli_fetch_assoc($data)){
                                
                                $order_id = $row['order_id'];
                                $user_name = $row['user_name'];
                                $password = $row['password'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $address = $row['address'];
                                $product = $row['product'];
                                $product_configure = $row['product_configure'];
                                $duration = $row['duration'];
                                $charge = $row['charge'];
                                $pay_id = $row['pay_id'];
                                $date = $row['date'];
                                $expiry = $row['expiry'];
                               
                        
                        
                                echo "<tr>
                                <td>".$order_id."</td>
                                <td>".$user_name."</td>
                                <td>".$password."</td>
                                <td>".$email."</td>
                                <td>".$phone."</td>
                                <td>".$address."</td>
                                <td>".$product."</td>
                                <td>".$product_configure."</td>
                                <td>".$duration."</td>
                                <td>".$charge."</td>
                                <td>".$pay_id."</td>
                                <td>".$date."</td>
                                <td>".$expiry."</td>
                                
                                <td>";
                                $currentdate = date('Y-m-d');
                                if($expiry <= $currentdate )
                                {
                                    echo "<button type='button' class='btn btn-danger' style='border: 0.1px solid black;
                                    box-shadow: none;'>Expired</button>";                                   
                                    
                                }
                                else
                                {
                                    echo "<button type='button' class='btn btn-warning' style='border: 0.1px solid black;
                                    box-shadow: none;'>Active</button>";
                                }
                                echo "</td>

                                <td><a href='emailform.php?email=$email' class='text-decoration-none'><button type='button' class='btn btn-success ' style='border: 0.1px solid black;
                                box-shadow: none;'>Aprove</button></a></td>

                                <td><a href='delete1.php?order_id=$order_id' class='text-decoration-none'><button type='button' class='btn btn-danger ' style='border: 0.1px solid black;
                                box-shadow: none;'>delete</button></a></td>
                                </tr>";
                            }     
                             ?>
                            </tbody>
 <?php                  
}
else   
{
    echo "No data found";
}

                    ?>
                </table>
             </div>
            </div>
        </div>
    </section>
   
</body>
</html>


