<?php
include("../connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .content table, td, th{
                border: 2px solid white;
                border-collapse: collapse;
                padding: 20px 10px;
            }
        .content th{
                padding: 50px 10px;
                background-color: rgb(95, 250, 255);
     
            }
            .content td{
                padding: 30px 12px;
                background-color: rgb(222, 222, 222);
            }
    
        .content h1{
            font-weight: bold;
            font-size: 60px;
            
        }
        .card-1{
            width: 100%;
            height: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


        }
        .section h1{
            font-weight: 600;
            font-size: 50px;
        }
       
    </style>
</head>
<body>
<?php 

$select_query = "SELECT * FROM `contact`";
$result_query = mysqli_query($conn,$select_query);
$num_rows = mysqli_num_rows($result_query);


if($num_rows != 0)
{
    ?>

    <section class="section">
        <div class="container-fluid">
            <div class="heading">
            <h1 class="text-center m-5">CUSTOMERS MESSAGE LIST<hr class="w-75 mx-auto"></h1>
            </div>
            <div class="content">
            
             <div class="sub-content mx-5">
                <table class="table text-center ">
                    <thead>
                    <tr> 
                        <th>User Id</th>
                        <th>User name</th> 
                        <th>Email</th>
                        <th>Message</th>
                        <th>Operations</th>
                    
                    </tr>
                    </thead>

                    

                    <tbody >
                        <?php
                            while($row = mysqli_fetch_assoc($result_query)){
    
                                $user_id_ = $row['u_id'];
                                $user_name = $row['name'];
                                $email_ = $row['email']; 
                                $message = $row['message'];
                               
                        
                        
                                echo "<tr>
                                <td>".$user_id_."</td>
                                <td>".$user_name."</td>
                                <td>".$email_."</td>
                                <td>".$message."</td>
                                
                                

                                <td><a href='delete2.php?user_id_=$user_id_' class='text-decoration-none'><button type='button' class='btn btn-danger ' style='border: 0.1px solid black;
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




 

