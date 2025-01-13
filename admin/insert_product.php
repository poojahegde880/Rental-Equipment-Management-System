<?php
 include("../connect.php");
 
 if(isset($_POST["submit"]))
    {

        $name = $_POST['prod_name'];
        $discription = $_POST['discription'];
        $more_discription = $_POST['more_discription'];
        $select_category = $_POST['select_category'];
        $price = $_POST['price'];
        
        $prod_image = $_FILES['prod_image']['name'];

        $temp_image = $_FILES['prod_image']['tmp_name'];
        

        if($name=='' or $discription=='' or $select_category=='' or $price=='' or $temp_image==''){
            echo "<script>alert('Please fill all the fields')</script>";
            exit();
        }
        else{
            move_uploaded_file($temp_image,"./product_images/$prod_image");

            // insert
            $query = "INSERT INTO  `products`(`product_name`, `product_discription`, `category_id`, `product_image`, `product_price`, `view_more`) VALUES ('$name', '$discription', '$select_category', '$prod_image', '$price','$more_discription')";


             $data = mysqli_query($conn,$query);
             if($data){
                echo "<script>alert('succefully inserted the Product')</script>";
             }

        }

        

        
    }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-Quote-Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .insert {
            font-weight: bold;
            font-size: 45px;
        }

        .form-content input[type=text] {

            border: 0.1px solid black;
            box-shadow: none;
        }

        .form-content input[type=file] {

            border: 0.1px solid black;
            box-shadow: none;
        }

        .form-content input[type=number] {

            border: 0.1px solid black;
            box-shadow: none;
        }

        #inputcity {
            border: 0.1px solid black;
            box-shadow: none;
        }

        #plan{
            border: 0.1px solid black;
            box-shadow: none;
        }

        #inputproduct {
            border: 0.1px solid black;
            box-shadow: none;
        }

        #inputconfigure {
            border: 0.1px solid black;
            box-shadow: none;
        }
        #upassword{
            border: 0.1px solid black;
            box-shadow: none;
        }


    </style>
</head>

<body>
    <section class="form-section mx-auto w-75 my-4">
        <div class="container mx-0">
            <div class="row justify-content-center">
                <div class="col-12  col-lg-8 col-xl-9">
                    <div class="form-div border bg-light">
                        <div class="form-content px-4">
                            <h1 class="mb-4 insert text-center py-3">INSERT PRODUCTS</h1>
                            <form action="#" method="POST" enctype="multipart/form-data" class="row g-3">
                                <!-- productname -->
                                <div class="col-12 mb-2">
                                    <label for="prod_name" class="form-label">Product name</label>
                                    <input type="text" class="form-control" name="prod_name" id="prod_name" autocomplete="off">

                                </div>
                                <!-- discription -->
                                <div class="col-12 mb-2">
                                    <label for="discription" class="form-label">Product Discription</label>
                                    <input type="text" class="form-control" name="discription" id="discription" autocomplete="off">

                                </div>
                                <!-- view more discription -->
                                <div class="col-12 mb-2">
                                    <label for="more_discription" class="form-label">More Discription</label>
                                    <input type="text" class="form-control" name="more_discription" id="more_discription" autocomplete="off">
                                </div>
                                <!-- select_category -->
                                <div class="col-12 mb-2 ">
                                    <label for="discription" class="form-label">Select a Catogory</label>
                                    <select id="select_category" name="select_category" class="form-select" style="border: 0.1px solid black;box-shadow: none;">
                                        <option value=""></option> 
                                        <?php
                                             $select_query = "SELECT * FROM `categories`";
                                             $result_query = mysqli_query($conn,$select_query);
                                            while( $row = mysqli_fetch_assoc($result_query)){
                                                $cat_id =  $row['Category_id'];
                                                $cat_name = $row['Category_name'];
                                                echo "<option value='$cat_id'>$cat_name</option>";
                                            }
                                            
                                        ?>                                 
                                    </select>
                                </div>

                                 <!-- image -->
                                 <div class="col-12 mb-2">
                                    <label for="prod_image" class="form-label">Product image</label>
                                    <input type="file" class="form-control" name="prod_image" id="prod_image" style="border: 0.1px solid black;box-shadow: none;">

                                </div>
                                 <!-- price -->
                                 <div class="col-12 mb-2">
                                    <label for="price" class="form-label">Product price</label>
                                    <input type="text" class="form-control" name="price" id="price" autocomplete="off">

                                </div>
                             

                                <!-- submit button -->
                                <div class="col-12 mx-auto w-50">
                                    <button type="submit" name="submit" class="btn btn-warning mb-4 w-100">Insert Products</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

