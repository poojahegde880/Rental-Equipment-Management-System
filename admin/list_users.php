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
        table th,td{
            border: 2px solid white;
                border-collapse: collapse;
                padding: 20px 10px;
           
        }
   
            .content th{
                padding: 45px 10px;
                background-color: rgb(95, 250, 255);
     
            }
            .content td{
                padding: 25px 12px;
                background-color: rgb(222, 222, 222);
            }
        .content h1{
            font-weight: bold;
            font-size: 60px;
            
        }
       
    </style>
</head>
<body>
<?php 


$sel_query = "SELECT * FROM `user_register`";
$result_query = mysqli_query($conn,$sel_query);
$num_rows = mysqli_num_rows($result_query);




if($num_rows != 0)
{
    ?>

    <section class="section">
        <div class="container">
            
            <div class="content">
            <h1 class="text-center m-5">DETAILS OF THE USER <hr class="w-75 mx-auto"></h1>
             <div class="sub-content py-3 px-5">
                <table class="table border text-center ">
                    <thead>
                    <tr> 
                        <th>User id</th>
                        <th>User name</th> 
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Password</th>
                       
                    </tr>
                    </thead>

                    
                  

                    

                    <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result_query))
                    {
    
                        $user_id = $row['user_id'];
                        $user_name = $row['user_name'];
                        $password_ = $row['email'];
                        $email_ = $row['phone']; 
                        $phone_ = $row['address']; 
                        $address_ = $row['password']; 
                    
                                echo "<tr>
                                <td>".$user_id."</td>
                                <td>".$user_name."</td>
                                <td>".$password_."</td>
                                <td>".$email_."</td>
                                <td>".$phone_."</td>
                                <td>".$address_."</td>
                                
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






